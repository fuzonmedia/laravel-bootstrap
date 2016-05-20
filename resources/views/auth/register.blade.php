@extends('layouts.app')

@section('title')
Register | Application
@endsection

@section('content')

<div class="main-container">
  <div class="login-container">
<div id="signup-box" class="signup-box widget-box no-border">
  <div class="widget-body">
    <div class="widget-main">
      <h4 class="header green lighter bigger">
        <i class="ace-icon fa fa-users blue"></i>
        New User Registration
      </h4>

      <div class="space-6"></div>
      <p> Enter your details to begin: </p>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
          {!! csrf_field() !!}
        <fieldset>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <label class="block clearfix">
            <span class="block input-icon input-icon-right">
              <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
              <i class="ace-icon fa fa-user"></i>
            </span>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </label>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label class="block clearfix">
            <span class="block input-icon input-icon-right">
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
                <i class="ace-icon fa fa-envelope"></i>
            </span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </label>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
          <label class="block clearfix">
            <span class="block input-icon input-icon-right">
              <input type="address" class="form-control" name="address" value="{{ old('address') }}" placeholder="Postal Address">
                <i class="ace-icon fa fa-envelope"></i>
            </span>
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
          </label>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="block clearfix">
            <span class="block input-icon input-icon-right">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <i class="ace-icon fa fa-lock"></i>
            </span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </label>
        </div>

          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label class="block clearfix">
            <span class="block input-icon input-icon-right">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              <i class="ace-icon fa fa-retweet"></i>
            </span>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
          </label>
        </div>
          <label class="block">
            <input type="checkbox" class="ace" />
            <span class="lbl">
              I accept the
              <a href="#">User Agreement</a>
            </span>
          </label>

          <div class="space-24"></div>

          <div class="clearfix">
            <button type="reset" class="width-30 pull-left btn btn-sm">
              <i class="ace-icon fa fa-refresh"></i>
              <span class="bigger-110">Reset</span>
            </button>

            <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
              <span class="bigger-110">Register</span>

              <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
            </button>
          </div>
        </fieldset>
      </form>
    </div>
  </div><!-- /.widget-body -->
</div><!-- /.signup-box -->
</div>
</div>
@endsection
