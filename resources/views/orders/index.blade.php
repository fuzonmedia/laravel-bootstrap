@extends('layouts.master')

@section('title')
Orders | Application
@endsection

@section('content')
<div>
  <h2>Orders List</h2>
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
  <table class="datatable">
    <thead>
      <tr>
        <th>Order Number</th>
        <th>Amount</th>
        <th>Created at</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>


</div>
<div class="space-10"></div>
@endsection

@section('footerjs')
<script>
  $(document).ready(function(){
    $('.datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{ route('orders.serverSide') }}'
      });
  });
</script>
@endsection
