<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $gender = $_POST['gender'];
   $role = $_POST['role'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `role`) VALUES (NULL,'$first_name','$last_name','$email','$password','$gender','$role')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: login.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>PHP Application</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:rgba(48, 238, 248, 0.45);">
   <i class="fa-solid fa-crown"></i> SHIT FUCKERY Inc
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <p class="text-muted">Complete the form below to Register a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;" class="card p-4">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required>
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Password:</label>
               <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div class="form-group mb-3">
               <label>Role:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="role" id="user" value="user" checked>
               <label for="user" class="form-input-label">User</label>
            </div>

            <div class="d-flex justify-content-center">
               <button type="submit" class="btn btn-success" name="submit">Save</button>&nbsp;
               <a href="login.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

