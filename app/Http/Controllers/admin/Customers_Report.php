<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\invoices;
use App\Models\sections;
use Illuminate\Http\Request;

class Customers_Report extends Controller
{
    public function index(){

    $sections = sections::all();
    return view('admin.reports.customers_report',compact('sections'));

}


public function Search_customers(Request $request){


// Search Without Date

    if ($request->Section && $request->product && $request->start_at =='' && $request->end_at=='') {


    $invoices = invoices::select('*')->where('section_id','=',$request->Section)->where('product','=',$request->product)->get();
    $sections = sections::all();
    return view('admin.reports.customers_report',compact('sections'))->withDetails($invoices);


    }


// Search With Date

    else {

    $start_at = date($request->start_at);
    $end_at = date($request->end_at);

    $invoices = invoices::whereBetween('invoice_Date',[$start_at,$end_at])->where('section_id','=',$request->Section)->where('product','=',$request->product)->get();
    $sections = sections::all();
    return view('admin.reports.customers_report',compact('sections'))->withDetails($invoices);


    }



    }
}
