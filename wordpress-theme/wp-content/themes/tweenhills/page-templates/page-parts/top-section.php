<section class="banner">
        <div class="row">
            <div class="banner__welcome">
                <span class="text-bold">
                    <?php if (get_field('side_text_dark')) : ?>
                        <?php the_field('side_text_dark'); ?>
                     <?php endif; ?>
                </span>
                <span class="text-light">| 
                    <?php if (get_field('side_text_light')) : ?>
                        <?php the_field('side_text_light'); ?>
                    <?php endif; ?>
                 </span>
            </div>
            <div class="banner__image col-85 right">

                <?php if (get_field('banner_image')) : ?>
                    <img src="<?php the_field('banner_image'); ?>" />
                <?php endif; ?>

                <div class="banner__call-to-action">

                    <?php if (get_field('call_to_action_title')) : ?>
                        <h2><?php the_field('call_to_action_title'); ?></h2>
                     <?php endif; ?>

                    <?php 
                    $link = get_field('call_to_action_link');
                    if( $link ): ?>
                        <a href="<?php echo $link; ?>" class="banner__call-to-action-link">
                    <?php endif; ?>
                        <span class="text-light">Find out</span>
                        <span class="text-bold">more</span>
                    </a>
                </div>
            </div>
            <div class="banner__intro-text">
                <h1 class="heading-primary"><?php the_title() ?></h1>
                <div class="banner__text-box">
                    <?php if (get_field('sub_heading_text')) : ?>
                        <p><?php the_field('sub_heading_text'); ?></p>
                     <?php endif; ?>
                </div>
            </div>
            <div class="banner__square"></div>
        </div>
    </section>
    <section class="sponsors">
        <div class="row">
            <div class="sponsors__logos right">
                <?php if (get_field('sponsor_one')) : ?>
                    <img src="<?php the_field('sponsor_one'); ?>"  alt="pearl bloodstock" class="sponsors__img" />
                <?php endif; ?>

                <?php if (get_field('sponsor_two')) : ?>
                    <img src="<?php the_field('sponsor_two'); ?>"  alt="qatar racing" class="sponsors__img" />
                <?php endif; ?>

                <?php if (get_field('sponsor_three')) : ?>
                    <img src="<?php the_field('sponsor_three'); ?>"  alt="Royal Ascot / QIPCO"/>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="intro-content">
        <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p class="intro-content__paragraph col-50"> <?php the_content(); ?></p>
                <?php
                endwhile; ?>
                <?php endif; ?>
        </div>
    </section>