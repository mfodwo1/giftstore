<!-- Add the following code to the head section of your HTML document to include the Bootstrap CSS file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">

<!-- Add the following code to the head section of your HTML document to include the custom color scheme -->


<link rel="stylesheet" href="forms.css">

<
<div class="container">
  
  <form action="signup.php" method="POST">
  <h3>Register</h3>
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <input type="submit" value="Sign Up">
    <p class="text-center mt-3">Don't have an account? <a href="login.php">Login</a></p>
  </form>
  
</div>
