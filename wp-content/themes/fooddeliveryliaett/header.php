<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

    <?php if (is_page('contact')) { ?>
	<script type="text/javascript" src="<?php bloginfo(
     'template_directory'
 ); ?>/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo(
     'template_directory'
 ); ?>/js/verif.js"></script>
<?php } ?>
</head>
<body>
    
<header id="header">
    
    <div class="container">

  
    <div class="col-icons">
    <i class="fas fa-solid fa-phone-volume"></i>
    <span>085 888 8886</span>
    </div>
   

    <div class="col">

    <?php wp_nav_menu([
        'theme_location' => 'top-right-menu',
        'menu_class' => 'top-bar',
    ]); ?>
  
        <a class="logo" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo(
                'template_directory'
            ); ?>/images/logo.png" alt="Logo" width="65" height="75" />
        </a>
    
    <?php wp_nav_menu([
        'theme_location' => 'top-left-menu',
        'menu_class' => 'top-bar',
    ]); ?>
   </div>
  
  <div class="col-icons">
    <a class="basketicon" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e(
    'View your shopping cart'
); ?>"> <i class="fa fa-shopping-cart"></i> <?php echo sprintf(
    _n('%d item', '%d items', WC()->cart->get_cart_contents_count()),
    WC()->cart->get_cart_contents_count()
); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
   
    </div>
    </div>
    </div>
</header>
