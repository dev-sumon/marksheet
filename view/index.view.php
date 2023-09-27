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
                        if(isset($_GET['success'])){
                            $success = base64_decode($_GET['success']);
                            printf("<span class='alert alert-success'>%s</span>", $success);
                        }
                        if(isset($_GET['error'])){
                            $error = base64_decode($_GET['error']);
                            printf("<span class='alert alert-danger'>%s</span>", $error);
                        }
                    ?>
                    <div class="card-header">
                        <h3 class="float-start">Student List</h3>
                        <a href="insert.php" class="btn btn-outline-primary btn-sm float-end">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <tr>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Registration</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            <?php
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){

                            ?>
                                <tr>
                                    <td><?=$row['name']?></td>
                                    <td><?=$row['roll']?></td>
                                    <td><?=$row['registration']?></td>
                                    <td>
                                            <span class="badge <?= $row['status'] == 1 ? 'bg-success' : 'bg-info' ?>">
                                                <?= $row['status'] == 1 ? 'Active' : 'Deactive' ?>
                                            </span>
                                        </td>
                                    
                                    <td><?=$row['created_at']?></td>
                                    <td><?=$row['updated_at'] ?? 'N/A'?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="marksheet.php?id=<?=$row['id']?>" class="btn btn-primary btn-sm">Marksheet</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                                             <a href="" class="btn btn-danger btn-sm">Delete</a>
                                             <a href="status.php?id=<?= $row['id'] ?>" class="btn <?= $row['status'] == 1 ? 'btn-info' : 'btn-success' ?>  btn-sm">
                                                    <?= $row['status'] == 1 ? 'Deactive' : 'Active' ?>
                                                </a>
                                             
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                    }
                                }
                            
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>