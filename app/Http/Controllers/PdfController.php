<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class PdfController extends Controller
{
    public function PDF()
    {
        $data = [
            "title" => "cant never",
            "date" => date("m/d/Y"),
        ];

        $pdf = PDF::loadView("pdf", $data);
        
        return $pdf->download("xoxoxxx.....pdf");
    }
}
