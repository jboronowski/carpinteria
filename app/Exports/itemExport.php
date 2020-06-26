<?php

namespace App\Exports;

use App\Items;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ItemExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'id',
         'item_nombre',
         'item_descripcion',
         'categoria_id'
        ];
    }
    public function collection()
    {
        $items = DB::table('Items')->get();
              return $items;
        
    }
}