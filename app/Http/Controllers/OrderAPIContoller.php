<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Orders;
use Validator;


class OrderAPIContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(Orders::where('user_id',Auth::guard('api')->id())->get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $input_array=$request->json()->all();
          $validation=Validator::make($input_array, [
              'orderNumber' => 'required|max:10',
              'amount' => 'required|numeric',
          ]);
        if($validation->fails())
        {
          $errors = $validation->errors();
          //echo $errors;
          $error_obj=array('Code' => 404,'Status'=>'Fail','Message'=> 'Invalid Parameters' );
          return response()->json($error_obj);
        }
        else {
          //echo "works";
          try{
            $order_rslt=Orders::create([
                  'orderNumber' => $input_array['orderNumber'],
                  'amount' => $input_array['amount'],
                  'user_id' => Auth::guard('api')->id(),
              ]);
            //  print_r($order_rslt);

              $success_obj=array('Code' => 201,'Status'=>'Success','Message'=> 'Record Successfully Created' );
              return response()->json($success_obj);

        }
        catch(\Exception $e){
          $error_obj=array('Code' => 405,'Status'=>'Fail','Message'=> 'Invalid Parameters format' );
          return response()->json($error_obj);
        }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return response()->json(Orders::where('user_id',Auth::guard('api')->id())->where('orderID',$id)->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $input_array=$request->json()->all();
        $validation=Validator::make($input_array, [
          'orderNumber' => 'required|max:10',
          'amount' => 'required|numeric',
        ]);
      if($validation->fails())
      {
        $errors = $validation->errors();
        //echo $errors;
        $error_obj=array('Code' => 404,'Status'=>'Fail','Message'=> 'Invalid Parameters' );
        return response()->json($error_obj);
      }
      else {

        try{
          $order_rslt=Orders::where('orderID',$id)->update([
                'orderNumber' => $input_array['orderNumber'],
                'amount' => $input_array['amount'],
            ]);

            $success_obj=array('Code' => 201,'Status'=>'Success','Message'=> 'Record Successfully Updated' );
            return response()->json($success_obj);

      }
      catch(\Exception $e){
        $error_obj=array('Code' => 405,'Status'=>'Fail','Message'=> 'Invalid Parameters format' );
        return response()->json($error_obj);
      }

      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        try{

          $order_rslt=Orders::where('user_id',Auth::guard('api')->id())->where('orderID',$id)->get();
            if(count($order_rslt)>0)
            {
              $order_rslt=Orders::where('user_id',Auth::guard('api')->id())->where('orderID',$id)->delete();
              $success_obj=array('Code' => 201,'Status'=>'Success','Message'=> 'Record Successfully Deleted' );
              return response()->json($success_obj);
            }
            else {
              $success_obj=array('Code' => 201,'Status'=>'Success','Message'=> 'No record found to Delete' );
              return response()->json($success_obj);
            }


      }
      catch(\Exception $e){
        $error_obj=array('Code' => 405,'Status'=>'Fail','Message'=> 'Invalid Parameters format' );
        return response()->json($error_obj);
      }

    }
}
