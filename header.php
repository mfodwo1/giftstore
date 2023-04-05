<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Regal Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- Font Awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

    <?php
session_start();

function is_user_logged_in() {
  return isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
}

function get_user_firstname() {
  if (is_user_logged_in()) {
      return $_SESSION["fname"];
  } else {
      return "";
  }
}
function logout_user() {
  session_destroy();
  header("Location: login.php");
}

?>

    <?php
        $active_page = "home"; // Set the active page variable for the home page
    ?>

        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#index.html">Regal Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <!--<span class="navbar-toggler-icon"></span> --><i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li <?php if ($active_page == "home") { echo "class='active'"; } ?> class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li <?php if ($active_page == "Products") { echo "class='active'"; } ?> class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><?php if ($active_page == "product") { echo "class='active'"; } ?> <a class="dropdown-item" href="product.php">All Gifts</a></li>
                    <li><a class="dropdown-item" href="#">Gifts for Him</a></li>
                    <li><a class="dropdown-item" href="#">Gifts for Her</a></li>
                    <li><a class="dropdown-item" href="#">Gifts for Kids</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Details</a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                  </ul>
                </li>

                <li class="nav-item">
                <div class="cart">
                    <a id="cart"  href="cart.html"><i class="fas fa-shopping-cart cart-icon"></i><span id="cart-count">0</span></a>
                    
                </div>
                  <!-- <a id="cart" class="nav-link" href="#"><i class="fas fa-shopping-cart cart-icon"></i></a> -->
                </li>
                <!-- if user is logged in, show name and dropdown with logout option -->
                <?php if (is_user_logged_in()): ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php echo $_SESSION["fname"]; ?> <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <!-- <li><a class="dropdown-item" href="#" onclick="logout_user()">Logout</a></li> -->

                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                  </li>
                <!-- if user is not logged in, show login and register links -->
                <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                  </li>
                <?php endif; ?>
                
              </ul>
                
               
              <form class="form-search" action="search.php" method="GET">
                <input type="text" id="searchTerm" placeholder="Search" name="searchTerm">
                <input type="submit" value="Search">
              </form>
            </div>
          </div>
        </nav>
        
      </header>
      