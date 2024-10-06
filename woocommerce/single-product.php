<?php
get_header('shop');

// Main WooCommerce product loop
if (have_posts()) {
  while (have_posts()) {
    the_post();
?>
    <div class="container mt-5">
      <div class="row">
        <!-- Breadcrumb Section -->
        <?php custom_breadcrumb(); ?>
        <!-- Image Gallery Section -->
        <div class="col-lg-8">
          <!-- Product Images -->
          <div class="row">
            <?php
            global $product;

            // Single product featured image
            $featured_image = get_post_thumbnail_id($product->get_id());
            if ($featured_image) : ?>
              <div class="col-6 mb-3">
                <img src="<?php echo wp_get_attachment_url($featured_image); ?>" alt="<?php the_title(); ?>" class="img-fluid">
              </div>
            <?php endif; ?>

            <?php
            // Get product gallery images
            $gallery_image_ids = $product->get_gallery_image_ids();
            if ($gallery_image_ids) :
              foreach ($gallery_image_ids as $index => $image_id) :
                if ($index >= 3) break; // Limit to 3 gallery images, modify as needed
            ?>
                <div class="col-6 mb-3">
                  <img src="<?php echo wp_get_attachment_url($image_id); ?>" alt="Thumbnail <?php echo $index + 2; ?>" class="img-fluid">
                </div>
            <?php endforeach;
            endif;
            ?>
          </div>
        </div>


        <!-- Product Info Section -->
        <div class="col-lg-4">
          <!-- Product title -->
          <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0"><?php the_title(); ?></h1>
            <!-- product price -->
            <p class="h4 text-muted mb-0"><?php echo $product->get_price_html(); ?></p>
          </div>

          <!-- Rating Section -->
          <!-- <div class="star-rating mb-3"> -->
          <?php display_product_rating(get_the_ID()); ?>
          <!-- </div> -->

          <!-- Color Section -->
          <div class="mb-3">
            <span id="selected-color">Color: Select a Color</span>
            <?php
            // Call the function to display color attributes for the current product
            display_color_attributes(get_the_ID());
            ?>
          </div>

          <!-- Size Section -->
          <div class="mb-3">
            <span id="selected-size">Size: Select a Size</span>
            <!-- <a href="#" class="text-decoration-underline float-end fit-guide">Size & Fit Guide</a> -->
            <!-- Product Sizes -->
            <div class="mt-2">
              <?php display_product_size(get_the_ID()); ?>
            </div>
          </div>


          <!-- Fit info -->
          <!-- <div class="d-flex align-items-center mt-3 mb-3">
            <span class="me-2">FIT: TRUE TO SIZE</span>
            <button class="btn btn-outline-dark d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="-242 334 126 126" width="15" height="15" class="me-2">
                <path style="fill:var(--t-logo-text-color, #fff)" d="M-220 350h83v97h-83z"></path>
                <path style="fill:var(--t-logo-bg-color, #d31245)" d="M-128 334h-102c-6.6 0-12 5.4-12 12v102c0 6.6 5.4 12 12 12h102c6.6 0 12-5.4 12-12V346c0-6.6-5.4-12-12-12zm-15.7 36.4h-25.7v69.8h-18.9v-69.8h-25.6v-15.8h70.2v15.8z"></path>
              </svg>
              <span class="me-2">What's My Size?</span>
            </button>
          </div> -->

          <!-- Add to Cart Button -->
<div class="d-flex align-items-center">
    <!-- Quantity Dropdown -->
    <div class="quantity-dropdown">
        <label for="quantity" class="form-label">Quantity:</label>
        <select class="form-select-quantity" id="quantity">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>
    <!-- Add to Cart Button -->
    <div class="cart-button">
        <button class="btn-custom" id="canAddtoCartButton" data-product-id="<?php echo get_the_ID(); ?>">Add to Cart</button> <!-- Add Product ID here -->
    </div>
</div>


           <!-- Payment Options -->
          <!-- <p class="paypal-text">
            Pay in 4 interest-free payments of $8.00 with
            <span class="paypal-logo"><strong>PayPal</strong></span>
          </p> -->

          <!-- <hr style="border-top: 1px solid #000; width: 100%;"> -->

          <!-- First Section -->
          <!-- <div>
            <div class="d-flex justify-content-between mb-3">
              <div class="">
                <i class="fa-solid fa-box custom-icon"></i>
                <span class="custom-text">Reward Members: Free Shipping on orders<br>$49+ and free returns</span>
              </div>
              <a href="#" class="text-decoration-none custom-text">Sign in</a>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
              <div>
                <i class="fa-solid fa-box custom-icon"></i>
                <span class="custom-text">Free Shipping on orders $99 + free returns*</span>
              </div>
              <a href="#" class="text-decoration-none">Details</a>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
              <div>
                <i class="fa-solid fa-shield custom-icon"></i>
                <span class="custom-text">Backed by Lifetime Warranty</span>
              </div>
            </div>
          </div> -->
          <!-- Horizontal Line -->
          <!-- <hr> -->

          <!-- Second Section -->
          <!-- <div>
            <p class="section-title">Get More Out of Your Gear & Your Cart.</p>
            <p>
              <i class="fa-solid fa-envelope custom-icon"></i>
              <span class="custom-text">Sign up for emails and get 15% off your first order</span>
            </p>
            <p>
              <i class="fa-solid fa-comment custom-icon"></i>
              <span class="custom-text">Opt-in to SMS and Save 15% by texting ANDPLAY to <strong>627668</strong></span>
            </p>
            <p class="fst-italic font-offers">(offers are for first purchase only)</p>
          </div> -->

          <!-- Horizontal Line -->
          <!-- <hr style="border-top: 2px solid #000; width: 100%;">
          <div>
            <span class="custon-two">Jordan is 6’0” tall, 185 lbs, has a 42" chest, and is wearing a size medium.</span>
          </div> -->
 
          <!-- Horizontal Line -->
          <hr>

          <!-- Description Section -->
          <div class="accordion" id="productAccordion">
            <div class="accordion-item accordion-new">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Description
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#productAccordion">
                <div class="accordion-body">
                  <!-- Product Description -->
                  <?php
                    global $product; // Access the global product object
                    $description = $product->get_description(); // Get the product description

                    // Check if the description is not empty and display it
                    if ( ! empty( $description ) ) {
                        echo wp_kses_post( $description ); // Output the description safely
                    } else {
                        echo '<p>No description available for this product.</p>'; // Fallback text if no description exists
                    }
                    ?>
                </div>
              </div>
            </div>
            <div class="accordion-item accordion-new">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Features
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#productAccordion">
                <div class="accordion-body">
                  <?php
                    global $product;
                    
                    // Retrieve the product features
                    $features = get_post_meta( $product->get_id(), 'features', true ); // Adjust the meta key as needed
                    
                    // Check if features exist and output them
                    if ( ! empty( $features ) ) {
                        // Assuming features are stored as a string or array; you may need to format it
                        if ( is_array( $features ) ) {
                            echo '<ul>';
                            foreach ( $features as $feature ) {
                                echo '<li>' . esc_html( $feature ) . '</li>'; // Escaping for safety
                            }
                            echo '</ul>';
                        } else {
                            echo wp_kses_post( wpautop( $features ) ); // Output as HTML if it's a single string
                        }
                    } else {
                        echo '<p>No features available for this product.</p>';
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="accordion-item accordion-new">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Specifications
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#productAccordion">
                <div class="accordion-body">
                  <!-- Product Specifications -->
                  <?php
                    global $product;
                    
                    // Retrieve the product specifications
                    $specifications = get_post_meta( $product->get_id(), 'Specifications', true ); // Adjust the meta key as needed
                    
                    // Check if specifications exist and output them
                    if ( ! empty( $specifications ) ) {
                        
                        // Assuming specifications are stored as a string or array; you may need to format it
                        if ( is_array( $specifications ) ) {
                            foreach ( $specifications as $specification ) {
                                echo esc_html( $specification ); // Escaping for safety
                            }
                        } else {
                            echo esc_html( $specifications ); // Output as a list item if it's a single string
                        }
                    } else {
                        echo '<p>No specifications available for this product.</p>'; // Fallback text
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Products -->
      <div class="mt-5 mb-5">
        <h2 class="text-center mb-4">Similar Items</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto" style="max-width: 70%;">
          <?php
          $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 3,
          );

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
              $the_query->the_post();
          ?>
              <div class="col">
                <div class="card h-100">
                  <!-- Wrapper for the product images -->
                  <div class="image-wrapper position-relative">
                    <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><img
                          src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top product-img-1"
                          alt="<?php the_title(); ?>"></a>
                      <!-- Product hover image in gallery -->
                      <?php
                      global $product;
                      $attachment_ids = $product->get_gallery_attachment_ids();
                      // Check if the product has a gallery image
                      if ($attachment_ids && is_array($attachment_ids)) {
                        $gallery = wp_get_attachment_image_src($attachment_ids[0], 'medium');
                      ?>
                        <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><img src="<?php echo $gallery[0]; ?>"
                            class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100"
                            alt="<?php the_title(); ?>"></a>
                      <?php
                      }
                      ?>
                    <?php endif; ?>
                  </div>
                  <div class="card-body">
                    <!-- Product title -->
                    <h5 class="card-title"><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a>
                    </h5>
                    <!-- Product price -->
                    <p class="card-price"><a
                        href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php echo $product->get_price_html(); ?></a></p>
                    <!-- Product Attributes color -->
                    <?php
                    // Call the function to display color attributes for the current product
                    display_color_attributes(get_the_ID());
                    ?>
                    <!-- Product ratings -->
                    <?php display_product_rating(get_the_ID()); ?>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>

      <!-- you me also like  -->
      <div class="mt-5 mb-5">
        <h2 class="text-center mb-4">You may also like</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 mx-auto" style="max-width: 100%;">
        <?php
          $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'orderby' => 'rand',
          );

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
              $the_query->the_post();
          ?>
              <div class="col">
                <div class="card h-100">
                  <!-- Wrapper for the product images -->
                  <div class="image-wrapper position-relative">
                    <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><img
                          src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top product-img-1"
                          alt="<?php the_title(); ?>"></a>
                      <!-- Product hover image in gallery -->
                      <?php
                      global $product;
                      $attachment_ids = $product->get_gallery_attachment_ids();
                      // Check if the product has a gallery image
                      if ($attachment_ids && is_array($attachment_ids)) {
                        $gallery = wp_get_attachment_image_src($attachment_ids[0], 'medium');
                      ?>
                        <a href="<?php echo get_the_permalink(get_the_ID()) ?>"><img src="<?php echo $gallery[0]; ?>"
                            class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100"
                            alt="<?php the_title(); ?>"></a>
                      <?php
                      }
                      ?>
                    <?php endif; ?>
                  </div>
                  <div class="card-body">
                    <!-- Product title -->
                    <h5 class="card-title"><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a>
                    </h5>
                    <!-- Product price -->
                    <p class="card-price"><a
                        href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php echo $product->get_price_html(); ?></a></p>
                    <!-- Product Attributes color -->
                    <?php
                    // Call the function to display color attributes for the current product
                    display_color_attributes(get_the_ID());
                    ?>
                    <!-- Product ratings -->
                    <?php display_product_rating(get_the_ID()); ?>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
      <script>
          // Select all color buttons
          const colorButtons = document.querySelectorAll('.color-btn');

          // Add click event listener to each button
          colorButtons.forEach(button => {
              button.addEventListener('click', function() {
                  // Get the color name from the data attribute
                  const colorName = this.getAttribute('data-color');
                  // Update the span text with the selected color
                  document.getElementById('selected-color').textContent = 'Color: ' + colorName;
              });
          });


          // Select all size buttons with the 'btn-outline-secondary' class
          const sizeButtons = document.querySelectorAll('.btn-outline-secondary');

          // Add click event listener to each button
          sizeButtons.forEach(button => {
              button.addEventListener('click', function() {
                  // Get the size from the button text
                  const size = this.textContent;
                  // Update the span text with the selected size
                  document.getElementById('selected-size').textContent = 'Size: ' + size;

                  // Optionally, remove active class from all buttons and add it to the selected one
                  sizeButtons.forEach(btn => btn.classList.remove('active'));
                  this.classList.add('active');
              });
          });


      </script>
          <script>
            jQuery(document).ready(function($) {
                $('#canAddtoCartButton').on('click', function(e) {
                    e.preventDefault();

                    let productID = $(this).data('product-id');  // Get the product ID from data attribute
                    let quantity = $('#quantity').val();  // Get the selected quantity
                    let productColor = $(this).data('color');  // Get the selected color
                    let productSize = $(this).data('size');  // Get the selected size
                    console.log(productID, quantity, productColor, productSize);

                    $.ajax({
                        type: 'POST',
                        url: woocommerce_params.ajax_url,  // WooCommerce AJAX URL
                        data: {
                            action: 'add_product_to_cart',  // Custom action for adding to cart
                            product_id: productID,
                            quantity: quantity,
                            color: productColor,
                            size: productSize
                        },
                        success: function(response) {
                            if (response.success) {
                                location.reload();
                            } else {
                                alert('Failed to add product to cart');
                            }
                        }
                    });
                });
            });

          </script>
    </div>
<?php
  }
}
get_footer('shop');
?>