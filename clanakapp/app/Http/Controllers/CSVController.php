<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clanak;

use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;

class CSVController extends Controller
{
    function exportData(){
        return Excel::download(new DataExport,'clanci.csv');
    }

    
}
class DataExport implements FromCollection{
    function collection()
    {
        return Clanak::all();
    }
        
}