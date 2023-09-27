<?php
    require('db_con.php');
    function grade_calculation($subject, $mark){
            if($mark>=80 && $mark<=100){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "A+";
                $s['gpa'] = "5.00";
                return $s;
            }elseif($mark>=70 && $mark<=79){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "A";
                $s['gpa'] = "4.00";
                return $s;
            }elseif($mark>=60 && $mark<=69){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "A-";
                $s['gpa'] = "3.50";
                return $s;
            }elseif($mark>=50 && $mark<=59){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "B";
                $s['gpa'] = "3.00";
                return $s;
            }elseif($mark>=40 && $mark<=59){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "C";
                $s['gpa'] = "2.50";
                return $s;
            }elseif($mark>=33 && $mark<=39){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "D";
                $s['gpa'] = "2.00";
                return $s;
            }elseif($mark>=0 && $mark<=32){
                $s['subject'] = $subject;
                $s['mark'] = $mark;
                $s['grade'] = "F";
                $s['gpa'] = "0.00";
                return $s;
            }
    }


    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $select = "SELECT * FROM mark_sheet WHERE id=$id";
        $result = $con->query($select);
        if($result){
            $marks = $result->fetch_assoc();
            include('view/marksheet.view.php');
        }
    }
?>