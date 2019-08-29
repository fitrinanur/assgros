<?php

use Illuminate\Database\Seeder;

class StuffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \Illuminate\Support\Facades\DB::table('stuffs')->truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        $converter = new \App\Services\FileConverterService();
        $file = 'imports/stuffs.csv';

        $fileArray = $converter->csvToArray($file);

        // dd($fileArray);
        foreach ($fileArray as $key => $data) {
        //   dd($data);
            \App\Stuff::create([
                'stuff_code' => $data['kode_barang'],
                'stuff_name' => $data['nama_barang'],
            ]);
        }
    }
}
