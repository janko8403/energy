<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\{Configuration, MeasurementOneMinute};
use App\Enums\ActionMeasurement;
use App\Incoming\Factory;

class MeasurementExport implements FromCollection, WithTitle, WithHeadings
{

    public function __construct($data)
    {
        $this->data = $data;
    }

     public function title(): string
    {
        return 'Enspirion';
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $factory = new Factory(); 
        $action = $factory->create(ActionMeasurement::from($this->data->resolution));
        $collection = $action->execute($this->data);

        return collect($collection);
    }

    public function headings(): array
    {
        $factory = new Factory(); 
        $action = $factory->create(ActionMeasurement::from($this->data->resolution));
        $headings = $action->heading($this->data);

        return $headings;
    }
}
