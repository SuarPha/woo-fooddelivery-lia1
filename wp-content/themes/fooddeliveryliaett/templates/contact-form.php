<?php
/* Template Name: Contact Template */

get_header();

/* Start the Loop */
while (have_posts()) :
    the_post();
    ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
			<?php
    the_title('<h1 class="entry-title">', '</h1>');
    ?>
		</header>
    <!-- .entry-header -->
    <div class="entry-content">
 <?php
    the_content('<p>', '</p>');
    ?>
    <link rel="stylesheet" type="text/css"
            href="/woo-fooddelivery-lia1/wp-content/themes/fooddeliveryliaett/css/main.css">
        <form name="contactForm" id="contactForm" method="post"
            onsubmit="return formValidation()"  action="">
            <div class="row">
                <div class="label">Name:</div>
                <input type="text" id="name" name="name">
            </div>
            <div class="row">
                <div class="label">Email:</div>
                <input type="text" id="email" name="email">
            </div>
            <div class="row">
                <div class="label">Message:</div>
                <textarea id="message" name="message" rows="5"></textarea>
            </div>
            <div class="row">
                <input type="submit" value="Submit"> <span id="status"></span>
            </div>
        </form>
    </div>
</article>
<!-- #post-<?php the_ID(); ?> -->
<?php
endwhile
; // End of the loop.

get_footer();
?>