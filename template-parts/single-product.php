<div class="container-fluid mt-5">
  <div class="row">
    <!-- Breadcrumb Section -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Men</a></li>
        <li class="breadcrumb-item"><a href="#">Tops</a></li>
        <li class="breadcrumb-item active" aria-current="page">T-Shirts</li>
      </ol>
    </nav>
    <!-- Image Gallery Section -->
    <div class="col-lg-8">
      <!-- Thumbnail Images -->
      <div class="row">
        <div class="col-6 mb-3">
          <img src="1.avif" alt="Thumbnail 1" class="img-fluid">
        </div>
        <div class="col-6 mb-3">
          <img src="2.avif" alt="Thumbnail 2" class="img-fluid">
        </div>
        <div class="col-6 mb-3">
          <img src="3.avif" alt="Thumbnail 3" class="img-fluid">
        </div>
        <div class="col-6 mb-3">
          <img src="4.avif" alt="Thumbnail 4" class="img-fluid">
        </div>
        <div class="col-6 mb-3">
          <video class="img-fluid" autoplay muted loop>
            <source src="5.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>       
      </div>
    </div>

    <!-- Product Info Section -->
    <div class="col-lg-4">
      <!-- Product title -->
      <div class="d-flex justify-content-between align-items-center">
        <h1 class="h3 mb-0">Men's Crayon M Dot Short-Sleeve T-Shirt</h1>
        <p class="h4 text-muted mb-0">$32.00</p>
      </div>      
      
      <!-- Rating Section -->
      <div class="star-rating mb-3">
        <span class="filled">★</span>
        <span class="filled">★</span>
        <span class="filled">★</span>
        <span>★</span>
        <span>★</span>
        <span class="text-muted">(0)</span>
      </div>

      <!-- Color Section -->
      <div class="mb-3">
        <span id="selected-color">Color:</span>
        <div class="d-flex mt-1">
            <button class="btn btn-outline-dark rounded-circle me-2 color-btn" data-color="White" style="width: 25px; height: 25px; background-color: #fff;"></button>
            <button class="btn btn-outline-dark rounded-circle color-btn" data-color="Orange" style="width: 25px; height: 25px; background-color: #f39c12;"></button>
            <button class="btn btn-outline-dark rounded-circle ms-2 color-btn" data-color="Green" style="width: 25px; height: 25px; background-color: #2ecc71;"></button>
            <button class="btn btn-outline-dark rounded-circle ms-2 color-btn" data-color="Blue" style="width: 25px; height: 25px; background-color: #3498db;"></button>
        </div>
    </div>    

      <!-- Size Section -->
      <div class="mb-3">
        <span id="selected-size">Size: Select a Size</span>
        <a href="#" class="text-decoration-underline float-end fit-guide">Size & Fit Guide</a>
        <div class="mt-2">
            <button class="btn btn-outline-secondary size-button">S</button>
            <button class="btn btn-outline-secondary size-button">M</button>
            <button class="btn btn-outline-secondary size-button">L</button>
            <button class="btn btn-outline-secondary size-button">XL</button>
            <button class="btn btn-outline-secondary size-button">XXL</button>
        </div>
      </div>
    

      <!-- Fit info -->
      <div class="d-flex align-items-center mt-3 mb-3">
        <span class="me-2">FIT: TRUE TO SIZE</span>
        <button class="btn btn-outline-dark d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-242 334 126 126" width="15" height="15" class="me-2">
            <path style="fill:var(--t-logo-text-color, #fff)" d="M-220 350h83v97h-83z"></path>
            <path style="fill:var(--t-logo-bg-color, #d31245)" d="M-128 334h-102c-6.6 0-12 5.4-12 12v102c0 6.6 5.4 12 12 12h102c6.6 0 12-5.4 12-12V346c0-6.6-5.4-12-12-12zm-15.7 36.4h-25.7v69.8h-18.9v-69.8h-25.6v-15.8h70.2v15.8z"></path>
          </svg>
          <span class="me-2">What's My Size?</span>
        </button>
      </div>

      <!-- Add to Cart Button -->
      <div class="d-flex align-items-center">
        <!-- Quantity Dropdown -->
        <div class="quntity-dropdown">
            <label for="quantity" class="form-label">Quantity:</label>
            <select class="form-select-quantity" id="quantity">
                <option selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <!-- Add to Cart Button -->
        <div class="cart-button">
          <button class="btn-custom">Add to Cart</button>
        </div>
      </div>

      <!-- Payment Options -->
      <p class="paypal-text">
        Pay in 4 interest-free payments of $8.00 with 
        <span class="paypal-logo"><strong>PayPal</strong></span>
      </p>

      <hr style="border-top: 1px solid #000; width: 100%;">

      <!-- First Section -->
      <div>
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
      </div>
      <!-- Horizontal Line -->
      <hr>

      <!-- Second Section -->
      <div>
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
      </div>
      
      <!-- Horizontal Line -->
      <hr style="border-top: 2px solid #000; width: 100%;">
      <div>
        <span class="custon-two">Jordan is 6’0” tall, 185 lbs, has a 42" chest, and is wearing a size medium.</span>
      </div>

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
              This is a stylish short-sleeve t-shirt with a crayon M dot design.
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
              Available in multiple colors and sizes, perfect for casual wear.
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
              100% Cotton, machine washable.
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
      <!-- Product 1 -->
      <div class="col">
        <!-- Card -->
        <div class="card h-100 border-0">
          <!-- Wrapper for the product images -->
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/396bbd0d-7386-3c86-ba09-d130570f0af4/396bbd0d-7386-3c86-ba09-d130570f0af4.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/2b76bc87-ee3e-34be-b5e5-1735a33b11d8/2b76bc87-ee3e-34be-b5e5-1735a33b11d8.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Crayon M Dot Short-Sleeve T-Shirt</h5>
            <p class="card-text">$32.00</p>
            <div class="d-flex">
              <div class="circle bg-light border me-2"></div>
              <div class="circle bg-dark border me-2"></div>
              <div class="circle bg-warning border"></div>
            </div>
            <!-- Product ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Product 2 -->
      <div class="col">
        <div class="card h-100 border-0">
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/808422c1-0636-34d4-a7d6-553ec8211725/808422c1-0636-34d4-a7d6-553ec8211725.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/d25a491c-a29f-3d26-8ad4-e8104d979564/d25a491c-a29f-3d26-8ad4-e8104d979564.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Ice Climbing Marty Long-Sleeve T-Shirt</h5>
            <p class="card-text">$38.00</p>
            <div class="d-flex">
              <div class="circle bg-light border me-2"></div>
              <div class="circle bg-dark border me-2"></div>
              <div class="circle bg-primary border"></div>
            </div>
            <!-- Product Ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Product 3 -->
      <div class="col">
        <div class="card h-100 border-0">
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/6182ce53-93ee-383f-aef8-b8515812f000/6182ce53-93ee-383f-aef8-b8515812f000.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/d10d48ac-661d-34c6-8e2d-4e367f596a40/d10d48ac-661d-34c6-8e2d-4e367f596a40.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Ice Climbing Marty Hoody</h5>
            <p class="card-text">$65.00</p>
            <div class="d-flex">
              <div class="circle bg-light border me-2"></div>
              <div class="circle bg-dark border me-2"></div>
              <div class="circle bg-warning border"></div>
            </div>
            <!-- Product Ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- you me also like  -->
  <div class="mt-5 mb-5">
    <h2 class="text-center mb-4">You may also like</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4 mx-auto" style="max-width: 100%;">
      <!-- Product 1 -->
      <div class="col">
        <!-- Card -->
        <div class="card h-100 border-0"> <!-- Removed border -->
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/396bbd0d-7386-3c86-ba09-d130570f0af4/396bbd0d-7386-3c86-ba09-d130570f0af4.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/2b76bc87-ee3e-34be-b5e5-1735a33b11d8/2b76bc87-ee3e-34be-b5e5-1735a33b11d8.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Crayon M Dot Short-Sleeve T-Shirt</h5>
            <p class="card-text">$32.00</p>
            <div class="d-flex">
              <div class="circle bg-light me-2"></div>
              <div class="circle bg-dark me-2"></div>
              <div class="circle bg-warning"></div>
            </div>
            <!-- Product ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Product 2 -->
      <div class="col">
        <div class="card h-100 border-0"> <!-- Removed border -->
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/808422c1-0636-34d4-a7d6-553ec8211725/808422c1-0636-34d4-a7d6-553ec8211725.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/d25a491c-a29f-3d26-8ad4-e8104d979564/d25a491c-a29f-3d26-8ad4-e8104d979564.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Ice Climbing Marty Long-Sleeve T-Shirt</h5>
            <p class="card-text">$38.00</p>
            <div class="d-flex">
              <div class="circle bg-light me-2"></div>
              <div class="circle bg-dark me-2"></div>
              <div class="circle bg-primary"></div>
            </div>
            <!-- Product Ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Product 3 -->
      <div class="col">
        <div class="card h-100 border-0"> <!-- Removed border -->
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/6182ce53-93ee-383f-aef8-b8515812f000/6182ce53-93ee-383f-aef8-b8515812f000.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/d10d48ac-661d-34c6-8e2d-4e367f596a40/d10d48ac-661d-34c6-8e2d-4e367f596a40.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Ice Climbing Marty Hoody</h5>
            <p class="card-text">$65.00</p>
            <div class="d-flex">
              <div class="circle bg-light me-2"></div>
              <div class="circle bg-dark me-2"></div>
              <div class="circle bg-warning"></div>
            </div>
            <!-- Product Ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Product 4 -->
      <div class="col">
        <div class="card h-100 border-0"> <!-- Removed border -->
          <div class="image-wrapper position-relative">
            <img src="https://marmot.imgix.net/6182ce53-93ee-383f-aef8-b8515812f000/6182ce53-93ee-383f-aef8-b8515812f000.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-1" alt="Product 1">
            <img src="https://marmot.imgix.net/d10d48ac-661d-34c6-8e2d-4e367f596a40/d10d48ac-661d-34c6-8e2d-4e367f596a40.jpg?auto=format,compress&w=960&fm=avif&qlt=50" class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100" alt="Product 1 Alternate">
          </div>
          <div class="card-body">
            <h5 class="card-title">Men's Ice Climbing Marty Hoody</h5>
            <p class="card-text">$65.00</p>
            <div class="d-flex">
              <div class="circle bg-light me-2"></div>
              <div class="circle bg-dark me-2"></div>
              <div class="circle bg-warning"></div>
            </div>
            <!-- Product Ratings -->
            <div class="ratings mt-2">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>