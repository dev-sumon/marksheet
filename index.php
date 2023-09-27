<?php
    require('db_con.php');

    $select = "SELECT * FROM mark_sheet";
    $result = $con->query($select);
    include('view/index.view.php');

?>