


<?php include 'header.php' ?>

    <main>
        <div class="container">
            <h1 class="text-center my-5">Our Products</h1>
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <form method="post" action="cart.php?action=add&id=<?php echo $product_id; ?>">
                        <input type="number" name="quantity" value="1" min="1" hidden>
                        <input type="submit" value="Add to Cart">
                    </form>

                      <button id="add-to-cart" class="btn btn-primary" data-product-id="1">Add to Cart</button>

                      <!-- <a href="#" class="btn btn-primary" id="women1" onclick="addToCart(<?php //echo $product_id; ?>); updateCartCount();">Add to Cart</a> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row-------------------------------->  
        
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women5.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women6.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 

        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 
        
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women5.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women6.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 

        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 
        
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women5.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women6.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 

        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women3.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!---------------------------End of Row--------------------------------> 
        
        <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women5.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women6.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women2.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                  <img src="img/women1.jpg" class="card-img-top" alt="Product Image">
                  <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product description goes here.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

    </main>
   

<?php include 'footer.php'?>
