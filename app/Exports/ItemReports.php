<?php
namespace App\Exports;
use App\Barang;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use DB;


class ItemReports implements FromQuery, WithMapping, WithHeadings, WithColumnFormatting, ShouldAutoSize, WithEvents
{
    use Exportable;
    private $data;
    
    public function __construct($data)
    {
        $this->data = $data;

        return $this;
    }

    public function query()
    {
        return $this->data;
    }

   

     /**
    * @var Barang $items
    */
    public function map($items): array
    {
        return [
            $items->no_faktur,
            $items->kode_barang,
            $items->nama_barang,

            Date::dateTimeToExcel($items->created_at),
        ];
    }

    public function headings(): array
    {
        return [
            'Faktur',
            'Kode Barang',
            'Nama Barang',
            
        ];
    }

     /**
     * @return array
     */
    public function columnFormats(): array
    {
        return [
            'Q' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

     /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => 'FFFF0000'],
                        ],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => [
                            'argb' => 'FFA0A0A0',
                        ],
                    ],
                ];
                $cellRange = 'A1:Q1'; // All headers
                
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
                $event->sheet->getStyle($cellRange)->applyFromArray($styleArray);
            },
        ];
    }
}
