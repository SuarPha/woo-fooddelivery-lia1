<section class="google-map">
<div class="map-container">
  <div class="map-content">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32562.088814278326!2d17.973036048632814!3d59.33077420000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d62204bf4dd%3A0xbaa27707189d0d44!2sCorella%20Kungsholmen!5e0!3m2!1ssv!2sse!4v1671104197578!5m2!1ssv!2sse" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <?php
// echo do_shortcode('[mappress mapid="1"]');
?>
  </div>
</div>
  </section>

<footer id='footer'>
    <div class="image-container">
    <a href="<?php bloginfo('url'); ?>">
    <img src="<?php bloginfo(
        'template_directory'
    ); ?>/images/footer-img.jpg" alt="Logo" width="450" height="450" />
</a>
    </div>
    <div class="logo-container">
  
        <a href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo(
                'template_directory'
            ); ?>/images/logo.png" alt="Logo" width="70" height="75" />
         </a>
         <h2>
            ENJOY, <br>
            GREAT MOMENT, <br>
            WITH OUR TASTY PIZZA!
         </h2>
   
    </div>
    <div class="footer-item">
        <h2>Location:</h2>
        <span>Storgatan 123 #888 <br> Stockholm 118 88</span>
    </div>
    <div class="footer-item">
        <h2>House:</h2>
        <span>Monday-Friday 9:00-24:00 <br> Saturday-Sunday 11:00-22:00</span>
    </div>
    <div class="footer">
  <p><?php bloginfo('name'); ?> &copy; <?php echo date(
     'Y'
 ); ?> | All rights reserved.</p>
</div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>