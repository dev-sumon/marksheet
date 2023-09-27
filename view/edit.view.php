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
        <div class="col-md-10 mx-auto my-5">
            <div class="card">
                <?php
                    if(isset($success)){
                        printf("<span class='alert alert-success'>%s</span>",$success);
                    }elseif(isset($error)){
                        printf("<span class='alert alert-danger'>%s</span>",$error);
                    }
                ?>
                <div class="card-header">
                    <h3 class="float-start">Insert Mark</h3>
                    <a href="index.php" class="btn btn-outline-primary btn-sm float-end">Back</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?=$name?>" class="form-control mb-4">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" value="<?=$roll?>" class="form-control mb-4">
                        <label for="registration">Registration</label>
                        <input type="number" name="registration" value="<?=$registration?>" class="form-control mb-4">
                        <label for="bangla">Bangla</label>
                        <input type="number" name="bangla" value="<?=$bangla?>" class="form-control mb-4">
                        <label for="english">English</label>
                        <input type="number" name="english" value="<?=$english?>" class="form-control mb-4">
                        <label for="math">Math</label>
                        <input type="number" name="math" value="<?=$math?>" class="form-control mb-4">
                        <label for="religion">Religion</label>
                        <input type="number" name="religion" value="<?=$religion?>" class="form-control mb-4">
                        <label for="ict">ICT</label>
                        <input type="number" name="ict" value="<?=$ict?>" class="form-control mb-4">
                        <label for="physics">Physics</label>
                        <input type="number" name="physics" value="<?=$physics?>" class="form-control mb-4">
                        <label for="chemistry">Chemistry</label>
                        <input type="number" name="chemistry" value="<?=$chemistry?>" class="form-control mb-4">
                        <label for="biology">Biology</label>
                        <input type="number" name="biology" value="<?=$biology?>" class="form-control mb-4">
                        <label for="higher_math">Higher Math</label>
                        <input type="number" name="higher_math" value="<?=$higher_math?>" class="form-control mb-4">
                        <input type="submit" name="submit" value="Submit" class="btn btn-outline-info w-100"> 
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>