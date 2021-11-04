<?php 

if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){
    $conn= new mysqli('localhost','root','','house_rental_db')or die("Could not connect to mysql".mysqli_error($con));
    $local = True;
    }else{
        $conn= new mysqli('sql11.freemysqlhosting.net','sql11448949','BUUVMPXDEM','sql11448949')or die("Could not connect to mysql".mysqli_error($con));
    }
