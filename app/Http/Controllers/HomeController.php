<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Exports\OrderExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CategoryImport;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    function Order(){
        $orders = Order::latest()->paginate();
        return view('backend.orders.order', [
            'orders' => $orders,
        ]);
    }

    function OrderExport(){
        return Excel::download(new OrderExport, 'Orders.xlsx');
    }

    public function import( Request $request)
    {
        Excel::import(new CategoryImport, $request->file('excel'));

        return redirect('/')->with('success', 'All good!');
    }

    function SelectedDateDownload(Request $request){

        $from = $request->start;
        $to = $request->end;

        return Excel::download(new OrderExport($from, $to), 'Orders.xlsx');
    }

    function PDFDownload(){

        $orders = Order::all();
        $pdf = PDF::loadView('exports.pdf',[
            'orders' => $orders
        ]);
        return $pdf->download('invoice.pdf');
    }

}
