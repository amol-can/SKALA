<?php require 'include/config.php';?>

<!DOCTYPE html>
<html lang="en">

<head>


    

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Institute! | </title>

    <!-- Bootstrap core CSS -->
    <style>
    #map {
       height: 350px;
     }

    
    </style>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/floatexamples.css" rel="stylesheet" />

    <script src="js/jquery.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript">google.charts.load('current', {'packages':['line']});</script>

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Welcome Institute!</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/inst.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Institute Name</h2>
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
                                                <ul class="nav child_menu" style="display: none">
                                                <li><a href="index2_1.php">Dropout Prediction</a></li>
                                                </ul>
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

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/Institute.jpg" alt="">Institute
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">

                    <div class="row top_tiles">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" >
                            <div class="tile-stats" >
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count" >
                                15
                               <!--  <?php
                               
                                $query /*= "SELECT (( SUM(Drop_Count) / COUNT(Drop_Count))* 100) as dper from dropout_dashboard";
                                $result = $conn->query($query);
                                $row = mysqli_fetch_assoc($result);
                                echo $row['dper']*/;;
                                ?> -->

                                </div>

                                <h3>Avg. Travel Distance</h3>
                                <p>Overall Percentage.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="count">179</div>

                                <h3>New Sign ups</h3>
                                <p>Lorem ipsum psdea itgum rixt.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Institute Distance Analysis<small></small></h2>
                                    <div class="filter">
                                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                            <span id="time"></span> <b class="caret"></b>
                                            <script type="text/javascript">var today = new Date();
                                            document.getElementById('time').innerHTML=today;</script>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                   
                                   <!-- Institute Average Travel Distance  -->

                                 
                                              <div style="height: 500px;">
                                              <iframe width="100%" height="500" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col9+from+1QcOScnFlVkwIlk2SdHsQ8lwwrsmjSO6Nd7Fs8KBY&amp;viz=MAP&amp;h=false&amp;lat=23.262478058134487&amp;lng=79.29537123017577&amp;t=1&amp;z=5&amp;l=col9&amp;y=2&amp;tmplt=3&amp;hml=TWO_COL_LAT_LNG"></iframe>
                                              </div>
                                          
                                  <!-- /Institute Average Travel Distance  -->
                                    


                                </div>
                            </div>
                        </div>
                    </div>








                                        <!-- Heat Map of Student -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Institute Avg. Travel Distance <small></small></h2>
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


                                
                                <div id="mapcircle" style="width: 100%; height: 400px">
                                   
                            </div>
                                                                
                            </div>
                        </div>
                    </div>
                    <!-- / Heat Map of Student -->



                                        <!-- Map 4 -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Heat Map of Students <small></small></h2>
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
                                
                                   
                                   
                                   <iframe style="width: 100%; height: 350px" src="http://localhost/skala/institute/hitmap.php"></iframe>

                                                                
                            </div>
                        </div>
                    </div>




                    

                    <!-- Heat Map of Student -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Student Travel Distance <small></small></h2>
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


                                
                                <div>
                                   
                                   
                                                     <iframe width="100%" height="400" scrolling="no" frameborder="no" src="https://fusiontables.google.com/embedviz?q=select+col9+from+12f2hn7XkvRytEQmzafITvQZMUhOeUNAr8gC6Xa7r&amp;viz=MAP&amp;h=false&amp;lat=18.451753656316285&amp;lng=81.34049726250008&amp;t=1&amp;z=6&amp;l=col9&amp;y=2&amp;tmplt=2&amp;hml=TWO_COL_LAT_LNG"></iframe>
                                                  
                                         

                                </div>
                                                                
                            </div>
                        </div>
                    </div>
                    <!-- / Heat Map of Student -->












        
                </div>


                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Digital Impact Square by <a>TCS Foundation</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Team Skala!</span>
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
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>

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

    <!-- Dropdout Table Script-->
     
        
    <!--/Dropdout Table Script -->
                       <script>
                                        // This example creates circles on the map, representing distances in North
                                        // America.

                                        // First, create an object containing LatLng and distance for each city.
                                        var citymap = {

                                          Tata_Strive_Aligarh: {
                                            center: {lat: 27.9079413 , lng:  78.0766036},
                                            distance: 12
                                          },
                                          Hyderabad: {
                                            center: {lat: 17.4801969  , lng: 78.4171028},
                                            distance: 9
                                          },
                                          Mohali: {
                                            center: {lat: 30.7038528  , lng: 76.7076768},
                                            distance: 15
                                          },
                                          Mumbai: {
                                            center: {lat: 19.1598726  , lng: 72.9992013},
                                            distance: 15
                                          },
                                          Pune: {
                                            center: {lat: 18.535779 , lng:  73.876203},
                                            distance: 15
                                          },


                                          Exention_Deharadun: {
                                            center: {lat: 30.3345816  , lng: 78.0537813},
                                            distance: 18
                                          },
                                          Kotdwar: {
                                            center: {lat: 30.3345816  , lng: 78.0537813},
                                            distance: 11
                                          },
                                          Noida: {
                                            center: {lat: 28.5821195  , lng: 77.3266991},
                                            distance: 20
                                          },
                                          Extention_Mumbai: {
                                            center: {lat: 19.0289954  , lng: 72.8881464},
                                            distance: 10
                                          },
                                          Uri: {
                                            center: {lat: 34.088117   , lng: 74.033985},
                                            distance: 20
                                          },
                                          Extention_Pune: {
                                            center: {lat: 18.6103179 , lng:  73.7889689},
                                            distance: 10
                                          },
                                            
                                        };

                                        function initMap() {
                                          // Create the map.
                                          var map = new google.maps.Map(document.getElementById('mapcircle'), {
                                            zoom: 5,
                                            center: {lat: 24.234090, lng: 77.524712},
                                            mapTypeId: 'terrain'
                                          });

                                          // Construct the circle for each value in citymap.
                                          // Note: We scale the area of the circle based on the distance.
                                          for (var city in citymap) {
                                            // Add the circle for this city to the map.
                                            var cityCircle = new google.maps.Circle({

                                              strokeColor: '#FF0000',
                                              strokeOpacity: 0.8,
                                              strokeWeight: 2,
                                              fillColor: '#FF0000',
                                              fillOpacity: 0.35,
                                              map: map,
                                              center: citymap[city].center,
                                              radius: (citymap[city].distance) * 1000
                                            });
                                          }
                                        }
                           </script>
                           


  
</body>
                            <script async defer
                                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPmQncFFGdKhM-ISVzaNlfxaV2_JXMsdg&callback=initMap">
                            </script>
      <!--                       <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPmQncFFGdKhM-ISVzaNlfxaV2_JXMsdg&libraries=visualization&callback=initMap1">
    </script>
 -->
</html>

 






                     

                          