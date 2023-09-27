<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

        <div class="container">
            <div class="col-md-10 mx-auto md-5">
                <div class="card">
                    <?php
                    if(isset($success)){
                        printf("<span class='alert alert-success'>%s</span>", $success);
                    }
                    if(isset($error)){
                        printf("<span class='alert alert-danger'>%s</span>", $error);
                    }
                    ?>
                    <div class="card-header">
                        <h3 ><?=$marks['name']?></h3>
                        <h3 >Marksheet</h3>
                        <a href="index.php" class="btn btn-outline-primary btn-sm ">Back</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Subject</th>
                                <th>Mark</th>
                                <th>Grade</th>
                                <th>GPA</th>
                            </tr>
                            <?php
                                $sum = 0;
                                foreach($marks as $key=>$mark){
                                    if($key =='id' || $key =='name' || $key =='roll' || $key =='registration' || $key =='created_at' || $key =='updated_at'){
                                        continue;
                                    }
                                    $data = grade_calculation($key,$mark);
                                    $sum += $data['gpa'];
                            ?>
                                <tr>
                                    <td><?= ucfirst(str_replace('_',' ',$data['subject']))?></td>
                                    <td><?= $data['mark']?></td>
                                    <td><?= $data['grade']?></td> 
                                    <td><?= $data['gpa']?></td> 
                                </tr>
                            <?php
                                }
                                $gpa_point = $sum/9;

                            ?>
                            <tr>
                                    <th colspan="3" class="text-center">GPA POINT</th>
                                    <th><?= number_format($gpa_point, 2)?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>