<?php
require('db_con.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $ststus = "SELECT status FROM mark_sheet WHERE id=$id";

    $result = $con->query($ststus);
    if($result){
        $row = $result->fetch_assoc();
        $insert = '';
        if($row['status'] == 1){
            $insert = "UPDATE mark_sheet SET status = 0 WHERE id=$id";
        }else{
            $insert = "UPDATE mark_sheet SET status = 1 WHERE id=$id";
        }
        $statusUpadte = $con->query($insert);
        if($statusUpadte){
            $success = "Data Updated Successfully";
            $success = base64_encode($statusUpadte);
            header("location:index.php?success=$success");
        }else{
            $error = "Data Updated Failed";
            $error = "Status Change Failed";
            $error = base64_encode($error);
            header("location:index.php?error=$error");
        }
    }
}





?>