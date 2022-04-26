<?php 
/** 
* Template Name: Product Page
*
* @package base_theme
**/ 
get_header();
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="page-content product-page">
    <section class="hero-banner-section">
        <div class="hero-banner" style="background-image: url('<?php the_field('hero_image_p'); ?>');">
            <div class="container">
                <div class="content-wrap">
                    <h2><?php the_field('hero_caption_p'); ?></h2>
                    <p><?php the_field('hero_sub_caption_p'); ?></p>
                    <div class="button-wrapper">
                        <div class="btn getInTouch-btn hvr-grow">
                            <a href="<?php the_field('hero_button_p'); ?>">Get in touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-fammiles">
        <div class="product-fammily-desktop">
            <div class="tab-menu">
                <div class="container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="product-fam-1-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-1" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_1'); ?>" alt="<?php the_field('name_1'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_1'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-fam-2-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-2" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_2'); ?>" alt="<?php the_field('name_2'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_2'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-fam-3-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-3" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_3'); ?>" alt="<?php the_field('name_3'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_3'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-fam-4-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-4" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_4'); ?>" alt="<?php the_field('name_4'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_4'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-fam-5-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-5" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_5'); ?>" alt="<?php the_field('name_5'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_5'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="product-fam-6-tab" data-bs-toggle="tab"
                                data-bs-target="#product-fam-6" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">
                                <div class="product-icon">
                                    <img src="<?php the_field('icon_6'); ?>" alt="<?php the_field('name_6'); ?>">
                                </div>
                                <p class="product-family-name"><?php the_field('name_6'); ?></p>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="product-fam-1" role="tabpanel"
                        aria-labelledby="product-fam-1-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_1'); ?></h4>
                                        <div><?php the_field('description_1'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_1') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_1') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_1') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_1'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_1') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_1') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_1'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_1'); ?>"
                                                                alt="<?php the_sub_field('product_name_1'); ?>">
                                                            <?php the_sub_field('product_description_1'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_1') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_1'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_1') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_1'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_1') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_1'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_1'); ?></h4>
                                    <?php if( have_rows('accessories_1') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_1') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_1'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_1'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_1'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-fam-2" role="tabpanel" aria-labelledby="product-fam-2-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_2'); ?></h4>
                                        <div><?php the_field('description_2'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_2') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_2') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_2') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_2'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_2') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_2') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_2'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_2'); ?>"
                                                                alt="<?php the_sub_field('product_name_2'); ?>">
                                                            <?php the_sub_field('product_description_2'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_2') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_2'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_2') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_2'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_2') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_2'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_2'); ?></h4>
                                    <?php if( have_rows('accessories_2') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_2') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_2'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_2'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_2'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-fam-3" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_3'); ?></h4>
                                        <div><?php the_field('description_3'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_3') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_3') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_3') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_3'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_3') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_3') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_3'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_3'); ?>"
                                                                alt="<?php the_sub_field('product_name_3'); ?>">
                                                            <?php the_sub_field('product_description_3'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_3') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_3'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_3') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_3'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_3') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_3'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_3'); ?></h4>
                                    <?php if( have_rows('accessories_3') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_3') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_3'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_3'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_3'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-fam-4" role="tabpanel" aria-labelledby="home-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_4'); ?></h4>
                                        <div><?php the_field('description_4'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_4') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_4') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_4') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_4'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_4') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_4') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_4'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_4'); ?>"
                                                                alt="<?php the_sub_field('product_name_4'); ?>">
                                                            <?php the_sub_field('product_description_4'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_4') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_4'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_4') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_4'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_4') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_4'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_4'); ?></h4>
                                    <?php if( have_rows('accessories_4') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_4') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_4'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_4'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_4'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-fam-5" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_5'); ?></h4>
                                        <div><?php the_field('description_5'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_5') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_5') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_5') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_5'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_5') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_5') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_5'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_5'); ?>"
                                                                alt="<?php the_sub_field('product_name_5'); ?>">
                                                            <?php the_sub_field('product_description_5'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_5') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_5'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_5') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_5'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_5') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_5'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_5'); ?></h4>
                                    <?php if( have_rows('accessories_5') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_5') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_5'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_5'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_5'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-fam-6" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="product-section">
                            <div class="product-details">
                                <div class="container">
                                    <div class="details-wrap">
                                        <h4><?php the_field('heading_6'); ?></h4>
                                        <div><?php the_field('description_6'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desktop">
                                <div class="container">
                                    <div class="d-flex align-items-start">
                                        <?php if( have_rows('products_6') ): ?>
                                        <div class="row">
                                            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab"
                                                    role="tablist" aria-orientation="vertical">
                                                    <?php $i=0; while( have_rows('products_6') ): the_row();?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_6') ); ?>
                                                    <button class="nav-link <?php if ($i==0) { ?>active <?php } ?>"
                                                        id="v-pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#<?php echo $string ?>"
                                                        aria-controls="<?php echo $string ?>"><?php the_sub_field('product_name_6'); ?></button>
                                                    <?php $i++; endwhile; ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7 col-lg-8 col-xl9">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <?php $i=0; while ( have_rows('products_6') ) : the_row(); ?>
                                                    <?php $string = sanitize_title( get_sub_field('product_name_6') ); ?>
                                                    <div class="tab-pane fade <?php if ($i==0) { ?>show active<?php } ?>"
                                                        id="<?php echo $string; ?>">
                                                        <div class="service-content-body">
                                                            <h4><?php the_sub_field('product_name_6'); ?></h4>
                                                            <img class="service-img"
                                                                src="<?php the_sub_field('product_image_6'); ?>"
                                                                alt="<?php the_sub_field('product_name_6'); ?>">
                                                            <?php the_sub_field('product_description_6'); ?>

                                                            <div class="button-row">
                                                                <?php if( get_sub_field('get_in_touch_p_6') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn getInTouch-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('get_in_touch_p_6'); ?>">Get
                                                                            in touch</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('pdf_download_p_6') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn pdf-btn hvr-grow">
                                                                        <a href="<?php the_sub_field('pdf_download_p_6'); ?>"
                                                                            download>PDF DOWNLOAD</a>
                                                                    </div>
                                                                </div>
                                                                <?php endif; ?>

                                                                <?php if( get_sub_field('more_info_button_p_6') ): ?>
                                                                <div class="button-wrapper">
                                                                    <div class="btn moreinfo-btn hvr-grow">
                                                                        <a
                                                                            href="<?php the_sub_field('more_info_button_p_6'); ?>">MORE
                                                                            INFO</a>
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
                            </div>
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_6'); ?></h4>
                                    <?php if( have_rows('accessories_6') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_6') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_6'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_6'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_6'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-fammily-mobile">
            <div class="container">
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-1" aria-expanded="false" aria-controls="product-fam-1">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_1'); ?>" alt="<?php the_field('name_1'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_1'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-1">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_1'); ?></h4>
                                    <div><?php the_field('description_1'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_1') ): ?>
                                    <?php $i=0; while( have_rows('products_1') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_1') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_1'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_1'); ?>" alt="">
                                                    <?php the_sub_field('product_description_1'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_1') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_1'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_1') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_1'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_1') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_1'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_1'); ?></h4>
                                    <?php if( have_rows('accessories_1') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_1') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_1'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_1'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_1'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-2" aria-expanded="false" aria-controls="product-fam-2">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_2'); ?>" alt="<?php the_field('name_2'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_2'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-2">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_2'); ?></h4>
                                    <div><?php the_field('description_2'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_2') ): ?>
                                    <?php $i=0; while( have_rows('products_2') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_2') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_2'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_2'); ?>" alt="">
                                                    <?php the_sub_field('product_description_2'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_2') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_2'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_2') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_2'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_2') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_2'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_2'); ?></h4>
                                    <?php if( have_rows('accessories_2') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_2') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_2'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_2'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_2'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-3" aria-expanded="false" aria-controls="product-fam-3">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_3'); ?>" alt="<?php the_field('name_3'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_3'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-3">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_3'); ?></h4>
                                    <div><?php the_field('description_3'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_3') ): ?>
                                    <?php $i=0; while( have_rows('products_3') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_3') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_3'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_3'); ?>" alt="">
                                                    <?php the_sub_field('product_description_3'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_3') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_3'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_3') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_3'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_3') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_3'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_3'); ?></h4>
                                    <?php if( have_rows('accessories_3') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_3') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_3'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_3'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_3'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-4" aria-expanded="false" aria-controls="product-fam-4">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_4'); ?>" alt="<?php the_field('name_4'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_4'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-4">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_4'); ?></h4>
                                    <div><?php the_field('description_4'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_4') ): ?>
                                    <?php $i=0; while( have_rows('products_4') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_4') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_4'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_4'); ?>" alt="">
                                                    <?php the_sub_field('product_description_4'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_4') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_4'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_4') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_4'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_4') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_4'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_4'); ?></h4>
                                    <?php if( have_rows('accessories_4') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_4') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_4'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_4'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_4'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-5" aria-expanded="false" aria-controls="product-fam-5">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_5'); ?>" alt="<?php the_field('name_5'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_5'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-5">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_5'); ?></h4>
                                    <div><?php the_field('description_5'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_5') ): ?>
                                    <?php $i=0; while( have_rows('products_5') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_5') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_5'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_5'); ?>" alt="">
                                                    <?php the_sub_field('product_description_5'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_5') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_5'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_5') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_5'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_5') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_5'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_5'); ?></h4>
                                    <?php if( have_rows('accessories_5') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_5') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_5'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_5'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_5'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-fammily">
                    <button class="btn product-btn" type="button" data-bs-toggle="collapse"
                        data-bs-target="#product-fam-6" aria-expanded="false" aria-controls="product-fam-6">
                        <div class="product-icon">
                            <img src="<?php the_field('icon_6'); ?>" alt="<?php the_field('name_6'); ?>">
                        </div>
                        <p class="product-family-name"><?php the_field('name_6'); ?></p>
                    </button>
                    <div class="collapse" id="product-fam-6">
                        <div class="card card-body">
                            <div class="product-details">
                                <div class="details-wrap">
                                    <h4><?php the_field('heading_6'); ?></h4>
                                    <div><?php the_field('description_6'); ?></div>
                                </div>
                            </div>
                            <div class="product-mobile">
                                <div class="accordion" id="accordionExample">
                                    <?php if( have_rows('products_6') ): ?>
                                    <?php $i=0; while( have_rows('products_6') ): the_row();?>
                                    <?php $string = sanitize_title( get_sub_field('product_name_6') ); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button <?php if ($i==0) { ?>collapsed <?php } ?> "
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#<?php echo $string ?>">
                                                <?php the_sub_field('product_name_6'); ?>
                                            </button>
                                        </h2>
                                        <div id="<?php echo $string ?>"
                                            class="accordion-collapse collapse <?php if ($i==0) { ?>show <?php } ?>"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="service-content-body">
                                                    <img class="service-img img-fluid"
                                                        src="<?php the_sub_field('product_image_6'); ?>" alt="">
                                                    <?php the_sub_field('product_description_6'); ?>

                                                    <div class="button-row">
                                                        <?php if( get_sub_field('get_in_touch_p_6') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn getInTouch-btn hvr-grow">
                                                                <a href="<?php the_sub_field('get_in_touch_p_6'); ?>">Get
                                                                    in touch</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('pdf_download_p_6') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn pdf-btn hvr-grow">
                                                                <a href="<?php the_sub_field('pdf_download_p_6'); ?>">PDF
                                                                    DOWNLOAD</a>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>

                                                        <?php if( get_sub_field('more_info_button_p_6') ): ?>
                                                        <div class="button-wrapper">
                                                            <div class="btn moreinfo-btn hvr-grow">
                                                                <a
                                                                    href="<?php the_sub_field('more_info_button_p_6'); ?>">MORE
                                                                    INFO</a>
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
                            <div class="accessories-section">
                                <div class="container">
                                    <h4><?php the_field('accessories_title_6'); ?></h4>
                                    <?php if( have_rows('accessories_6') ): ?>
                                    <div class="owl-carousel owl-theme accessories-slider">
                                        <?php while( have_rows('accessories_6') ): the_row();?>
                                        <div class="item">
                                            <div class="item-wrap">
                                                <div class="accessory-img">
                                                    <img src="<?php the_sub_field('accessory_image_6'); ?>"
                                                        alt="<?php the_sub_field('accessory_name_6'); ?>">
                                                </div>
                                                <p><?php the_sub_field('accessory_name_6'); ?></p>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact-section">
        <div class="contact-wrapper">
            <div class="container-fluid contact-area">
                <h3 class="title"><?php the_field('heading_p'); ?></h3>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="contact-content">
                            <div class="details">
                                <p><?php the_field('description_p'); ?></p>
                            </div>
                            <img class="img-fluid hvr-glow" src="<?php the_field('image_p'); ?>"
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