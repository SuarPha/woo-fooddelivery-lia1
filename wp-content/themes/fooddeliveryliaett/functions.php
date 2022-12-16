<?php

//Load Style Css
function load_css()
{
    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.main.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        [],
        false,
        'all'
    );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.main.js',
        'jquery',
        false,
        true
    );
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

// Add Font Awesome in Wordpress Theme
add_action('wp_enqueue_scripts', 'font_awesome_script');
function font_awesome_script()
{
    wp_enqueue_script(
        'fontawesome-script',
        'https://kit.fontawesome.com/8bc6718e1e.js',
        [],
        null,
        true
    );
}
// Add Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('woocommerce');
add_theme_support('custom-logo');

// Menus
register_nav_menus([
    'top-right-menu' => ' Right Menu Location',
    'top-left-menu' => 'Left Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
]);

// Custom Img Sizes
add_image_size('post_image', 1100, 550, false);
add_image_size('small_blog', 300, 200, true);

//Register a new post type for testimonials
function create_posttype()
{
    register_post_type(
        'testimonials',
        //CPT Options
        [
            'labels' => [
                'name' => __('Testimonials'),
                'singular_name' => __('Testimonial'),
            ],
            'public' => true,
            'has_archive' => false,
            'rewrite' => ['slug' => 'testimonials'],
        ]
    );
}
//Hooking up our function to theme setup
add_action('init', 'create_posttype');

//ACF Custom Blocks *************** Registering a block with template //
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // Register a testimonial block.
        acf_register_block_type([
            'name' => 'testimonial',
            'title' => __('Testimonial'),
            'description' => __('A custom testimonial block.'),
            'render_template' =>
                'template-parts/blocks/testimonial/testimonial.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => ['testimonial', 'quote'],
        ]);
    }
}
/// add A Div around each WordPress post
add_filter('image_send_to_editor', 'wp_image_wrap_init', 10, 8);
function wp_image_wrap_init(
    $html,
    $id,
    $caption,
    $title,
    $align,
    $url,
    $size,
    $alt
) {
    return '<div id="wp-image-wrap-' .
        $id .
        '" class="wp-image-wrap">' .
        $html .
        '</div>';
}
//Woocommerce shortcode

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 4; //4 products per row
    }
}

function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

// Add for showing Woocommerce Cart on header menu

add_filter(
    'woocommerce_add_to_cart_fragments',
    'woocommerce_header_add_to_cart_fragment'
);

function woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();
    ?>
<a class="cart-customlocation" href="<?php echo esc_url(
    wc_get_cart_url()
); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
<?php
$fragments['a.cart-customlocation'] = ob_get_clean();
return $fragments;
}

// it hooks the wp_ajax action
add_action('wp_ajax_nopriv_process_contact_form', 'process_contact_form');

function process_contact_form()
{
    $to = 'Recipient Email Address';
    $subject = $_POST['subject'];
    $headers = 'Testing';
    $message = $_POST['message'];
    $attachments = '';
    $sent = wp_mail($to, $subject, $message, $headers, $attachments);
    if (!$sent) {
        echo "<span class='error'>Problem in sending mail.</span>";
    } else {
        echo "<span class='success'>Hi, thank you for the message.</span>";
    }
    wp_die();
}

// To change add to cart text on single product page
add_filter(
    'woocommerce_product_single_add_to_cart_text',
    'woocommerce_custom_single_add_to_cart_text'
);
function woocommerce_custom_single_add_to_cart_text()
{
    return __('Order Now', 'woocommerce');
}

// To change add to cart text on product archives(Collection) page
add_filter(
    'woocommerce_product_add_to_cart_text',
    'woocommerce_custom_product_add_to_cart_text'
);
function woocommerce_custom_product_add_to_cart_text()
{
    return __('Oder Now', 'woocommerce');
}

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
    function loop_columns()
    {
        return 4; //4 products per row
    }
}

