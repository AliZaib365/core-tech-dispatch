<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MessagesExport;
use Maatwebsite\Excel\Facades\Excel;

class MessageController extends Controller
{
    //



    public function export()
    {
        return Excel::download(new MessagesExport, 'messages.xlsx');
    }
}
