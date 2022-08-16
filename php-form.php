<?php
$DATABAE_HOST = 'localhost';
$DATABAE_USER = 'root';
$DATABAE_PASS = '';
$DATABAE_NAME = 'form';

$con = mysqli_connect($DATABAE_HOST,$DATABAE_USER,$DATABAE_PASS,$DATABAE_NAME);

if($con->connect_error){
    echo('error'. $con->connect_error);
}
else{
    echo'Success';
}

?>
