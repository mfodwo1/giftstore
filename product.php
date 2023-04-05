


<?php include 'header.php' ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$.ajax({
				url: "get_products.php",
				dataType: "json",
				success: function(data) {
					var list = $("<ul>");
					$.each(data, function(index, product) {
						var item = $("<li>").text(product.name);
						list.append(item);
					});
					$("#products").html(list);
				}
			});
		});
	</script>

  <main>
    <?php
    
      // connect to database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "regal_store";
      $conn = new mysqli($servername, $username, $password, $dbname);

      // check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // fetch products from database
      $sql = "SELECT product_code, pname, pdescription, price, image1, image_path	 FROM products";
      $result = $conn->query($sql);

?>

<html>

      <!-- HTML code for the shopping cart icon -->
      <div class="cart-icon">
        <a href="#" class="cart-icon-link" id="cart-icon">
          <i class="fa fa-shopping-cart"></i>
          <span class="cart-count">0</span>
        </a>
        
        <div class="cart-view-table-front" id="view-cart">
          <!-- PHP code for the shopping cart content -->
          <?php
            if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0) {
              echo '<div class="cart-view-table-front" id="view-cart">';
              echo '<h3>Your Shopping Cart</h3>';
              echo '<form method="post" action="cart_update.php">';
              echo '<table width="100%"  cellpadding="6" cellspacing="0">';
              echo '<tbody>';
            
              $total =0;
              $b = 0;
              foreach ($_SESSION["cart_products"] as $cart_itm) {
                
                $product_qty = $cart_itm["product_qty"];
                $product_price = $cart_itm["product_price"];
                $product_code = $cart_itm["product_code"];
               
                $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
                echo '<tr class="'.$bg_color.'">';
                echo '<td>Qty <input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                
                echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
                echo '</tr>';
                $subtotal = ($product_price * $product_qty);
                $total = ($total + $subtotal);
              }
              echo '<td colspan="4">';
              echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
              echo '</td>';
              echo '</tbody>';
              echo '</table>';
              
              $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
              echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
              echo '</form>';
              echo '</div>';
            }
          ?>
        </div>
      </div>

      
      
</html>
// <!-- View Cart Box End --> 
<?php

  if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<h1 class="text-center my-5">Our Products</h1>';
    echo '<div class="row">';
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-sm-6 col-md-4 col-lg-3 mb-4">';
      echo '<div class="card">';
      echo '<form method="post" action="update_cart.php">';
      echo '<div class="card-img-container">';
      echo '<img src="' . $row["image_path"] . '" class="card-img-top" alt="Product Image">';
      echo '</div>';
      echo '<div class="card-body" style="height: 200px;">';
      echo '<h5 class="card-title">' . $row["pname"] . '</h5>';
      echo '<p class="card-text">' . $row["pdescription"] . '</p>';
      echo '<div class="rating">';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star checked"></span>';
      echo '<span class="fa fa-star"></span>';
      echo '<span class="fa fa-star"></span>';
      echo '</div>';
      echo '<div class="d-flex justify-content-between align-items-center">';
      echo '<div>';
      echo '<span>Quantity</span>';
      echo '<input type="text" size="2" maxlength="2" name="product_qty" value="1" />';
      echo '</div>';
      echo '<div>';
      echo '<input type="hidden" name="product_code" value="' . $row["product_code"] . '" />';
      echo '<input type="hidden" name="type" value="add" />';
      $current_url = "http" . ($_SERVER['HTTPS'] ?? '') . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
      echo '<input type="hidden" name="return_url" value="' . htmlspecialchars($current_url) . '" />';
      echo '<button type="submit" class="add_to_cart btn btn-primary add-to-cart-button">Add to Cart</button>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</form>';
      echo '</div>';
      echo '</div>';
    }
    echo '</div>';
    echo '</div>';
  } else {
    echo "No products found.";
  }
  
  //   ?>
  // </main>

<html><h1>Recommended Products</h1>
	<div id="products"></div></html>
  
  <script src="cart.js"></script>

<?php include 'footer.php'?>



          ?>