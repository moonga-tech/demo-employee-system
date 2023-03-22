<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storeDetails;
use App\Models\Employee;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\App;



class StoreDetailsController extends Controller
{
    public function storeDetails() {
        return view('pages.storeDetails');
    } 
    public function stored() {
        $data = storeDetails::all();
        return view('pages.details', ['data' => $data]);
    }

    public function pdfview() {
        $data = storeDetails::all();
        view()->share('employee');
        $pdf = PDF::loadView('pdf_view', compact('data'));
        return $pdf->download('invoice.pdf');
        /* $pdf = PDF::loadView('pdf_view');
        return $pdf->download(); */
    }

    /* public function pdfview(Request $request) {
        $employee = storeDetails::all();
        view()->share('employee', $employee);
        if($request->has('download')) {
            PDF::setOptions(['dpi' => '150', 'default' => 'sans-serif']);
            $pdf = PDF::loadView('pdf_view');
            return $pdf->download('pdf_view.pdf');
        }
        return view("pdf_view", ['data' => $employee]);
    } */
    /* public function pdfview() {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>test</h1>');
        return $pdf->stream();
    } */

    public function storeDetailsPost() {
        $storedDetails = new storeDetails;
        $storedDetails->firstname = request("firstname");
        $storedDetails->lastname = request("lastname");
        $storedDetails->dof = request("dof");
        $storedDetails->number = request("number");

        $storedDetails->save();

        return redirect("/store-details/stored");
    } 
}
