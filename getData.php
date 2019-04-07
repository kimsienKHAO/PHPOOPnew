<?php
include "connection.php";
use kimsien\InsertData;
require "public/vendor/autoload.php";

if(isset($_POST['btn-submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $student =new InsertData($name,$gender,$email);
//get value from class oop
    $getName = $student->getName();
    $getGender = $student->getGender();
    $getEmail = $student->getEmail();

    $query ="INSERT INTO tblstudent(name,gender,email) VALUES('$getName','$getGender','$getEmail')";
    $result = mysqli_query($conn,$query);

    if($result){
        header ("location: index.php");
    }
}