<?php include 'include/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome Institute| </title>

        <!-- Bootstrap core CSS -->

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="css/icheck/flat/green.css" rel="stylesheet" />
        <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.min.js"></script>
        <script src="js/nprogress.js"></script>
        <script>
            NProgress.start();
        </script>

    </head>


    <body class="nav-md">

        <div class="container body">


            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Institute!</span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="images/inst.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Institite Name</h2>
                            </div>
                        </div>
                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="index.php">Dashboard</a>
                                            </li>
                                            <li><a href="index2.php">Dropout Analysis </a>
                                            </li>
                                            <li><a href="index3.php">Course Prediction</a>
                                            </li>
                                            <li><a href="index4.php">Distance Analysis</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="form.html">General Form</a>
                                            </li>
                                            <li><a href="form_advanced.html">Advanced Components</a>
                                            </li>
                                            <li><a href="form_validation.html">Form Validation</a>
                                            </li>
                                            <li><a href="form_wizards.html">Form Wizard</a>
                                            </li>
                                            <li><a href="form_upload.html">Form Upload</a>
                                            </li>
                                            <li><a href="form_buttons.html">Form Buttons</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="general_elements.html">General Elements</a>
                                            </li>
                                            <li><a href="media_gallery.html">Media Gallery</a>
                                            </li>
                                            <li><a href="typography.html">Typography</a>
                                            </li>
                                            <li><a href="icons.html">Icons</a>
                                            </li>
                                            <li><a href="glyphicons.html">Glyphicons</a>
                                            </li>
                                            <li><a href="widgets.html">Widgets</a>
                                            </li>
                                            <li><a href="invoice.html">Invoice</a>
                                            </li>
                                            <li><a href="inbox.html">Inbox</a>
                                            </li>
                                            <li><a href="calender.html">Calender</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="tables.html">Tables</a>
                                            </li>
                                            <li><a href="tables_dynamic.html">Table Dynamic</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="chartjs.html">Chart JS</a>
                                            </li>
                                            <li><a href="chartjs2.html">Chart JS2</a>
                                            </li>
                                            <li><a href="morisjs.html">Moris JS</a>
                                            </li>
                                            <li><a href="echarts.html">ECharts </a>
                                            </li>
                                            <li><a href="other_charts.html">Other Charts </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="e_commerce.html">E-commerce</a>
                                            </li>
                                            <li><a href="projects.html">Projects</a>
                                            </li>
                                            <li><a href="project_detail.html">Project Detail</a>
                                            </li>
                                            <li><a href="contacts.html">Contacts</a>
                                            </li>
                                            <li><a href="profile.html">Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none">
                                            <li><a href="page_404.html">404 Error</a>
                                            </li>
                                            <li><a href="page_500.html">500 Error</a>
                                            </li>
                                            <li><a href="plain_page.html">Plain Page</a>
                                            </li>
                                            <li><a href="login.html">Login Page</a>
                                            </li>
                                            <li><a href="pricing_tables.html">Pricing Tables</a>
                                            </li>

                                        </ul>
                                    <!--</li>
                                    <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                                    </li>-->
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            
                            
                            <a href="../index.php" data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
               
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
               

                <!-- page content -->
                <div class="right_col" role="main">

                    <!-- top tiles -->
                    <div class="row tile_count">
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
                                <div class="count">
                                <?php
                               
                                $query = "SELECT count(*) as total from dropout_dashboard";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['total'];;
                                ?>
                                </div>
                                <span class="count_bottom"><i class="green">4% </i> From last Month</span>
                            </div>
                        </div>
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-clock-o"></i> Average Batches</span>
                                <div class="count">10</div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>1% </i> From last Month</span>
                            </div>
                        </div>
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
                                <div class="count green">
                                <?php
                               
                                $query = "SELECT count(*) as male from dropout_dashboard where Gender='Male'";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['male'];
                                ?>
                                </div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Month</span>
                            </div>
                        </div>
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
                                <div class="count">
                                <?php
                                
                                $query = "SELECT count(*) as female from dropout_dashboard where Gender='Female'";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['female'];
                                ?>
                                </div>
                                <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Month</span>
                            </div>
                        </div>
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-user"></i> Total Placed</span>
                                <div class="count">
                                <?php
                              
                                $query = "SELECT count(*) as placed from dropout_dashboard where Placed='1'";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['placed'];
                                ?>
                                </div>
                                <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>10% </i> From last Month</span>
                            </div>
                        </div>
                        <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                            <div class="left"></div>
                            <div class="right">
                                <span class="count_top"><i class="fa fa-user"></i> Total Unplaced</span>
                                <div class="count red">
                                 <?php
                                
                                $query = "SELECT count(*) as placed from dropout_dashboard where Placed='0' AND Batch_Status= 'Batch Completed' ";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['placed'];
                                ?>
                                </div>
                                <span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>10% </i> From last Month</span>
                            </div>
                        </div>

                    </div>
                    <!-- /top tiles -->

                    <!-- First row & chart block -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">

                                <div class="row x_title">
                                    <div class="col-md-6">
                                        <h3>Performance Factor <small>Institutes wise</small></h3>
                                    </div>
                                    <div class="col-md-6">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span id="time"></span> <b class="caret"></b>
                                            <script type="text/javascript">var today = new Date();
                                            document.getElementById('time').innerHTML=today;</script>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                                    <div style="width: 100%;">
                                        <?php include("chart_sample.php");?>  <!-- chart -->
                                        <!--<div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>-->
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                    <div class="x_title">
                                        <h2>Top Institute Performance</h2>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-6">
                                        <div>
                                            <p>Tata STRIVE - Mohali</p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 76%;">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="76"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Tata STRIVE - Aligarh</p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 76%;">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="63"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-6">
                                        <div>
                                            <p>Tata STRIE - Pune</p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 76%;">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="62"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p>Tata STRIVE - Hyderabad</p>
                                            <div class="">
                                                <div class="progress progress_sm" style="width: 76%;">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="59"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <br/>

                    <div class="row">


                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="x_panel tile fixed_height_320">
                                <div class="x_title">
                                    <h2>Placement Factor</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">                             
                                    
                                    <?php include("google_pie.php");?>                             
                                                                   
                                   
                                </div>
                            </div>
                        </div>

                        


                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="x_panel tile fixed_height_320">
                                <div class="x_title">
                                    <h2>Other Analysis</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                           
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        


                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Institute location <small>geo-presentation</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="dashboard-widget-content">
                                                
                                                   <div id="map" style="width:100%;height:500px;background:yellow"></div>

                                                   <?php include("map.php");?>



                                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <!-- Start to do list -->
                                
                                <!-- End to do list -->


                                <!-- start of weather widget -->
                                
                                <!-- end of weather widget -->
                            </div>

                        </div>

                    </div>


                    <!-- footer content -->

                    <footer>
                        <div class="">
                            <p class="pull-right">Digital Impact Square By <a>TCS Foundation</a>. |
                                <span class="lead"> <i class="fa fa-paw"></i> TEAM SKALA</span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <!-- /footer content -->
                </div>
                <!-- /page content -->

            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- gauge js -->
        <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
        <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="js/moment.min.js"></script>
        <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>

        <script src="js/custom.js"></script>

        <!-- flot js -->
        <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
        <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
        <script type="text/javascript" src="js/flot/date.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
        <script type="text/javascript" src="js/flot/curvedLines.js"></script>
        <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
       
        <!-- /datepicker -->
        <!-- /footer content -->
    </body>

</html>
