<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
           if(isset($_POST["submit"])){
            $fullName = $_POST["fullName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $repertpassord = $_POST["repert_passord"];
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();
            if(empty($fullName) OR empty($email) OR empty($password) OR empty($repertpassord)){
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }
            if(strlen($password)<8){
                array_push($errors, "Password must be the 8 charecter long");
            }
                if($password!==$repertpassord){
                    array_push($errors, "password does not match");
                }
                 // we will insert the data into  database
                 require_once "database.php";
                // same email login error massag show
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn,$sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount>0) {
                    array_push($errors,"Email alrady exists!");
                }
                if (count($errors)>0) {
                    foreach($errors as $error) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                   }else{
                       
                        // user
                        $sql = "INSERT INTO users(full_name,email,password) VALUES(?, ?, ?)";
                       $stmt = mysqli_stmt_init($conn);
                       $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
                       if($prepareStmt){
                        mysqli_stmt_bind_param($stmt, "sss",$fullName,$email,$passwordHash);
                        mysqli_stmt_execute($stmt);
                        echo "<div class='alert alert-success'> you are registered successfully. </div>";

                       }else{
                        die("Something went wrong");
                       }
                }
            }
           
        ?>
        <form action="regestation.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullName" placeholder="Full Nmae">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="repert_passord" placeholder="repert_passord">
            </div>
            <div class="from-group">
                <input type="submit" class="btn btn-primary" value="Reister" name="submit">
            </div>
        </form>
    </div>
</body>
</html>