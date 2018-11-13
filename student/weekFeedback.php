<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
        .text-on-pannel {
        background: #fff none repeat scroll 0 0;
        height: auto;
        margin-left: 20px;
        padding: 3px 5px;
        position: absolute;
        margin-top: -47px;
        border: 1px solid #337ab7;
        border-radius: 8px;
        }

        .panel {
        /* for text on pannel */
        margin-top: 27px !important;
        }

        .panel-body {
        padding-top: 30px !important;
        }
        </style>
    </head>
    <body>
        <?php require 'header.php' ?>
        <form style="padding: 15px" action="weekFeedbackData.php" method="post" id="form1">
            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-body">
                      <h3 class="text-on-pannel text-primary"><strong class="text-uppercase">Student Buddy </strong></h3>

                        <div class="col-md-12">
                             <label>Your Course</label> 
                            <select name="course" class="selectpicker form-control" id="course">
                                <option>Select Your Course</option>
                                <option value="Assistant Electrician">Assistant Electrician</option>
                                <option value="Auto Sales">Auto Sales</option>
                                <option value="Auto Technician">Auto Technician</option>
                                <option value="Business Development Executive">Business Development Executive</option>
                                <option value="Cab Driver Orientation">Cab Driver Orientation</option>
                                <option value="CRM">CRM</option>
                                <option value="F and B Steward">F and B Steward</option>
                                <option value="General Duty Assistant">General Duty Assistant</option>
                                <option value="Hygiene Assistant">Hygiene Assistant</option>
                                <option value="Quick Service Executive">Quick Service Executive</option>
                                <option value="Retail Sales Associate">Retail Sales Associate</option>
                            </select>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label class="label label-default">Roll No. (रोल नंबर) </label>
                            <input type="text" name="rollNumber" class="form-control">
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>How many Good Friends you have in class?(किती चांगले मित्र वर्गात आहे तुझे?)</label>
                            <select name="frndCount" class="form-control" id="frndCount">
                                <option>Select Friends Count</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="10">More Than 6</option>
                            </select>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>Tell us there roll numbers</label>
                            <input type="text" name="frndRollNumber" class="form-control">
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>Who is very talented according to you in your class? Write his/her roll number.(तुमच्या मते वर्गात सडल्यात हुशार कोण आहे? त्यांचा तिचा रोल नंबर लिहा .)</label>
                            <input type="text" name="topper" class="form-control">
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>Do you have anyone with you while coming here?(क्लास ला येताना सोबत कोणी असत ?)</label> </br>
                            <label class="radio" style="margin-left: 27px">
                                <input  type="radio" name="travelPartner" value="1"  > Yes
                            </label>
                            <label class="radio" style="margin-left: 27px">
                                <input  type="radio" name="travelPartner" value="0"  > No
                            </label>
                            <label class="radio" style="margin-left: 27px">
                                <input  type="radio" name="travelPartner" value="2"  > Sometimes
                            </label>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>How much you spend to come to class?(रोज क्लास ला येताना किती खरंच होतो? )</label> </br>
                            <select name="travelExp" class="form-control" id="travelExp">
                                <option>Select Travel Cost</option>
                                <option value="0-10">0-10</option>
                                <option value="20-30">20-30</option>
                                <option value="50-100+">50-100</option>
                                <option value="100+">More Than 100</option>
                            </select>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>How much time it takes to reach from home to class? (घरून क्लास ला यायला किती वेळ लागतो ?) </label>
                            <select name="travelTime" class="form-control" id="travelTime">
                                <option>Select Travel Time</option>
                                <option value="30">Less Than 30 Minutes</option>
                                <option value="60">Less Than 1 Hours</option>
                                <option value="60+">More Than 1 Hour</option>
                            </select>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>How much do you like your course</label>
                            <select name="courseLike" class="form-control" id="courseLike">
                                <option>Select percentage </option>
                                <option value="30">0-10%</option>
                                <option value="60">10-30%</option>
                                <option value="60+">30-50%</option>
                                <option value="60+">50-70%</option>
                                <option value="60+">70-90%</option>
                                <option value="60+">30-100%</option>
                            </select>
                        </div>

                        <div class="col-md-12 panel-body">
                            <label>Which other course of Tata STRIVE do you like?(Tata STRIVE चा दुसरा कोणता कोर्से आवडतो ? )</label> </br>
                            <label class="checkbox-inline">
                            <input type="checkbox" name="otherCourse[]" value="Assistant Electrician">Assistant Electrician
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Auto Sales">Auto Sales
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Auto Technician">Auto Technician
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Business Development Executive">Business Development Executive
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Cab Driver Orientation">Cab Driver Orientation
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="F and B Steward">F and B Steward
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="General Duty Assistant">General Duty Assistant
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Hygiene Assistant">Hygiene Assistant
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Quick Service Executive">Quick Service Executive
                            </label>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="otherCourse[]" value="Retail Sales Associate">Retail Sales Associate
                            </label>
                            <input type="checkbox" name="otherCourse[]" value="test">Test
                        </div>


                        <div class="col-md-12 panel-body">
                            <button type="submit" class="btn btn-success" form="form1" value="submit" name="weekFeedback">Submit</button>
                            
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <?php require '../employer/footer.php' ?>
    </body>
</html>