<?php
// Template Name: Shop Page
get_header();
?>
<div class="container gor-shop my-5">
  <!-- Breadcrumb -->
  <?php custom_breadcrumb(); ?>
  <!-- Page Title -->
  <h2><?php the_title(); ?></h2>
  <p>Showing 12 of 12 results</p>

  <div class="row">
    <!-- Filter Sidebar -->
    <div class="col-lg-3 col-md-4">
      <h5>Filter</h5>

      <!-- Filter Category Dropdown -->
      <form method="GET" action="">
        <div class="accordion mb-4" id="filterAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="categoryHeading">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                Category
              </button>
            </h2>
            <div id="collapseCategory" class="accordion-collapse" aria-labelledby="categoryHeading"
              data-bs-parent="#filterAccordion">
              <div class="accordion-body">
                <div class="list-group">
                  <?php
                      $terms = get_terms('product_cat');
                      foreach ($terms as $term) {
                          $checked = isset($_GET['category_filter']) && in_array($term->slug, $_GET['category_filter']) ? 'checked' : '';
                          echo '<a href="#" class="list-group-item list-group-item-action">
                                  <input class="form-check-input" type="checkbox" name="category_filter[]" value="' . esc_attr($term->slug) . '" id="category_' . esc_attr($term->slug) . '" ' . esc_html($checked) . '>
                                  <label class="form-check-label" for="category_' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</label>
                              </a>';
                      }
                    ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Price Filter -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="priceHeading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                Price
              </button>
            </h2>
            <div id="collapsePrice" class="accordion-collapse" aria-labelledby="priceHeading"
              data-bs-parent="#filterAccordion">
              <div class="accordion-body">
                <div class="input-group d-flex  mt-2">
                  <label for="price_min" class="form-label">$ </label>
                  <input type="number" name="price_min" id="price_min" class="form-control pricing-filter" placeholder="Min"
                    value="<?php echo isset($_GET['price_min']) ? esc_attr($_GET['price_min']) : ''; ?>">
                </div>
                <div class="input-group mt-2 d-flex">
                  <label for="price_max" class="form-label">$ </label>
                  <input type="number" name="price_max" id="price_max" class="form-control pricing-filter" placeholder="Max"
                    value="<?php echo isset($_GET['price_max']) ? esc_attr($_GET['price_max']) : ''; ?>">
                </div>
              </div>
            </div>
          </div>

          <!-- Size Filter -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="sizeHeading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSize" aria-expanded="false" aria-controls="collapseSize">
                Size
              </button>
            </h2>
            <div id="collapseSize" class="accordion-collapse" aria-labelledby="sizeHeading"
              data-bs-parent="#filterAccordion">
              <div class="accordion-body">
                <ul class="list-group">
                  <?php
                    $sizes = get_terms( array(
                        'taxonomy' => 'pa_size',
                        'hide_empty' => false
                    ));
                    if ( !empty( $sizes ) && !is_wp_error( $sizes ) ) {
                      // $sizes = ['small', 'medium', 'large'];
                      foreach ($sizes as $size) {
                          echo '<li class="list-group-item list-group-item-action">
                              <input class="form-check-input" type="checkbox" name="size_filter[]" value="' . esc_attr($size->slug) . '" id="' . esc_attr($size->slug) . '" ' . (isset($_GET['size_filter']) && in_array($size->slug, $_GET['size_filter']) ? 'checked' : '') . '>
                              <label class="form-check-label" for="' . esc_attr($size->slug) . '">' . esc_html($size->name) . '</label>
                          </li>';
                      }
                    }
                    ?>
                </ul>
              </div>
            </div>
          </div>

          <!-- Color Filter -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="colorHeading">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                Color
              </button>
            </h2>
            <div id="collapseColor" class="accordion-collapse" aria-labelledby="colorHeading"
              data-bs-parent="#filterAccordion">
              <div class="accordion-body">
                <ul class="list-group">
                  <?php
                      $colors = get_terms( array(
                        'taxonomy'   => 'pa_color',  // 'pa_color' is the taxonomy for the "Color" attribute.
                        'hide_empty' => false,       // Get all terms, including unused ones.
                    ));
                
                    if ( !empty( $colors ) && !is_wp_error( $colors ) ) {
                      // $colors = ['white', 'black', 'yellow', 'red'];
                      foreach ($colors as $color) {
                          echo '<li class="list-group-item list-group-item-action">
                              <input class="form-check-input" type="checkbox" name="color_filter[]" value="' . esc_attr($color->slug) . '" id="' . esc_attr($color->slug) . '" ' . (isset($_GET['color_filter']) && in_array($color->slug, $_GET['color_filter']) ? 'checked' : '') . '>
                              <label class="form-check-label" for="' . esc_attr($color->slug) . '">' . esc_html($color->name) . '</label>
                          </li>';
                      }
                    }
                      
                    ?>
                </ul>
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <div class="form-group align-center">
            <button type="submit" class="btn btn-primary w-100 rounded-0 my-3 bg-black filter-button">Filter Products</button>
          </div>
        </div>
      </form>

    </div>

    <?php
        // Collect filter parameters from the form
        $category = isset($_GET['category_filter']) ? array_map('sanitize_text_field', $_GET['category_filter']) : '';
        $size = isset($_GET['size_filter']) ? array_map('sanitize_text_field', $_GET['size_filter']) : '';
        $color = isset($_GET['color_filter']) ? array_map('sanitize_text_field', $_GET['color_filter']) : '';
        $price_min = isset($_GET['price_min']) ? intval($_GET['price_min']) : '';
        $price_max = isset($_GET['price_max']) ? intval($_GET['price_max']) : '';

        // Build Query Arguments
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12,
            'meta_query' => array(),
            'tax_query' => array('relation' => 'AND'),
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        );

        // Add category filter
        if (!empty($category)) {
            $args['tax_query'][] = array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $category
            );
        }

        // Add size filter
        if (!empty($size)) {
            $args['meta_query'][] = array(
                'key' => '_size',
                'value' => $size,
                'compare' => 'IN'
            );
        }

        // Add color filter
        if (!empty($color)) {
            $args['meta_query'][] = array(
                'key' => '_color',
                'value' => $color,
                'compare' => 'IN'
            );
        }

        // Add price filter
        if (!empty($price_min) || !empty($price_max)) {
            if (!empty($price_min)) {
                $args['meta_query'][] = array(
                    'key' => '_price',
                    'value' => $price_min,
                    'type' => 'NUMERIC',
                    'compare' => '>='
                );
            }
            if (!empty($price_max)) {
                $args['meta_query'][] = array(
                    'key' => '_price',
                    'value' => $price_max,
                    'type' => 'NUMERIC',
                    'compare' => '<='
                );
            }
        }
        ?>

    <!-- Product Cards -->
    <div class="col-lg-9 col-md-8">
      <div class="d-flex justify-content-between mb-4">
        <h6>Sort by:</h6>
        <select class="form-select w-auto">
          <option selected>Featured</option>
          <option value="1">Price: Low to High</option>
          <option value="2">Price: High to Low</option>
        </select>
      </div>
      <?php
            // Execute query
            $loop = new WP_Query($args);
            ?>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if($loop->have_posts()) :?>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
        <!-- Product 1 -->
        <div class="col">
          <div class="card h-100">
            <!-- Wrapper for the product images -->
            <div class="image-wrapper position-relative">
              <?php if (has_post_thumbnail()) : ?>
              <a href="<?php echo get_the_permalink( get_the_ID() )?>"><img
                  src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top product-img-1"
                  alt="<?php the_title(); ?>"></a>
              <!-- Product hover image in gallery -->
              <?php 
                        global $product;
                        $attachment_ids = $product->get_gallery_attachment_ids();
                        // Check if the product has a gallery image
                        if($attachment_ids && is_array($attachment_ids)) {
                           $gallery = wp_get_attachment_image_src($attachment_ids[0], 'medium');
                           ?>
              <a href="<?php echo get_the_permalink( get_the_ID() )?>"><img src="<?php echo $gallery[0];?>"
                  class="card-img-top product-img-2 position-absolute top-0 start-0 w-100 h-100"
                  alt="<?php the_title(); ?>"></a>
              <?php
                        }
                       ?>
              <?php endif; ?>
            </div>
            <div class="card-body">
              <!-- Product title -->
              <h5 class="card-title"><a href="<?php echo get_the_permalink( get_the_ID() )?>"><?php the_title(); ?></a>
              </h5>
              <!-- Product price -->
              <p class="card-price"><a
                  href="<?php echo get_the_permalink( get_the_ID() )?>"><?php echo $product->get_price_html();?></a></p>
              <!-- Product Attributes color -->
              <?php
                // Call the function to display color attributes for the current product
                display_color_attributes( get_the_ID() );
              ?>


              <!-- Product ratings -->
              <?php display_product_rating( get_the_ID() );?>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php else: ?>
        <p>No products found</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>

      <!-- Pagination -->
      <div class="pagination mt-4 justify-content-center">
        <?php
        $pagination_args = array(
            'total' => $loop->max_num_pages,
            'current' => max(1, get_query_var('paged')), // Current page
            'prev_text' => __('&laquo; Prev'),
            'next_text' => __('Next &raquo;'),
            'type' => 'array', // Return an array of paginated links
        );

        $pages = paginate_links($pagination_args);

        if (is_array($pages)) {
            echo '<nav aria-label="Page navigation">';
            echo '<ul class="pagination justify-content-center">'; // Bootstrap pagination class

            foreach ($pages as $page) {
                // Check if the current page is active
                if (strpos($page, 'current') !== false) {
                    echo '<li class="page-item active">';
                } else {
                    echo '<li class="page-item">';
                }

                // Add the pagination link inside the <li> element
                echo str_replace('page-numbers', 'page-link', $page); // Replace default WordPress pagination class with Bootstrap's 'page-link' class
                echo '</li>';
            }

            echo '</ul>';
            echo '</nav>';
        }
        ?>
      </div>

    </div>
  </div>
</div>
<?php
get_footer();