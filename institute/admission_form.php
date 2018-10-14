<?php include '../isession.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admission Form </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="mystyle/form1.css">
    <script src="mystyle/form1.js"></script>

    <!-- Previous files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    editor
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="css/switchery/switchery.min.css" />

    <script src="js/jquery.min.js"></script>
    <!-- /Previous files -->

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <?php include 'sidebar.php'; ?>

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
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="container">
					    <div class="row">
					        <section>
					        <div class="wizard">
					            <div class="wizard-inner">
					                <div class="connecting-line"></div>
					                <ul class="nav nav-tabs" role="tablist">

					                    <li role="presentation" class="active">
					                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
					                            <span class="round-tab">
					                                <i class="glyphicon glyphicon-user"></i>
					                            </span>
					                        </a>
					                    </li>

					                    <li role="presentation" class="disabled">
					                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
					                            <span class="round-tab">
					                                <i class="glyphicon glyphicon-pencil"></i>
					                            </span>
					                        </a>
					                    </li>
					                    <li role="presentation" class="disabled">
					                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
					                            <span class="round-tab">
					                                <i class="glyphicon glyphicon-picture"></i>
					                            </span>
					                        </a>
					                    </li>

					                    <li role="presentation" class="disabled">
					                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
					                            <span class="round-tab">
					                                <i class="glyphicon glyphicon-ok"></i>
					                            </span>
					                        </a>
					                    </li>
					                </ul>
					            </div>

					            <form method="POST" role="form">
                                    <div class="tab-content">

                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="step1">
                                              
                                               <div style="padding: 0px 20px 20px 20px" class="step33">
                                                <h5><strong>Basic Details</strong></h5>
                                                <hr>
                                                <div class="row">
                                                <div  class="col-md-3">
                                                    <label>First Name</label>
                                                    <input style="text-transform:uppercase; width: 60%" type="text" class="form-control" name="name" placeholder="First Name">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Middale Name</label>
                                                    <input style="text-transform:uppercase; width: 50%" type="text" class="form-control" name="mname" placeholder="Middale Name">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Last Name</label>
                                                    <input style="text-transform:uppercase; width: 50%" type="text" class="form-control" name="lname" placeholder="Last Name">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Mother's Name</label>
                                                    <input style="text-transform:uppercase; width: 50%" type="text" class="form-control" name="mother-name" placeholder="Mother Name">
                                                </div>
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Date of Birth</label>
                                                    <input style="width: 60%" type="Date" class="form-control" name="date" placeholder="YYYY/MM/DD">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Nationality</label>
                                                    <input style="width: 50%" type="text" class="form-control" name="nationality" value="INDIAN" disabled>
                                                </div>
                                                <div class="col-md-3">
                                                <label>Gender</label> </br>
                                                    <input type="radio" name="gender" value="male" checked> Male
                                                    <input type="radio" name="gender" value="female"> Female
                                                    <input type="radio" name="gender" value="other"> Other
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Category</label> </br>
                                                    <select style="width: 50%" name="category" id="visa_status" class="dropselectsec1">
                                                      <option style="background-color: #CEC5C5">Category</option>
                                                      <option value="general">General</option>
                                                      <option value="obc">OBC</option>
                                                      <option value="sc/st">SC/ST</option>
                                                      <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                            </br>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Email</label>
                                                    <input style="width: 60%" type="email" class="form-control" name="email" placeholder="example@abc.com">
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Mobile Number</label>
                                                    <input style="width: 50%" type="number" class="form-control" name="mnumber" placeholder="9999999999" min="4" max="10">
                                                </div>

                                                <div class="col-md-3">
                                                    <label>Martial Status</label> </br>
                                                    <input type="radio" name="status" value="single" checked> Single
                                                    <input type="radio" name="status" value="married"> Married
                                                </div>
                                               
                                            </div>
                                            </br>
                                            <label>Current Addres</label> 
                                            <div class="row">                             
                                                <div class="col-md-3">
                                                    <input type="text" name="state" class="form-control" placeholder="State Name">                            
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="district" class="form-control" placeholder="District Name">                              
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="city" class="form-control" placeholder="City Name">                             
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" name="pin" class="form-control" placeholder="PIN Code">                             
                                                </div>                      
                                            </div>

                                            </br>
                                            <label>Permenant Addres</label> 
                                            <div class="row">                             
                                                <div class="col-md-3">
                                                    <input type="text" name="state" class="form-control" placeholder="State Name">                            
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="district" class="form-control" placeholder="District Name">                              
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="city" class="form-control" placeholder="City Name">                             
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="number" name="pin" class="form-control" placeholder="PIN Code">                             
                                                </div>                    
                                            </div>

                                            </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                            </ul>
                                        </div>


                                        <!--========================== SECOND PAGE  ============================ -->


                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <div class="step2">
                                                <div class="step_21">
                                                    <h5>Acadamic Details</h5>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="row">
                                                        <div class="col-md-4 col-xs-3">
                                                        <p align="right"><stong>Highest Qualification</stong></p>
                                                        </div>
                                                        <div class="col-md-8 col-xs-9">
                                                            <select name="highest_qualification" id="highest_qualification" class="dropselectsec">
                                                                <option value=""> Select Highest Education</option>
                                                                <option value="1">Ph.D</option>
                                                                <option value="2">Masters Degree</option>
                                                                <option value="3">PG Diploma</option>
                                                                <option value="4">Bachelors Degree</option>
                                                                <option value="5">Diploma</option>
                                                                <option value="6">Intermediate / (10+2)</option>
                                                                <option value="7">Secondary</option>
                                                                <option value="8">Others</option>
                                                            </select>
                                                        </div> 
                                                        </div>

                                                        </br>
                                                        <div class="row">
                                                            <div class="col-md-4 col-xs-3">
                                                            <p align="right"><stong>Percentage</stong></p>                                        
                                                            </div>
                                                            <div class="col-md-8 col-xs-9">
                                                                <input  type="text" name="percentage" class="form-control" placeholder="Percentage ie.78%">
                                                            </div>                                        
                                                        </div> 
                                                        
                                                        </br>
                                                        <div class="row">
                                                            <div class="col-md-4 col-xs-3">
                                                            <p align="right"><stong>Eduction Gap</stong></p>                                        
                                                            </div>
                                                            <div class="col-md-8 col-xs-9">
                                                                <input  type="number" name="egap" class="form-control" placeholder="Eduction Gap">
                                                            </div>                                        
                                                        </div>

                                                        </br>
                                                        <div class="row">
                                                            <div class="col-md-4 col-xs-3">
                                                            <p align="right"><stong>Prior Experiance</stong></p>                                        
                                                            </div>
                                                            <div class="col-md-8 col-xs-9">
                                                                <input  type="radio" value="1" name="exp" > Yes
                                                                <input  type="radio" value="0" name="exp" checked="checked"> No
                                                            </div>                                        
                                                        </div>

                                                        </br>
                                                        <div class="row" id="stud_experiance" hidden="true">
                                                            <div class="col-md-4 col-xs-3">
                                                            <p align="right"><stong>Work Experiance Details</stong></p>                                      
                                                            </div>
                                                            <div class="col-md-8 col-xs-9">
                                                                <input  type="text" name="emp_name" placeholder="Employeer Name">
                                                                <input  type="text" name="desig" placeholder="Designation">
                                                                <input  type="date" name="from" placeholder="Date(From)">
                                                                <input  type="date" name="to" placeholder="Date(To)">
                                                                <input  type="text" name="job_location" placeholder="Job Location">
                                                            </div>                                        
                                                        </div>

                                                        <script>
                                                        $(function() {
                                                            $('input[name="exp"]').on('click', function() {
                                                                if ($(this).val() == '1') {
                                                                    $('#stud_experiance').show();
                                                                }
                                                                else {
                                                                    $('#stud_experiance').hide();
                                                                }
                                                            });
                                                        });
                                                        </script>
                                                        
                                                        </br>
                                                        <div class="row">
                                                            <div class="col-md-4 col-xs-3">
                                                            <p align="right"><stong>Done any Vocational training prior to this</stong></p>                                        
                                                            </div>
                                                            <div class="col-md-8 col-xs-9">
                                                                <input  type="radio" name="training" value="1"  > Yes
                                                                <input  type="radio" name="training" value="0" checked="checked"> No
                                                            </div>                                        
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                            </ul>
                                        </div>


                                        
                                        <!--======================= THIRD PAGE ============================ -->

                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <div class="step33">
                                            <h5><strong>Family Details</strong></h5>
                                            <hr>
                                                <div class="row mar_ned">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xs-12">
                                                            <table style="width:100%;">
                                                              <tr>
                                                                <th>Name</th>
                                                                <th>Qualification</th>
                                                                <th>Occupation</th>
                                                              </tr>
                                                              <tr>
                                                                <td><input type="text" name="f_name" class="form-control" placeholder="Father Name" ></td>
                                                                <td>
                                                                    <select name="father_qualification" id="father_qualification" class="dropselectsec">
                                                                                    <option value=""> Select Father Education</option>
                                                                                    <option value="1">Ph.D</option>
                                                                                    <option value="2">Masters Degree</option>
                                                                                    <option value="3">PG Diploma</option>
                                                                                    <option value="4">Bachelors Degree</option>
                                                                                    <option value="5">Diploma</option>
                                                                                    <option value="6">Intermediate / (10+2)</option>
                                                                                    <option value="7">Secondary</option>
                                                                                    <option value="8">Others</option>
                                                                                </select>
                                                                </td>
                                                                <td><input type="text" name="f_occuption" class="form-control" placeholder="Father Occuption"></td>
                                                              </tr>
                                                              <tr>
                                                                <td><input type="text" name="m_name" class="form-control" placeholder="Mother Name"></td>
                                                                <td>
                                                                    <select name="mother" id="mother_qualification" class="dropselectsec">
                                                                                    <option value=""> Select Mother Education</option>
                                                                                    <option value="1">Ph.D</option>
                                                                                    <option value="2">Masters Degree</option>
                                                                                    <option value="3">PG Diploma</option>
                                                                                    <option value="4">Bachelors Degree</option>
                                                                                    <option value="5">Diploma</option>
                                                                                    <option value="6">Intermediate / (10+2)</option>
                                                                                    <option value="7">Secondary</option>
                                                                                    <option value="8">Others</option>
                                                                                </select>
                                                                </td>
                                                                <td><input type="text" name="m_occuption" class="form-control" placeholder="Mother Occuption"></td>
                                                              </tr>
                                                              <tr>
                                                                <td><input type="text" name="s_name" class="form-control" placeholder="Spouse Name"></td>
                                                                <td>
                                                                    <select name="spouse_qualification" id="spouse_qualification" class="dropselectsec">
                                                                        <option value=""> Select Spouse Education</option>
                                                                        <option value="1">Ph.D</option>
                                                                        <option value="2">Masters Degree</option>
                                                                        <option value="3">PG Diploma</option>
                                                                        <option value="4">Bachelors Degree</option>
                                                                        <option value="5">Diploma</option>
                                                                        <option value="6">Intermediate / (10+2)</option>
                                                                        <option value="7">Secondary</option>
                                                                        <option value="8">Others</option>
                                                                    </select>
                                                                </td>
                                                                <td><input type="text" name="s_occuption" class="form-control" placeholder="Spouse Occuption"></td>
                                                              </tr>                      
                                                            </table>
                                                            </div>
                                                        </div>                                    
                                                    </div>
                                                </div>

                                                <div class="row mar_ned" style="text-align: right;">
                                                    <div class="col-md-4 col-xs-6">
                                                    <label>Total Working Member in Family</label>
                                                    </div>
                                                    <div class="col-md-1 col-xs-6">
                                                    <input type="text" name="working_no" class="form-control" placeholder="Number ">
                                                    </div>
                                                </div>
                                                <div class="row mar_ned" style="text-align: right;">
                                                    <div class="col-md-4 col-xs-6">
                                                    <label>Total Family Income</label>
                                                    </div>
                                                    <div class="col-md-2 col-xs-6">
                                                    <input type="number" name="income" class="form-control" placeholder="Family Income">
                                                    </div>
                                                </div>

                                                <h5><strong>Assets</strong></h5>
                                                <hr>
                                                <div class="row mar_ned">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="col-md-2">
                                                        <input type="checkbox" name="vehicle" value="car"> We have a Car                                    </div>
                                                        <div class="col-md-2">
                                                        <input type="checkbox" name="vehicle" value="bike"> We have a Bike
                                                        </div>
                                                        <div class="col-md-2">
                                                        <input type="checkbox" name="vehicle" value="tv"> We have a TV
                                                        </div>
                                                        <div class="col-md-2">
                                                        <input type="checkbox" name="vehicle" value="refrigarator"> We have a Refrigarator<br>
                                                        </div>
                                                        <div class="col-md-2">
                                                        <input type="checkbox" name="vehicle" value="w_machine"> We have a Washing Machine<br>
                                                        </div>                                                                     
                                                    </div>
                                                </div>                          
                                               
                                              
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="complete">
                                            <div class="step44">
                                                <h5>Completed</h5>
                                                <button type="submit" name="submit" class="bt btn btn-info" value="submit">Submit</button>
                                              
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
					        </div>
					    </section>
					   </div>
					</div>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



                 


                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
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
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Star Rating</h2>
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

                                    <h4>Star Ratings<small>Hover and click on a star</small></h4>
                                    <div>
                                        <div id="stars" class="starrr lead"></div>
                                        You gave a rating of <span id="count">0</span> star(s)
                                    </div>


                                    <p>Also you can give a default rating by adding attribute data-rating</p>
                                    <div id="stars-existing" class="starrr lead" data-rating='4'></div>
                                    You gave a rating of <span id="count-existing">4</span> star(s)


                                </div>
                            </div>


                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Registration Form <small>Click to validate</small></h2>
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

                                    <!-- start form for validation -->
                                    <form id="demo-form" data-parsley-validate>
                                        <label for="fullname">Full Name * :</label>
                                        <input type="text" id="fullname" class="form-control" name="fullname" required />

                                        <label for="email">Email * :</label>
                                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                                        <label>Gender *:</label>
                                        <p>
                                            M:
                                            <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                        </p>

                                        <label>Hobbies (2 minimum):</label>
                                        <p style="padding: 5px;">
                                            <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                                            <br />
                                            <p>

                                                <label for="heard">Heard us by *:</label>
                                                <select id="heard" class="form-control" required>
                                                    <option value="">Choose..</option>
                                                    <option value="press">Press</option>
                                                    <option value="net">Internet</option>
                                                    <option value="mouth">Word of mouth</option>
                                                </select>

                                                <label for="message">Message (20 chars min, 100 max) :</label>
                                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                                                <br/>
                                                <span class="btn btn-primary">validate form</span>

                                    </form>
                                    <!-- end form for validations -->

                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Basic Elements <small>different form elements</small></h2>
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
                                    <br />
                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" class="form-control" value="passwordonetwo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                                                <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_single form-control" tabindex="-1">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_group form-control">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_multiple form-control" multiple="multiple">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                    <option>Option five</option>
                                                    <option>Option six</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                <br>
                                                <small class="text-navy">Normal Bootstrap elements</small>
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Option one. select more than one options
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Option two. select more than one options
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                <br>
                                                <small class="text-navy">Normal Bootstrap elements</small>
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" checked="checked"> Checked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" disabled="disabled"> Disabled
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" checked name="iCheck"> Checked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck"> Unchecked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked /> Checked
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" /> Unchecked
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Buttons <small>Sessions</small></h2>
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

                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Button addons</label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button>
                                        </span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> 
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider-dashed"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Button addons</label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="#">Action</a>
                                                            </li>
                                                            <li><a href="#">Another action</a>
                                                            </li>
                                                            <li><a href="#">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> 
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Text areas<small>Sessions</small></h2>
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


                                <div id="alerts"></div>
                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-edit="fontSize 5"><p style="font-size:17px">Huge</p></a>
                                            </li>
                                            <li><a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
                                            </li>
                                            <li><a data-edit="fontSize 1"><p style="font-size:11px">Small</p></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                                        <div class="dropdown-menu input-append">
                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                            <button class="btn" type="button">Add</button>
                                        </div>
                                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                                    </div>

                                    <div class="btn-group">
                                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                                    </div>
                                </div>

                                <div id="editor">
                                    
                                </div>
                                <textarea name="descr" id="descr" style="display:none;"></textarea>
                                <br />

                                <div class="ln_solid"></div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out...
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Input Grid <small>form input </small></h2>
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

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-12" class="form-control">
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                </div>


                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>


                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>


                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>
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
                            <br />

                            <h4>Horizontal labels</h4>
                            <p class="font-gray-dark">
                                Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
                            </p>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="last-name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </form>


                            <h4>Vertical labels</h4>
                            <p class="font-gray-dark">
                                For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                            </p>
                            <div class="col-md-8 center-margin">
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>

                                </form>
                            </div>

                            <h4>Inline Form </h4>
                            <p class="font-gray-dark">
                                For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                            </p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="ex3">Email address</label>
                                    <input type="text" id="ex3" class="form-control" placeholder=" ">
                                </div>
                                <div class="form-group">
                                    <label for="ex4">Email address</label>
                                    <input type="email" id="ex4" class="form-control" placeholder=" ">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Send invitation</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Digital Impact Square <a></a>
                            <span class="lead"> <i class="fa fa-paw"></i> SKALA</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>

        </div>
    </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="js/moment.min2.js"></script>
        <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="js/editor/bootstrap-wysiwyg.js"></script>
        <script src="js/editor/external/jquery.hotkeys.js"></script>
        <script src="js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="js/autocomplete/countries.js"></script>
        <script src="js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>