<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-hero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #ef4a83; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;">www.jenniferbrown.com</h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                        	<?php the_field( 'hero_modal_form_code' ); ?>
                        	
                        	<!-- FOLLOWING IS FOR BLOG INDEX PAGE ACF -->
                        	<?php //the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?> 

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP HERO BUTTONMODAL  ====-->




<section id="imb-home-top-roadmap" class="container-fluid">

	<main class="container">
		
		

	</main>
	
</section> <!-- End imb-home-top-roadmap -->	

<section id="imb-home-info-block" class="container-fluid">

	<main class="container">
		
		

	</main>	
	
</section> <!-- End imb-home-info-block -->

<section id="imb-home-testimonial" class="container-fluid">

	<main class="container">
		
		

	</main>	
	
</section> <!-- End imb-home-info-block -->
<?php
get_footer();
