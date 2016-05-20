@extends('layouts.master')

@section('title')
API Details | Application
@endsection

@section('content')
<div>
  <h2>API Details</h2>
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

<div>
  API endpoint : {{ url('/api/v1/') }}<br>
  api_token : {{ Auth::user()->api_token }}<br>
  API Doc : <a href="http://docs.laraveldemo.apiary.io" target="_blank">docs.laraveldemo.apiary.io</a>

</div>

</div>
<div class="space-10"></div>
@endsection

@section('footerjs')

@endsection
