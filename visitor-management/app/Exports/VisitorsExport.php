<?php
namespace App\Exports;

use App\Models\Visitor;
use Maatwebsite\Excel\Concerns\FromCollection;

class VisitorsExport implements FromCollection
{
    public function collection()
    {
        return Visitor::all();
    }
}
