<?php

namespace App\Http\Controllers\OrderController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        return view('admin.order.dashboard');
    }

    public function datatable(){
        $orders = Order::all();
        return datatables()->of($orders)
            ->editColumn('status', function($row) {
                if($row->status == 'completed'){
                    $html = '<span class="badge badge-success text-md text-white rounded-0 font-weight-normal">'.$row->status.'</span>';
                    return $html;
                }else{
                    $html = '<span class="badge badge-info text-md text-white rounded-0 font-weight-normal">'.$row->status.'</span>';
                    return $html;
                }
            })
            ->editColumn('created_at', function($row){
                $created_at = $row->created_at->format('Y-m-d');
                return $created_at;
            })
            ->editColumn('price', function($row){
                $price = $row->price.' $';
                return $price;
            })
            ->addColumn('action', function($row) {
                $action = '<a href="'.route("order.show",$row->id).'" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>';
                $action .= '<a data-id="'.$row->id.'" class="btn btn-danger btn-sm mr-2 delete_confirmation" data-toggle="modal" data-target="#delete_confirmation"><i class="fas fa-trash"></i></a>';

                return $action;
            })
            ->escapeColumns([])->make(true);
    }
}
