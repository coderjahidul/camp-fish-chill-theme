<?php
// Custom function
function custom_breadcrumb() {
    global $post;
    // Do not show breadcrumbs on the homepage
    if (!is_front_page()) {
        echo '<nav aria-label="breadcrumb">';
        echo '<ol class="breadcrumb">';
        echo '<li class="breadcrumb-item"><a href="' . home_url() . '">Home</a></li>'; // Home link
        
        if (is_category() || is_single()) {
            $category = get_the_category();
            if (!empty($category)) {
                echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . $category[0]->cat_name . '</a></li>';
            }
            if (is_single()) {
                echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
            }
        } elseif (is_page()) {
            if ($post->post_parent) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    echo '<li class="breadcrumb-item"><a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }
            }
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_title() . '</li>';
        } elseif (is_tag()) {
            echo '<li class="breadcrumb-item active" aria-current="page">Tag: ' . single_tag_title('', false) . '</li>';
        } elseif (is_day()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('F jS, Y') . '</li>';
        } elseif (is_month()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('F, Y') . '</li>';
        } elseif (is_year()) {
            echo '<li class="breadcrumb-item active" aria-current="page">' . get_the_time('Y') . '</li>';
        } elseif (is_author()) {
            echo '<li class="breadcrumb-item active" aria-current="page">Author: ' . get_the_author() . '</li>';
        } elseif (is_search()) {
            echo '<li class="breadcrumb-item active" aria-current="page">Search results for: ' . get_search_query() . '</li>';
        }

        echo '</ol>';
        echo '</nav>';
    }
}

function display_color_attributes( $product_id ) {

    // Get the color terms for the product (taxonomy 'pa_color')
    $colors = wc_get_product_terms( $product_id, 'pa_color', array( 'fields' => 'all' ) );
    
    if ( !empty( $colors ) ) {
        echo '<div class="d-flex">';

        foreach ( $colors as $term ) {
            $color_term_id = $term->term_id;
            $color_name = $term->name;

            // Fetch the color from term meta (assuming it's a single value)
            $product_color = get_term_meta( $color_term_id, 'product_attribute_color', true );

            if ( !empty( $product_color ) ) {
                // Ensure the color value is valid and lowercase
                $color = strtolower( $product_color );
                
                // Output the color circle with the color-btn class
                echo '<div class="circle border me-2 color-btn" data-color="' . esc_attr( $color_name ) . '" style="background-color: ' . esc_attr( $color ) . ';"></div>';
            }
        }

        echo '</div>';
    } else {
        // No color terms found
    }
}


function display_product_rating( $product_id ) {
    ?>
    <div class="ratings mt-2">
    <?php
    // Get the product object
    $product = wc_get_product( $product_id );

    // Get the average rating (float)
    $average = $product->get_average_rating();

    // Round to the nearest half-star if you want half-stars to be displayed
    $rating = round( $average * 2 ) / 2;

    // Loop to display filled and empty stars
    for ( $i = 1; $i <= 5; $i++ ) {
        if ( $rating >= $i ) {
            echo '<i class="fas fa-star"></i>';  // Full star
        } elseif ( $rating >= $i - 0.5 ) {
            echo '<i class="fas fa-star-half-alt"></i>';  // Half star
        } else {
            echo '<i class="far fa-star"></i>';  // Empty star
        }
    }

    // Get the total number of reviews
    $review_count = $product->get_rating_count();
    ?>
    <span class="rating-count">(<?php echo $review_count; ?>)</span>
</div>
<?php
}

// display product attributes size 
function display_product_size( $product_id ) {

    // Get the size terms for the product (taxonomy 'pa_size')
    $sizes = wc_get_product_terms( $product_id, 'pa_size', array( 'fields' => 'all' ) );
    
    if ( !empty( $sizes ) ) {
        foreach ( $sizes as $term ) {
            // Output the size with the size-button class
            echo '<button class="btn btn-outline-secondary my-1 mx-1" data-size="' . esc_attr( $term->name ) . '">' . esc_html( $term->name ) . '</button>';
        }
    }
}


function add_product_to_cart_via_ajax() {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $product_color = $_POST['color'];
    $product_size = $_POST['size'];

    // Ensure product ID is valid and quantity is not empty
    if ($product_id && $quantity) {
        // Add product to cart
        $added = WC()->cart->add_to_cart($product_id, $quantity, $product_color, $product_size);

        if ($added) {
            wp_send_json_success('Product added to cart');
        } else {
            wp_send_json_error('Failed to add product to cart');
        }
    } else {
        wp_send_json_error('Invalid product or quantity');
    }

    wp_die();
}
add_action('wp_ajax_add_product_to_cart', 'add_product_to_cart_via_ajax');
add_action('wp_ajax_nopriv_add_product_to_cart', 'add_product_to_cart_via_ajax');



