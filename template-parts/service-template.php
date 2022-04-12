<?php 
/** 
* Template Name: Services Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content services-page">
    <section class="hero-banner-section">
        <div class="hero-banner"
            style="background-image: url('http://dev.lk-metrology.com/wp-content/uploads/2022/01/hero-img-2.png');">
            <div class="container">
                <div class="content-wrap">
                    <h2>Expert services for total peace of mind.</h2>
                    <p>Global technical support and metrology consulting service</p>
                    <div class="button-wrapper">
                        <div class="btn getInTouch-btn hvr-grow">
                            <a href="<?php the_sub_field('button_hero'); ?>">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services-desktop">
                <div class="d-flex align-items-start">
                    <?php if( have_rows('services_s') ): ?>
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <?php $i=0; while( have_rows('services_s') ): the_row();?>
                                <?php $string = sanitize_title( get_sub_field('service_name') ); ?>
                                <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>" id="v-pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#<?php echo $string ?>"
                                    aria-controls="<?php echo $string ?>"><?php the_sub_field('service_name'); ?></button>
                                <?php $i++; endwhile; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-8 col-xl9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <?php $i=0; while ( have_rows('services_s') ) : the_row(); ?>
                                <?php $string = sanitize_title( get_sub_field('service_name') ); ?>
                                <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                    id="<?php echo $string; ?>">
                                    <div class="service-content-body">
                                        <h4><?php the_sub_field('service_name'); ?></h4>
                                        <img class="service-img" src="<?php the_sub_field('service_image'); ?>"
                                            alt="<?php the_sub_field('service_name'); ?>">
                                        <?php the_sub_field('service_description'); ?>

                                        <div class="button-row">
                                            <?php if( get_sub_field('get_in_touch_s') ): ?>
                                            <div class="button-wrapper">
                                                <div class="btn getInTouch-btn hvr-grow">
                                                    <a href="<?php the_sub_field('get_in_touch_s'); ?>">Get in touch</a>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_sub_field('pdf_download') ): ?>
                                            <div class="button-wrapper">
                                                <div class="btn pdf-btn hvr-grow">
                                                    <a href="<?php the_sub_field('pdf_download'); ?>" download>PDF DOWNLOAD</a>
                                                </div>
                                            </div>
                                            <?php endif; ?>

                                            <?php if( get_sub_field('more_info_button') ): ?>
                                            <div class="button-wrapper">
                                                <div class="btn moreinfo-btn hvr-grow">
                                                    <a href="<?php the_sub_field('more_info_button'); ?>">MORE INFO</a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="services-mobile">
                <div class="accordion" id="accordionExample">
                    <?php if( have_rows('services_s') ): ?>
                    <?php $i=0; while( have_rows('services_s') ): the_row();?>
                    <?php $string = sanitize_title( get_sub_field('service_name') ); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> " type="button"
                                data-bs-toggle="collapse" data-bs-target="#<?php echo $string ?>">
                                <?php the_sub_field('service_name'); ?>
                            </button>
                        </h2>
                        <div id="<?php echo $string ?>"
                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="service-content-body">
                                    <img class="service-img img-fluid" src="<?php the_sub_field('service_image'); ?>"
                                        alt="">
                                    <?php the_sub_field('service_description'); ?>

                                    <div class="button-row">
                                        <?php if( get_sub_field('get_in_touch_s') ): ?>
                                        <div class="button-wrapper">
                                            <div class="btn getInTouch-btn hvr-grow">
                                                <a href="<?php the_sub_field('get_in_touch_s'); ?>">Get in touch</a>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if( get_sub_field('pdf_download') ): ?>
                                        <div class="button-wrapper">
                                            <div class="btn pdf-btn hvr-grow">
                                                <a href="<?php the_sub_field('pdf_download'); ?>">PDF DOWNLOAD</a>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                        <?php if( get_sub_field('more_info_button') ): ?>
                                        <div class="button-wrapper">
                                            <div class="btn moreinfo-btn hvr-grow">
                                                <a href="<?php the_sub_field('more_info_button'); ?>">MORE INFO</a>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-wrapper">
            <div class="container-fluid contact-area">
                <h3 class="title"><?php the_field('heading_s'); ?></h3>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="contact-content">
                            <div class="details">
                                <p><?php the_field('description_s'); ?></p>
                            </div>
                            <img class="img-fluid hvr-glow" src="<?php the_field('image_s'); ?>"
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