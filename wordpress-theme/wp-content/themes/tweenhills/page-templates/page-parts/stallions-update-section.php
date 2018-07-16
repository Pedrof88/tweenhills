<section class="stallions-update">
        <div class="row">
            <div class="stallions-update__banner">

                <?php if (get_field('update_banner_image')) : ?>
                    <img src="<?php the_field('update_banner_image'); ?>" alt="stallions"/>
                <?php endif; ?>

            </div>
            <div class="stallions-update__title">
                <h1 class="heading-primary">
                    <?php if (get_field('update_title')) : ?>
                        <?php the_field('update_title'); ?>
                    <?php endif; ?>
                </h1>
            </div>

            <div class="stallions-update__side-text">
                <span class="text-bold">
                    <?php if (get_field('update_side_text_dark')) : ?>
                        <?php the_field('update_side_text_dark'); ?>
                    <?php endif; ?>
                </span>
                <span class="text-light">| 
                    <?php if (get_field('update_side_text_light')) : ?>
                        <?php the_field('update_side_text_light'); ?>
                    <?php endif; ?>
                </span>
            </div>

            <div class="stallions-update__box">
                <p>
                    <?php if (get_field('update_paragraph')) : ?>
                        <?php the_field('update_paragraph'); ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="stallions-update__square dark"></div>
        </div>
</section>