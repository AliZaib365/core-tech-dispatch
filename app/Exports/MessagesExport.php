<?php

namespace App\Exports;

use App\Models\Contactus;
use Maatwebsite\Excel\Concerns\FromCollection;

class MessagesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contactus::select('name', 'email', 'message', 'read_or_not', 'created_at')->get();
    }

    public function headings(): array
    {
        return ['Name', 'Email', 'Message', 'Status', 'Date'];
    }
}
