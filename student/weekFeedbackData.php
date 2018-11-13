<?php
    include("../include/config.php");
        
if (isset($_POST['weekFeedback']))
    {
        
        $course=$_POST['course'];
        $roll=$_POST['rollNumber'];
        $frndCount=$_POST['frndCount'];
        $frndRoll=$_POST['frndRollNumber'];
        $topper=$_POST['topper'];
        $travelPartner=$_POST['travelPartner'];
        $travelExp=$_POST['travelExp'];
        $travelTime=$_POST['travelTime'];
        $courseLike=$_POST['courseLike'];

        /*$otherCourse = implode(',', $_POST['otherCourse']);*/

        /*$otherCourse = " ";
        foreach($_POST["otherCourse"] as $other){
        $otherCourse .= $other. ", ";
        }
        echo $otherCourse;*/
        
        if($course==''){echo "<script>alert('Please enter Course details')</script>";exit();}

        else
        {
            $query="insert into week_feedback(course,roll_number,friends_count,friends_rollno,topper,travel_partner,travel_exp,travel_time,course_like) values('$course',
                '$roll','$frndCount','$frndRoll','$topper','$travelPartner','$travelExp','$travelTime','$courseLike')";
                
            if(mysqli_query($db,$query))
            {
                /*header("location: index.php");*/
                echo "<script>alert('Feedback Sucessfull')</script>";
            }
            else {
                echo 'Unsuccussful';
            }
        }
}    
mysqli_close($db);
?>
