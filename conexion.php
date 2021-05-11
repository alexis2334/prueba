<?php

$host="87.193.74.127";
$user="alexisaa_cruz";
$password="123456789.Alexis";
$db="alexisaa_manjaro";




$con = new mysqli($host,$user,$password,$db);
$con->set_charset('utf8');

if(!empty($_POST)){
    $name=mb_strtoupper($_POST['name']);
    $last=mb_strtoupper($_POST['last']);
    $num=mb_strtoupper($_POST['num']);


$nuevo="Insert into datos(name,last,num) values(\"$_POST[name]\",\"$_POST[last]\",\"$_POST[num]\")";

echo mysqli_query($con,$nuevo);


}



?>
