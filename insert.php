<?php
    require('db_con.php');
    $name = '';
    $roll = '';
    $registration = '';
    $bangla = '';
    $english = '';
    $math = '';
    $religion = '';
    $ict = '';
    $physics = '';
    $chemistry = '';
    $biology = '';
    $higher_math = '';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $registration = $_POST['registration'];
        $created_at = date('Y-m-d H:i:s');
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $religion = $_POST['religion'];
        $ict = $_POST['ict'];
        $physics = $_POST['physics'];
        $chemistry = $_POST['chemistry'];
        $biology = $_POST['biology'];
        $higher_math = $_POST['higher_math'];
        
    
        
        global $success;
        global $error;
        $err = 0;
        if(empty($name)){
            $err++;
            $error = "Please enter your name!";

        }elseif(empty($roll)){
            $err++;
            $error = "Please enter your roll!";
        }elseif(empty($registration)){
            $err++;
            $error = "Please enter your registration!";
        }elseif(empty($bangla)|| $bangla>100 || $bangla<0){
            $err++;
            $error = "Please enter your bangla mark(must be mark>=0 & mark<=100)!";
        }elseif(empty($english) || $english>100 || $english<0){
            $err++;
            $error = "Please enter your english mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($math) || $math>100 || $math<0){
            $err++;
            $error = "Please enter your math mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($religion) || $religion>100 || $religion<0){
            $err++;
            $error = "Please enter your religion mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($ict) || $ict>100 || $ict<0){
            $err++;
            $error = "Please enter your ict mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($physics) || $physics>100 || $physics<0){
            $err++;
            $error = "Please enter your physics mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($chemistry) || $chemistry>100 || $chemistry<0){
            $err++;
            $error = "Please enter your chemistry mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($biology) || $biology>100 || $biology<0){
            $err++;
            $error = "Please enter your biology mark (must be mark>=0 & mark<=100)!";
        }elseif(empty($higher_math) || $higher_math>100 || $higher_math<0){
            $err++;
            $error = "Please enter your higher_math mark (must be mark>=0 & mark<=100)!";
        }elseif($err == 0){
            $insert = "INSERT INTO mark_sheet(name, roll, registration, bangla, english, math, religion, ict, physics, chemistry, biology, higher_math, created_at)VALUES('$name', '$roll', '$registration', '$bangla', '$english', '$math', '$religion', '$ict', '$physics', '$chemistry', '$biology', '$higher_math', '$created_at')";

            $result = $con->query($insert);
            if($result){
                $success = "Data Inasert Successfully";
                $success= base64_encode($success);
                $name = '';
                $roll = '';
                $registration = '';
                $bangla = '';
                $english = '';
                $math = '';
                $religion = '';
                $ict = '';
                $physics = '';
                $chemistry = '';
                $biology = '';
                $higher_math = '';
                header("location:index.php?success=$success");
            }else{
                $error = "Data Inasert Falied";
            }
        }
    }





    include('view/insert.view.php');

?>