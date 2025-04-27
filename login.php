<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $role = $_POST['role'];

   $sql = "SELECT * FROM `crud` WHERE `email`='$email' AND `password`='$password' AND `role`='$role'";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) === 1) {
      if ($role == 'admin') {
         header("Location: admin.php?msg=Login successful");
      } else {
         header("Location: index.php?msg=Login successful");
      }
   } else {
      echo '<script>alert("Invalid email or password");</script>';
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

   <title>Login Page</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:rgba(48, 238, 248, 0.45);">
   <i class="fa-solid fa-crown"></i> SHIT FUCKERY Inc
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <p class="text-muted">Enter your credentials to login</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;" class="card p-4">
            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
               <label class="form-label">Password:</label>
               <input type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="mb-3">
               <label class="form-label">Role:</label>
               <select class="form-select" name="role">
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
               </select>
            </div>

            <div class="d-flex justify-content-center">
               <button type="submit" class="btn btn-success" name="submit">Login</button>
               <a href="add-new.php" class="btn btn-link">Create an Account</a>
            </div>
         </form>
      </div>
   </div>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>

