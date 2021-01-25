<?php
    $link="";
    if(request()->is())

?>

<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/dashboard" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_info">
                        <span>Welcome,</span>
{{--                        <h2>{{ auth()->user()->name }}</h2>--}}
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="/admin/dashboard/index"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li><a href="/admin/category/index"><i class="fa fa-table"></i> Category</a></li>
                            <li><a href="/admin/sub_category/index"><i class="fa fa-table"></i> Sub Category</a></li>
                            <li><a href="/admin/customer/index"><i class="fa fa-users"></i> Customer</a></li>
                            <li><a href="/admin/item/index"><i class="fa fa-cubes"></i> Item</a></li>
                            <li><a href="/PaymentType/index"><i class="fa fa-shopping-cart"></i> Payment Type</a></li>
                            <li><a href="/admin/invoice/index"><i class="fa fa-money"></i> Invoice</a></li>
                            <li><a href="/admin/invoice_item/index"><i class="fa fa-usd"></i> Invoice Item</a></li>
                            <li><a href="/admin/user/index"><i class="fa fa-user"></i> User</a></li>
                        </ul>
                    </div>

                </div>
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
