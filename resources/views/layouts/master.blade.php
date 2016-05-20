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
<link rel="stylesheet" href="/assets/css/theme/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>

<!--[if lte IE 9]>
 <link rel="stylesheet" href="assets/css/theme/ace-part2.css" />
<![endif]-->
{{---<link rel="stylesheet" href="/assets/css/theme/ace-rtl.css" />---}}

<!-- ace settings handler -->
<script src="/assets/js/theme/ace-extra.js"></script>


<!--[if lte IE 9]>
 <link rel="stylesheet" href="assets/css/theme/ace-ie.css" />
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

<!-- Extra Features CSS -->
<link rel="stylesheet" href="/assets/css/theme/jquery-ui.custom.css" />
<link rel="stylesheet" href="/assets/css/theme//chosen.css" />
<link rel="stylesheet" href="/assets/css/theme/datepicker.css" />
<link rel="stylesheet" href="/assets/css/theme/bootstrap-timepicker.css" />
<link rel="stylesheet" href="/assets/css/theme/daterangepicker.css" />
<link rel="stylesheet" href="/assets/css/theme/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="/assets/css/theme/colorpicker.css" />

{{----<link rel="stylesheet"  href="/assets/css/general.css">----}}
<!-- For Datatable -->
<link href="/assets/css/datatable/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body class="no-skin">
  <!-- #section:basics/navbar.layout -->
  <div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
      try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
      <!-- #section:basics/sidebar.mobile.toggle -->
      <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
      </button>

      <!-- /section:basics/sidebar.mobile.toggle -->
      <div class="navbar-header pull-left">
        <!-- #section:basics/navbar.layout.brand -->
        <a href="/" class="navbar-brand">
          <small>
            <i class="fa fa-leaf"></i>
            Project
          </small>
        </a>

        <!-- /section:basics/navbar.layout.brand -->

        <!-- #section:basics/navbar.toggle -->

        <!-- /section:basics/navbar.toggle -->
      </div>

      <!-- #section:basics/navbar.dropdown -->
      <div class="navbar-buttons navbar-header pull-right" role="navigation">
        <ul class="nav ace-nav">
          <li class="grey">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="ace-icon fa fa-tasks"></i>
              <span class="badge badge-grey">4</span>
            </a>

            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
              <li class="dropdown-header">
                <i class="ace-icon fa fa-check"></i>
                4 Tasks to complete
              </li>

              <li class="dropdown-content">
                <ul class="dropdown-menu dropdown-navbar">
                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">Software Update</span>
                        <span class="pull-right">65%</span>
                      </div>

                      <div class="progress progress-mini">
                        <div style="width:65%" class="progress-bar"></div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">Hardware Upgrade</span>
                        <span class="pull-right">35%</span>
                      </div>

                      <div class="progress progress-mini">
                        <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">Unit Testing</span>
                        <span class="pull-right">15%</span>
                      </div>

                      <div class="progress progress-mini">
                        <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">Bug Fixes</span>
                        <span class="pull-right">90%</span>
                      </div>

                      <div class="progress progress-mini progress-striped active">
                        <div style="width:90%" class="progress-bar progress-bar-success"></div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="dropdown-footer">
                <a href="#">
                  See tasks with details
                  <i class="ace-icon fa fa-arrow-right"></i>
                </a>
              </li>
            </ul>
          </li>

          <li class="purple">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="ace-icon fa fa-bell icon-animated-bell"></i>
              <span class="badge badge-important">8</span>
            </a>

            <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
              <li class="dropdown-header">
                <i class="ace-icon fa fa-exclamation-triangle"></i>
                8 Notifications
              </li>

              <li class="dropdown-content">
                <ul class="dropdown-menu dropdown-navbar navbar-pink">
                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">
                          <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                          New Comments
                        </span>
                        <span class="pull-right badge badge-info">+12</span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="btn btn-xs btn-primary fa fa-user"></i>
                      Bob just signed up as an editor ...
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">
                          <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                          New Orders
                        </span>
                        <span class="pull-right badge badge-success">+8</span>
                      </div>
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <div class="clearfix">
                        <span class="pull-left">
                          <i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
                          Followers
                        </span>
                        <span class="pull-right badge badge-info">+11</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="dropdown-footer">
                <a href="#">
                  See all notifications
                  <i class="ace-icon fa fa-arrow-right"></i>
                </a>
              </li>
            </ul>
          </li>

          <li class="green">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
              <span class="badge badge-success">5</span>
            </a>

            <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
              <li class="dropdown-header">
                <i class="ace-icon fa fa-envelope-o"></i>
                5 Messages
              </li>

              <li class="dropdown-content">
                <ul class="dropdown-menu dropdown-navbar">
                  <li>
                    <a href="#" class="clearfix">
                      <img src="/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                      <span class="msg-body">
                        <span class="msg-title">
                          <span class="blue">Alex:</span>
                          Ciao sociis natoque penatibus et auctor ...
                        </span>

                        <span class="msg-time">
                          <i class="ace-icon fa fa-clock-o"></i>
                          <span>a moment ago</span>
                        </span>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="clearfix">
                      <img src="/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                      <span class="msg-body">
                        <span class="msg-title">
                          <span class="blue">Susan:</span>
                          Vestibulum id ligula porta felis euismod ...
                        </span>

                        <span class="msg-time">
                          <i class="ace-icon fa fa-clock-o"></i>
                          <span>20 minutes ago</span>
                        </span>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="clearfix">
                      <img src="/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                      <span class="msg-body">
                        <span class="msg-title">
                          <span class="blue">Bob:</span>
                          Nullam quis risus eget urna mollis ornare ...
                        </span>

                        <span class="msg-time">
                          <i class="ace-icon fa fa-clock-o"></i>
                          <span>3:15 pm</span>
                        </span>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="clearfix">
                      <img src="/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                      <span class="msg-body">
                        <span class="msg-title">
                          <span class="blue">Kate:</span>
                          Ciao sociis natoque eget urna mollis ornare ...
                        </span>

                        <span class="msg-time">
                          <i class="ace-icon fa fa-clock-o"></i>
                          <span>1:33 pm</span>
                        </span>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="clearfix">
                      <img src="/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                      <span class="msg-body">
                        <span class="msg-title">
                          <span class="blue">Fred:</span>
                          Vestibulum id penatibus et auctor  ...
                        </span>

                        <span class="msg-time">
                          <i class="ace-icon fa fa-clock-o"></i>
                          <span>10:09 am</span>
                        </span>
                      </span>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="dropdown-footer">
                <a href="inbox.html">
                  See all messages
                  <i class="ace-icon fa fa-arrow-right"></i>
                </a>
              </li>
            </ul>
          </li>

          <!-- #section:basics/navbar.user_menu -->
          <li class="light-blue">
            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
              <img class="nav-user-photo" src="/assets/avatars/user.jpg" alt="Jason's Photo" />
              <span class="user-info">
                <small>Welcome,</small>
                {{ Auth::user()->name }}
              </span>

              <i class="ace-icon fa fa-caret-down"></i>
            </a>

            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
              <li>
                <a href="#">
                  <i class="ace-icon fa fa-cog"></i>
                  Settings
                </a>
              </li>

              <li>
                <a href="profile.html">
                  <i class="ace-icon fa fa-user"></i>
                  Profile
                </a>
              </li>

              <li class="divider"></li>

              <li>
                <a href="{{ url('/logout') }}">
                  <i class="ace-icon fa fa-power-off"></i>
                  Logout
                </a>
              </li>
            </ul>
          </li>

          <!-- /section:basics/navbar.user_menu -->
        </ul>
      </div>

      <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
  </div>

  <!-- /section:basics/navbar.layout -->
  <div class="main-container" id="main-container">
    <script type="text/javascript">
      try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar                  responsive">
      <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
      </script>
      <ul class="nav nav-list">
        <li class="{{ (Request::is('*home') ? 'active' : '') }}">
          <a href="/home">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
          </a>

          <b class="arrow"></b>
        </li>



        <li class="{{ (Request::is('*orders*') ? 'open' : '') }}" >
          <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-o"></i>

            <span class="menu-text">
              Orders
            </span>

            <b class="arrow fa fa-angle-down"></b>
          </a>

          <b class="arrow"></b>

          <ul class="submenu">
            <li class="{{ (Request::is('*orders') ? 'active' : '') }}">
              <a href="/orders">
                <i class="menu-icon fa fa-caret-right"></i>
                List
              </a>

              <b class="arrow"></b>
            </li>

            <li class="{{ (Request::is('*orders/add') ? 'active' : '') }}">
              <a href="/orders/add">
                <i class="menu-icon fa fa-caret-right"></i>
                Add New
              </a>

              <b class="arrow"></b>
            </li>
          </ul>
        </li>
        <li class="{{ (Request::is('*apidetails') ? 'active' : '') }}">
          <a href="/apidetails">
            <i class="menu-icon fa fa-file-o"></i>
            <span class="menu-text"> API Details </span>
          </a>

          <b class="arrow"></b>
        </li>



      </ul><!-- /.nav-list -->

      <!-- #section:basics/sidebar.layout.minimize -->
      <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
      </div>

      <!-- /section:basics/sidebar.layout.minimize -->
      <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
      </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
      <div class="main-content-inner">
        <!-- #section:basics/content.breadcrumbs -->
        <div class="breadcrumbs" id="breadcrumbs">
          <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
          </script>

          <!-- #section:basics/content.searchbox -->
          <div class="nav-search" id="nav-search">
            <form class="form-search">
              <span class="input-icon">
                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                <i class="ace-icon fa fa-search nav-search-icon"></i>
              </span>
            </form>
          </div><!-- /.nav-search -->

          <!-- /section:basics/content.searchbox -->
        </div>

        <!-- /section:basics/content.breadcrumbs -->
        <div class="page-content">

          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->
              @yield('content')
              <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->

        <div class="footer">
          <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
              <p>&copy; 2013 Company, Inc. &middot; <a href="#">About Us</a>  &middot;  <a href="#">Contact Us</a> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; <a href="#">Sitemap</a> </p>
              &nbsp; &nbsp;
              <span class="action-buttons">
                <a href="#">
                  <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                </a>

                <a href="#">
                  <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                </a>

                <a href="#">
                  <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                </a>
              </span>
            </div>

            <!-- /section:basics/footer -->
          </div>

          <div style="display:none">Designed & Developed by <a href="http://www.fuzonmedia.com">www.fuzonmedia.com</a>
  <div>www.fuzonmedia.com conatct @ +91 9831053006,E-mail:info@fuzonmedia.com</div>
  </div>
        </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
  </div><!-- /.main-container -->

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

  <!-- page specific plugin scripts -->

  <!--Extra feature--->

  <script src="/assets/js/theme/jquery-ui.custom.js"></script>
  <script src="/assets/js/theme/jquery.ui.touch-punch.js"></script>
  <script src="/assets/js/theme/chosen.jquery.js"></script>
  <script src="/assets/js/theme/fuelux/fuelux.spinner.js"></script>
  <script src="/assets/js/theme/date-time/bootstrap-datepicker.js"></script>
  <script src="/assets/js/theme/date-time/bootstrap-timepicker.js"></script>
  <script src="/assets/js/theme/date-time/moment.js"></script>
  <script src="/assets/js/theme/date-time/daterangepicker.js"></script>
  <script src="/assets/js/theme/date-time/bootstrap-datetimepicker.js"></script>
  <script src="/assets/js/theme/bootstrap-colorpicker.js"></script>
  <script src="/assets/js/theme/jquery.knob.js"></script>
  <script src="/assets/js/theme/jquery.autosize.js"></script>
  <script src="/assets/js/theme/jquery.inputlimiter.1.3.1.js"></script>
  <script src="/assets/js/theme/jquery.maskedinput.js"></script>
  <script src="/assets/js/theme/bootstrap-tag.js"></script>

  <!-- ace scripts -->
  <script src="/assets/js/theme/ace/elements.scroller.js"></script>
  <script src="/assets/js/theme/ace/elements.colorpicker.js"></script>
  <script src="/assets/js/theme/ace/elements.fileinput.js"></script>
  <script src="/assets/js/theme/ace/elements.typeahead.js"></script>
  <script src="/assets/js/theme/ace/elements.wysiwyg.js"></script>
  <script src="/assets/js/theme/ace/elements.spinner.js"></script>
  <script src="/assets/js/theme/ace/elements.treeview.js"></script>
  <script src="/assets/js/theme/ace/elements.wizard.js"></script>
  <script src="/assets/js/theme/ace/elements.aside.js"></script>
  <script src="/assets/js/theme/ace/ace.js"></script>
  <script src="/assets/js/theme/ace/ace.ajax-content.js"></script>
  <script src="/assets/js/theme/ace/ace.touch-drag.js"></script>
  <script src="/assets/js/theme/ace/ace.sidebar.js"></script>
  <script src="/assets/js/theme/ace/ace.sidebar-scroll-1.js"></script>
  <script src="/assets/js/theme/ace/ace.submenu-hover.js"></script>
  <script src="/assets/js/theme/ace/ace.widget-box.js"></script>
  <script src="/assets/js/theme/ace/ace.settings.js"></script>
  <script src="/assets/js/theme/ace/ace.settings-rtl.js"></script>
  <script src="/assets/js/theme/ace/ace.settings-skin.js"></script>
  <script src="/assets/js/theme/ace/ace.widget-on-reload.js"></script>
  <script src="/assets/js/theme/ace/ace.searchbox-autocomplete.js"></script>
  <!-- Few extra utlity JS  -->
  <script src="/assets/js/holder.js"></script>
  <!---DATATABLE JS --->
  <script src="/assets/js/datatable/jquery.dataTables.min.js"></script>

  <!-- Page specific JS goes here -->
  @yield('footerjs')
  <!-- Page specific JS END here -->
</body>

</html>
