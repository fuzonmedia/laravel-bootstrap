<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title')</title>
<!-- Bootstrap -->
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="/assets/css/theme/font-awesome.css" />

<!-- text fonts -->
<link rel="stylesheet" href="/assets/css/theme/ace-fonts.css" />

<!-- ace styles -->
<link rel="stylesheet" href="/assets/css/theme/ace.css" />

<!--[if lte IE 9]>
 <link rel="stylesheet" href="assets/css/theme/ace-part2.css" />
<![endif]-->
<link rel="stylesheet" href="/assets/css/theme/ace-rtl.css" />

<!--[if lte IE 9]>
 <link rel="stylesheet" href="/assets/css/theme/ace-ie.css" />
<![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="/assets/js/theme/html5shiv.js"></script>
<script src="/assets/js/theme/respond.js"></script>
<![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{----<link rel="stylesheet"  href="assets/css/general.css">----}}
<style>
.main-container {
padding-top: 72px !important;
min-height: 600px;
}
</style>
</head>
<body >
  <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
 <div class="container">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#">Project Name</a>
   </div>
   <div class="navbar-collapse collapse" style="height: 1px;">
     <ul class="nav navbar-nav navbar-right">
        <li class="{{ (Request::is('/') ? 'active' : '') }}"><a href="/">Home</a></li>
       <li class="{{ (Request::is('*about') ? 'active' : '') }}"><a href="/about">About</a></li>
       <li class="{{ (Request::is('*contact') ? 'active' : '') }}"><a href="/contact" >Contact</a></li>
       <!-- Authentication Links -->
       @if (Auth::guest())
           <li class="{{ (Request::is('*login') ? 'active' : '') }}"><a href="{{ url('/login') }}" >Login</a></li>
           <li class="{{ (Request::is('*register') ? 'active' : '') }}"><a href="{{ url('/register') }}">Register</a></li>
       @else
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                   {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/home') }}"><i class="fa fa-btn "></i>Dashboard</a></li>
                   <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
               </ul>
           </li>
       @endif
     </ul>
   </div><!--/.nav-collapse -->
 </div>
</div>
  @yield('content')

  <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

  <div id="footer">

        <div class="container">
          <p class="text-muted">
          <div style="display:none">Designed & Developed by <a href="http://www.fuzonmedia.com">www.fuzonmedia.com</a>
  <div>www.fuzonmedia.com conatct @ +91 9831053006,E-mail:info@fuzonmedia.com</div>
  </div>
          <!-- FOOTER -->
        <footer>
          <p class="pull-right">


          <a href="#">Back to top</a></p>
          <p><a href="#"  class="fcbk">Facebook</a>
  <a href="#"  class="twtr">Twitter</a>
          </p>
          <p>&copy; 2013 Company, Inc. &middot; <a href="#">About Us</a>  &middot;  <a href="#">Contact Us</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">Sitemap</a> </p>
        </footer>
          </p>
        </div>
      </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
  window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script src="/assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/theme/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<script src="/assets/js/holder.js"></script>
</body>
</html>
