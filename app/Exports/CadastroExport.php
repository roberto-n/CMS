<?php

namespace App\Exports;

use App\Models\CadastroModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class CadastroExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CadastroModel::all();
    }
}
