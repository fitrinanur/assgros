<?php

namespace App\Http\Controllers;


use App\Frequent;
use Illuminate\Http\Request;

class FrequentController extends Controller
{
    private $frequent;

    public function __construct(Frequent $frequent)
    {
        $this->middleware('auth');
        $this->frequent = $frequent;
    }

    public function index()
    {
        $data['freqs'] = $this->frequent->get();
        return view('pages.frequent', $data);
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
