<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="forms.css">
  
</head>
<body style="background-color: var(--background-color);">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow">
          <div class="card-body">
            <h2 class="text-center mb-4">Login</h2>

            <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error; ?>
            </div>
            <?php endif; ?>

            <form action="login_processor.php" method="post">
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                <a href="#" class="forgot-password">Forgot Password?</a>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

            <p class="text-center mt-3">Don't have an account? <a href="register.php" >Create Account</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html> 