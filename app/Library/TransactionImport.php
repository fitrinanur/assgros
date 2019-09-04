<?php

namespace App\Library;

use App\Transaction;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionImport implements ToModel,WithHeadingRow
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transaction([
            'code' => $row['code'],
            'kode_barang' => $row['kode_barang'],
            'nama_barang' => $row['nama_barang'],
        ]);
    }

}