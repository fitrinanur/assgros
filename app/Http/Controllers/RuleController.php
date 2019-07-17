<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Frequent;
use App\Rule;
use App\Setting;
use Illuminate\Http\Request;
use Phpml\Association\Apriori;

class RuleController extends Controller
{
    private $setting;
    private $barang;
    private $rule;
    private $frequent;

    public function __construct(Setting $setting, Barang $barang, Rule $rule, Frequent $frequent)
    {
        $this->middleware('auth');
        $this->setting = $setting;
        $this->barang = $barang;
        $this->rule = $rule;
        $this->frequent = $frequent;
    }

    public function index()
    {
        $data['min_conf'] = $this->setting->find('min_conf')->value;
        $data['min_sup'] = $this->setting->find('min_sup')->value;
        $data['rules'] = $this->rule->paginate(30);
        $data['support'] = $this->info();
        return view('pages.rule', $data);
    }

    public function info()
    {
        $frequents = $this->frequent->get();

        $avg_support = 0;
        if ($frequents) {
            $avg_support = $frequents->avg('support');
        }

        // dd($frequents->avg('support'));
        return $avg_support;
    }

    public function proses(Request $request)
    {
        $min_conf = $this->setting->find('min_conf');
        $min_conf->value = $request->min_conf;
        $min_conf->save();

        $min_sup = $this->setting->find('min_sup');
        $min_sup->value = $request->min_sup;
        $min_sup->save();

        $labels = [];
        $associator = new Apriori($request->min_sup/100, $request->min_conf/100);
        $associator->train($this->barang->getData(), $labels);
        // dd($associator);
        $rules = $associator->getRules();
        
        $rules = collect($rules)->map(function($val){
            return [
                'antecedent' => implode(',',$val['antecedent']),
                'consequent' => implode(',',$val['consequent']),
                'support' => $val['support'],
                'confidence' => $val['confidence']
            ];
        })->toArray();
        
       

        $this->rule->truncate();
        $this->rule->insert($rules);

        $freqs = $this->barang->freqItem($request->min_sup);
        $this->frequent->truncate();
        $this->frequent->insert($freqs);

        return redirect('rule')->with('status', 'Rule berhasil diperbarui');
    }
}
