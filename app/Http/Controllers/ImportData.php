<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use Illuminate\Http\Request;

class ImportData extends Controller
{
    //

    public function import(Request $request)
    {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        $spreadsheet = $reader->load(public_path("Aguascalientes.xls"));

        // $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(public_path("CPdescarga.xls"));
        // $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();

        // // dd($file->path());
        // $spreadsheet = $reader->load(public_path("CPdescarga.xls"));

        // // dd(public_path());
        dd($spreadsheet);
    }



    public function index(Request $request)
    {
        return dd(request()->file("file"));
    }
}
