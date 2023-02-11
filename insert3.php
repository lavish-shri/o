<?php

$con = mysqli_connect("fdb31.biz.nf","4024908_job","E2j2S0#G1!6DYLF}","4024908_job");

if(isset($_POST["submit"]))
{
$mail = $_POST["mail"];
$number = $_POST["number"];

$query =  "INSERT INTO fourpage(EMAIL, NUMBER) VALUE ('".$mail."','".$number."')"; 

 

$run = mysqli_query($con,$query);
}
 //redirect
   header ("Location:formd.html");

 ?>