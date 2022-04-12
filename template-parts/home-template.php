<?php 
/** 
* Template Name: Home Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content home-page">

    <section class="hero-section">
        <div class="hero-wrapper" style="background-image: url('<?php the_field('slider_background'); ?>');">
            <?php if( have_rows('slider_hero') ): ?>
            <div class="owl-carousel owl-theme hero-slider">
                <?php while( have_rows('slider_hero') ) : the_row(); ?>
                <div class="item">
                    <div class="hero-image-wrapper"
                        style="background-image: url('<?php the_sub_field('slider_image_hero'); ?>');">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="hero-content-wrap">
                                <div class="hero-content">
                                    <h2><?php the_sub_field('main_caption_hero'); ?></h2>
                                    <h5><?php the_sub_field('sub_caption_hero'); ?></h5>
                                    <div class="button-wrapper">
                                        <div class="btn getInTouch-btn hvr-grow">
                                            <a href="<?php the_sub_field('button_hero'); ?>">Get in touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="product" class="product-section">
        <div class="container-fluid">
            <div class="product-wrapper">
                <h3 class="title"><?php the_field('heading_prod'); ?></h3>
                <div class="product-slider">
                    <?php if( have_rows('products_and_details') ): ?>
                    <div class="slider slider-nav">
                        <?php while( have_rows('products_and_details') ) : the_row(); ?>
                        <div>
                            <img class="product-icon" src="<?php the_sub_field('product_icon'); ?>"
                                alt="<?php the_sub_field('product_icon_name'); ?>">
                            <div class="product-name">
                                <p><?php the_sub_field('product_icon_name'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>

                    <?php if( have_rows('products_and_details') ): ?>
                    <div class="slider slider-for">
                        <?php while( have_rows('products_and_details') ) : the_row(); ?>
                        <div>
                            <img class="arrow" src="<?= get_template_directory_uri(); ?>/assets/images/arrowfill.svg"
                                alt="<?php bloginfo( 'name' ); ?>">
                            <div class="product-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-lg-6">
                                            <div class="left-wrap">
                                                <h3 class="title"><?php the_sub_field('product_name'); ?></h3>
                                                <p class="sub-heding"><?php the_sub_field('product_caption'); ?></p>
                                                <div class="description">
                                                    <?php the_sub_field('product_description'); ?>
                                                </div>
                                                <div class="button-wrapper">
                                                    <div class="btn getInTouch-btn hvr-grow">
                                                        <a href="<?php the_sub_field('button_pro'); ?>">Get in touch</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-6">
                                            <div class="right-wrap"
                                                style="background-image:url('<?php the_sub_field('product_image'); ?>')">
                                            </div>
                                            <div class="guarantee-img">
                                                <img class="img-fluid"
                                                    src="<?php the_sub_field('guarantee_certificate'); ?>"
                                                    alt="<?php bloginfo( 'name' ); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="about-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 video-col order-2 order-md-1">
                        <div class="video-container"
                            style="background-image: url('<?php the_field('video_background_about'); ?>')">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn video-btn hvr-pulse-grow" data-bs-toggle="modal"
                                data-src="<?php the_field('video_about'); ?>" data-bs-target="#videoModal">
                                <i class="ri-play-fill"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn modal-close" data-bs-dismiss="modal"
                                                aria-label="Close"><i class="ri-close-circle-line"></i></span>
                                            </button>

                                            <div class="iframe-container">
                                                <iframe class="embed-responsive-item" width="560" height="315" src=""
                                                    id="video" title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen allowscriptaccess="always"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 order-1 order-md-2">
                        <div class="content-wrapper">
                            <h3 class="title"><?php the_field('heading_about'); ?></h3>
                            <div class="description">
                                <?php the_field('description_about'); ?>
                            </div>
                            <div class="button-wrapper">
                                <div class="btn getInTouch-btn hvr-grow">
                                    <a href="<?php the_field('button_about'); ?>">Get in touch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="altera" class="altera-section">
        <div class="heading-wrapper">
            <div class="heading">
                <h3 class="title"><?php the_field('heading_altera'); ?></h3>
                <div class="short-desc">
                    <p><?php the_field('short_description_altera'); ?></p>
                </div>
            </div>
        </div>
        <div class="altera-product">
            <div class="altera-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="product-wrapper product-1">
                                <div class="product-img">
                                    <img class="product-glow-1" src="<?php the_field('product_image_a1'); ?>"
                                        alt="<?php the_field('product_name_a1'); ?>">
                                </div>
                                <div class="product-name">
                                    <img src="<?php the_field('product_name_icon_a1'); ?>"
                                        alt="<?php the_field('product_name_a1'); ?>">
                                </div>
                                <div class="product-description">
                                    <p><?php the_field('product_name_a1'); ?></p>
                                    <p><?php the_field('product_description_a1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="product-wrapper product-1">
                                <div class="product-img">
                                    <img class="product-glow-1" src="<?php the_field('product_image_a2'); ?>"
                                        alt="<?php the_field('product_name_a2'); ?>">
                                </div>
                                <div class="product-name">
                                    <img src="<?php the_field('product_name_icon_a2'); ?>"
                                        alt="<?php the_field('product_name_a2'); ?>">
                                </div>
                                <div class="product-description">
                                    <p><?php the_field('product_name_a2'); ?></p>
                                    <p><?php the_field('product_description_a2'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4">
                            <div class="product-wrapper product-1">
                                <div class="product-img">
                                    <img class="product-glow-1" src="<?php the_field('product_image_a3'); ?>"
                                        alt="<?php the_field('product_name_a3'); ?>">
                                </div>
                                <div class="product-name">
                                    <img src="<?php the_field('product_name_icon_a3'); ?>"
                                        alt="<?php the_field('product_name_a3'); ?>">
                                </div>
                                <div class="product-description">
                                    <p><?php the_field('product_name_a3'); ?></p>
                                    <p><?php the_field('product_description_a3'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="story-section">
        <div class="story-wrapper">
            <div class="container-fluid">
                <h3 class="title">What's Happening</h3>
            </div>
            <div class="story-container">
                <div class="container-fluid">

                    <?php 
        		$content = array( 'post_type' => 'story','posts_per_page' => 1,  'order'=> 'DESC', 'orderby' => 'publish_date',  'paged' => $paged, );
        		$temp = $wp_query;
        		$wp_query = null;
        		$wp_query = new WP_Query( $content );
        		$wp_query->query( $content );
    		    ?>
                    <?php  while ($wp_query->have_posts()) :$wp_query->the_post(); ?>
                    <div class="row top-story">
                        <div class="col-12 col-md-12 col-lg-6 img-box">
                            <a href="<?php the_permalink($post->ID); ?>">
                                <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' ); ?>
                                <div class="story-thumbnail "
                                    style="background-image:url('<?php echo $featured_image[0]; ?>');">
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6">
                            <a href="<?php the_permalink($post->ID); ?>">
                                <div class="content-wrap">
                                    <h6>Top Story</h6>
                                    <h3 class="title"><?php the_title(); ?></h3>
                                    <div class="short-detail">
                                        <p><?php echo wp_trim_words( get_the_content() , 30 ); ?></p>
                                    </div>
                                    <a class="read-more hvr-grow" href="<?php the_permalink($post->ID); ?>">Read
                                        More</a>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endwhile;wp_reset_query(); ?>


                    <?php 
        		        $contents = array( 'post_type' => 'story','posts_per_page' => 6,  'order'=> 'ASC', 'orderby' => 'publish_date', 'offset' => 1,   'paged' => $paged, );
        		        $temp = $wp_query1;
        		        $wp_query1 = null;
        		        $wp_query1 = new WP_Query( $contents );
        		        $wp_query1 ->query( $contents );
    		        ?>


                    <div class="row g-4 other-story">
                        <?php  while ($wp_query1->have_posts()) :$wp_query1->the_post(); ?>
                        <div class="col-sm-6 col-md-6 col-lg-4 story-box">
                            <a href="<?php the_permalink($post->ID); ?>">
                                <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' ); ?>
                                <div class="img-wrap">
                                    <div class="story-image "
                                        style="background-image:url('<?php echo $featured_image[0]; ?>');">
                                    </div>
                                </div>
                                <div class="content-wrap">
                                    <h6><?php the_title(); ?></h6>
                                    <div class="short-detail">
                                        <p><?php echo wp_trim_words( get_the_content() , 30 ); ?></p>
                                    </div>
                                    <a class="read-more hvr-grow" href="<?php the_permalink($post->ID); ?>">Read
                                        More</a>
                                </div>
                            </a>
                        </div>
                        <?php endwhile;wp_reset_query(); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-wrapper">
            <div class="container-fluid contact-area">
                <h3 class="title"><?php the_field('heading_contact'); ?></h3>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="contact-content">
                            <div class="details">
                                <p><?php the_field('description_heading'); ?></p>
                            </div>
                            <img class="img-fluid hvr-glow" src="<?php the_field('image_contact'); ?>"
                                alt="<?php bloginfo( 'name' ); ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="contact-form">
                            <div class="container-fluid">
                                <?php echo do_shortcode('[contact-form-7 id="134" title="Contact form"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();