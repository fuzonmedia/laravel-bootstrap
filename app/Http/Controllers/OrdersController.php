<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\Datatables\Datatables;
use App\Orders;
use Session;
use Redirect;

class OrdersController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }
    public function serverside()
    {
      //$orders = App\Orders::select(['orderID', 'orderNumber', 'amount']);
      $orders = Orders::select(['orderID','orderNumber', 'amount', 'created_at'])->where('user_id',Auth::guard('web')->id())->get();

      return Datatables::of($orders)
      ->addColumn('action', function ($orders) {
              return '<a href="/orders/edit/'.$orders->orderID.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;&nbsp;<a href="/orders/delete/'.$orders->orderID.'" class="btn btn-xs btn-primary" onclick="return confirm(\'Are you sure?\')"><i class="glyphicon glyphicon-delete"></i> Delete</a>';
          })
      ->removeColumn('orderID')
      ->make();
    }
    public function edit($id)
    {
        $data['order']=Orders::where('orderID',$id)->first();
        return view('orders.edit',$data);
    }

    public function update($id, Request $request)
    {
        $order=Orders::findOrFail($id);
        $this->validate($request, [
          'orderNumber' => 'required|max:10',
          'amount' => 'required|numeric',
    ]);

    $input_array = $request->all();

    $order->fill($input_array)->save();

    // Alternative Way to update data

    /*$order_rslt=Orders::where('orderID',$id)->update([
        'orderNumber' => $input_array['orderNumber'],
          'amount' => $input_array['amount'],
      ]);
      */

    Session::flash('flash_message', 'Order successfully Updated!');

    return redirect()->back();

    }

    public function add()
    {
        return view('orders.add');
    }

    public function store(Request $request)
    {
        $order=new Orders;
        $this->validate($request, [
          'orderNumber' => 'required|max:10',
          'amount' => 'required|numeric',
    ]);

    $input_array = $request->all();
    $input_array['user_id']=Auth::guard('web')->id();

    $order->fill($input_array)->save();

    // Alternative Way to add data

    /*$order_rslt=Orders::create(array(
        'orderNumber' => $input_array['orderNumber'],
          'amount' => $input_array['amount'],
          'user_id' => $input_array['user_id'],
      ));
      */

    Session::flash('flash_message', 'Order successfully Added!');

    //return redirect()->back();
    return Redirect::to('orders/edit/'.$order->orderID);

    }

    public function delete($id)
    {
        $order=Orders::findOrFail($id);
        $order->delete();
        Session::flash('flash_message', 'Order successfully Deleted!');

        //return redirect()->back();
        return Redirect::to('orders');
    }
}
