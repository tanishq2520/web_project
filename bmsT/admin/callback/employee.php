<?php
    include("../../config/config.php");
    
    if(isset($_POST['title']) && trim($_POST['title'])!=''){
        //insert
        // echo 'here';
        // $query = "insert into tablename('title','description')values(''),('')";
        $title = $_POST['title'];
        $description = $_POST['description'];
        $query = "INSERT INTO employee(name,description) VALUES ('$title','$description')";
        $checkResult = $conn->query($query);
        if($checkResult){
            $_SESSION['status']='success';
            header("location:../employee.php");
           // echo 'pass';
        }
        else{
            $_SESSION['status']='fail';
            header("location:../employee.php");
            //echo 'fail';
        }
    }
    // update
    // delete
?>