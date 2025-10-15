<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="bg-white shadow rounded p-4 p-md-5">

          <h3 class="mb-4 text-center">Register</h3>
          <p class="text-center text-muted mb-4">Create your account</p>
          <?php echo validation_list_errors();?>
          <form action="<?php echo base_url('register'); ?>" method="POST">
            
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="fname" name="fname" >
            </div>

            <div class="mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lname" name="lname" >
            </div>

            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" >
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" >
            </div>

            <button type="submit" class="btn btn-dark w-100">Register</button>
          </form>

          <p class="text-center mt-4 mb-0">
            Already have an account? 
            <a href="login" class="text-dark">Log in</a>
          </p>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
