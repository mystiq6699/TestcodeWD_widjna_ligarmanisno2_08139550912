<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Login Kasir</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('js/fuelux/fuelux.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css" media="print">
    
</head>
<body>
<section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="fa fa-bars"></i>
            </a>
           
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                <i class="fa fa-cog"></i>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
            <li class="hidden-xs"><a href="#" class="dropdown-toggle"> <b>Test</b></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" >Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-dark lter aside-md hidden-print" id="nav">
                <section class="vbox">
                    <header class="header bg-primary lter text-center clearfix">

                        <div class="btn-group">
                            <a href="{{ route('order.create') }}" type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></a>
                            <div class="btn-group hidden-nav-xs">
                                <a href="{{ route('order.create') }}" type="button" class="btn btn-sm btn-primary dropdown-toggle">
                                    Add a order
                                </a>
                            </div>
                        </div>
                    </header>
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav">
                                    <li  class="active">
                                        <a href="{{ route('order.index') }}"   class="active">
                                            <i class="fa fa-dashboard icon">
                                                <b class="bg-danger"></b>
                                            </i>
                                            <span>Workset</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href=""  >
                                            <i class="fa fa-shopping-cart icon">
                                                <b class="bg-warning"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                              <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>Order</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li >
                                                <a href="{{ route('order.create') }}" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Add Order</span>
                                                </a>
                                            </li>
                                            <li >
                                                <a href="{{ route('order.index') }}" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>All Orders</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li >
                                        <a href=""  >
                                            <i class="fa fa-bars icon">
                                                <b class="bg-info"></b>
                                            </i>
                                            <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                            </span>
                                            <span>Profile</span>
                                        </a>
                                        <ul class="nav lt">
                                           
                                            <li >
                                                <a href="{{ route('logout') }}" >
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>

                    
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">

                @if(Session::has('message'))
                    <div class="alert {{ Session::get('m-class') }} alert-dismissible fade in" style="margin: 20px 30px">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong></strong> {{ Session::get('message') }}
                    </div>
                @endif

                @yield('body')

                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
            </section>
        </section>
    </section>
</section>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app.plugin.js') }}"></script>
<script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/fuelux/fuelux.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function () {

        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 5000);

    });
</script>

<script type="text/javascript" src="{{ asset('js/tableExport/tableExport.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jquery.base64.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/sprintf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/jspdf.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tableExport/jspdf/libs/base64.js') }}"></script>

</body>
</html>