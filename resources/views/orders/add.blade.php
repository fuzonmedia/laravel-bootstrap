@extends('layouts.master')

@section('title')
Orders Add  | Application
@endsection

@section('content')
<div>
<h2>Add Order</h2>
<div id="error">
  @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
</div>
<div id="success">
  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
</div>
<form  class="form-horizontal" role="form" method="POST" action="{{ url('/orders/store/') }}">
    {!! csrf_field() !!}
  <fieldset>
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Order Number</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="orderNumber" value="{{old('orderNumber')}}" placeholder="Enter orderNumber" required >
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Order Amount</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div>
	<div class="space-4"></div>

  <div class="clearfix">
    <div class="col-md-offset-3 col-md-9">
      <button class="btn btn-info" type="submit">
        <i class="ace-icon fa fa-check bigger-110"></i>
        Add New
      </button>

    </div>
  </div>
    </div>
  </fieldset>
</form>

</div>
@endsection

@section('footerjs')

@endsection
