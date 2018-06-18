<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;


class ItemController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdfview(Request $request)
    {
        $items = DB::table("users")->get();
        view()->share('items',$items);

        if($request->has('download')){
            $pdf = PDF::loadView('downloadpdf');
            return $pdf->download('pdfview.pdf');
        }


        return view('pdfview');
    }
}