@extends('layouts.app')

@section('title')
Login | Application
@endsection

@section('content')
<div class="main-container">
  <div class="login-container">
    <div class="center">
      <h1>
        <i class="ace-icon fa fa-leaf green"></i>
        <span class="red">Ace</span>
        <span class="white" id="id-text2">Application</span>
      </h1>
      <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
    </div>

    <div class="space-6"></div>


      <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
          <div class="widget-main">
            <h4 class="header blue lighter bigger">
              <i class="ace-icon fa fa-coffee green"></i>
              Please Enter Your Information
            </h4>

            <div class="space-6"></div>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
              <fieldset>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="block clearfix">
                  <span class="block input-icon input-icon-right">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">
                    <i class="ace-icon fa fa-user"></i>
                  </span>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
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

                <div class="space"></div>

                <div class="clearfix">
                  <label class="inline">
                    <input type="checkbox" name="remember"> Remember Me
                  </label>

                  <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-key"></i>
                    <span class="bigger-110">Login</span>
                  </button>
                </div>

                <div class="space-4"></div>
              </fieldset>
              <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </form>

            <div class="social-or-login center">
              <span class="bigger-110">Or Login Using</span>
            </div>

            <div class="space-6"></div>

            <div class="social-login center">
              <a class="btn btn-primary">
                <i class="ace-icon fa fa-facebook"></i>
              </a>

              <a class="btn btn-info">
                <i class="ace-icon fa fa-twitter"></i>
              </a>

              <a class="btn btn-danger">
                <i class="ace-icon fa fa-google-plus"></i>
              </a>
            </div>
          </div><!-- /.widget-main -->


        </div><!-- /.widget-body -->
      </div><!-- /.login-box -->
  </div>
</div><!-- /.main-container -->
@endsection
