<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="bg-white shadow rounded p-4 p-md-5">

          <h3 class="mb-3 text-center">LOG IN</h3>
          <p class="text-center text-muted mb-4">Welcome back! Please enter your details</p>

          <!-- Form submits to dashboard.php -->
          <form action="dashboard.php" method="POST">
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 text-end">
              <a href="#" class="text-decoration-none text-dark">Forgot password?</a>
            </div>
            <!-- Login button -->
            <button type="submit" class="btn btn-dark w-100 mb-3">Log in</button>
          </form>

          <div class="d-flex align-items-center my-3">
            <hr class="flex-grow-1">
            <span class="mx-2 text-muted">Or Continue With</span>
            <hr class="flex-grow-1">
          </div>

          <p class="text-center mt-4 mb-0">
            Don’t have an account? 
            <a href="register" class="text-dark">Sign up</a>
          </p>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
