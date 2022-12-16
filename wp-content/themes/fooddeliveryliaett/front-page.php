<?php

get_header(); ?>

<div id='hero'class="hero-main">
  <div class="hero-container" >
      <div class="hero-text">
          <h1>ENJOY, <br>
            SAVE TIME, <br>
            & TASTY
          </h1>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          </p>
      <a class="button" href="http://localhost:8888/shop/">Order Now!</a>
      </div>
  </div>
</div>
<!---- Offer Section 1---> 

      <div class="container-offer">
        <div class="row">
        <div class="column">
            <div>
            <img src="<?php bloginfo(
                'template_directory'
            ); ?>/images/pizza-offer2.png" alt="" />
            </div>
          </div>
          <div class="column">
            <div class="text-content">
              <h1>LITTLE ROM PIZZA</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Proin fringilla justo quis orci hendrerit tincidunt. <br> Morbi vel libero mauris. Pellentesque nec pharetra orci. In non erat tincidunt, accumsan metus et, iaculis risus.</p>
              <h3>129 Kr</h3>
              <a class="button" href="http://localhost:8888/shop/">Order Now!</a>
            </div>
          </div>
        </div>
      </div>

<!---- Offer Section 1 End *********---> 

<!---- Products Section---> 
<section class= "products">
    <div class="container-products">
 
          <div class="products-item">
              <h1 class="text-title">Pizza Selected</h1>
              <p class="text-content">We offer a number of high quality<br> tasty pizza!</p>
           
            </div>
          
          <div class="products-item">
           
               <?php echo do_shortcode('[products columns=3 limted=3]'); ?>
               </div>
          </div>
 
   </div>

</div>
</section>
<!---- Products Section END ********---> 

<!---- Offer Section 2---> 

<div class="container-offer">
        <div class="row2">
        <div class="column">
            <div>
            <img src="<?php bloginfo(
                'template_directory'
            ); ?>/images/pizza-offer2.png" alt="" />
            </div>
          </div>
          <div class="column">
            <div class="text-content">
              <h1>LITTLE ROM PIZZA</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Proin fringilla justo quis orci hendrerit tincidunt. <br> Morbi vel libero mauris. Pellentesque nec pharetra orci. In non erat tincidunt, accumsan metus et, iaculis risus.</p>
              <h3> 129 Kr</h3>
              <a class="button" href="http://localhost:8888/shop/">Order Now!</a>
            </div>
          </div>
        </div>
      </div>

<div class="container-icons">
  <div class="col-icons">
  <img src="<?php bloginfo(
      'template_directory'
  ); ?>/images/option1.png" alt="option" width="200" height="200"/>
            <h2>Fresh</h2>
  </div>
  <div class="col-icons">
  <img src="<?php bloginfo(
      'template_directory'
  ); ?>/images/option2.png" alt="option" width="200" height="200"/>
            <h2>Vegie option</h2>
  </div>
  <div class="col-icons">
  <img src="<?php bloginfo(
      'template_directory'
  ); ?>/images/option3.png" alt="option" width="200" height="200"/>
            <h2>Make with love</h2>
  </div>
</div>

<div class="best-seller">
<h1>BEST SELLER</h1>
<div class="item-container">

<div class="item-content">
            <h2>BEYOND BBQ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <span>129 Kr</span>
            <a class="button" href="http://localhost:8888/shop/">Order Now!</a>
    </div>    
    
  <div class="item-content">
    <img src="<?php bloginfo(
        'template_directory'
    ); ?>/images/pizza-png.png" alt="best seller" width="880" height="auto" />
    </div>
   
    </div>
</div>

<?php get_footer(); ?>
