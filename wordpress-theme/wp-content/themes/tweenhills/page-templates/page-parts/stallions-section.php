<section class="stallions">
        <div class="row stallions">
            <h1 class="heading-primary">
                <?php if (get_field('stallions_title')) : ?>
                    <?php the_field('stallions_title'); ?>
                <?php endif; ?>
            </h1>

            <div class="stallions__side-text">
                <span class="text-bold">
                    <?php if (get_field('stallions_side_text_dark')) : ?>
                        <?php the_field('stallions_side_text_dark'); ?>
                    <?php endif; ?>
                </span>
                <span class="text-light">| 
                    <?php if (get_field('stallions_side_text_light')) : ?>
                        <?php the_field('stallions_side_text_light'); ?>
                    <?php endif; ?>
                </span>
            </div>

            <div class="row stallions__box">
                <div class="card card--one">

                    <?php if (get_field('stallion_box_image_one')) : ?>
                        <img src="<?php the_field('stallion_box_image_one'); ?>" alt="stallion 1" class="card__image" />
                    <?php endif; ?>

                    <h2>
                        <?php if (get_field('stallion_box_title_one')) : ?>
                            <?php the_field('stallion_box_title_one'); ?>
                        <?php endif; ?>
                    </h2>
                    <p>
                        <?php if (get_field('stallion_box_paragraph_one')) : ?>
                            <?php the_field('stallion_box_paragraph_one'); ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="card card--two">

                    <?php if (get_field('stallion_box_image_two')) : ?>
                        <img src="<?php the_field('stallion_box_image_two'); ?>" alt="stallion 2" class="card__image" />
                    <?php endif; ?>

                    <h2>
                        <?php if (get_field('stallion_box_title_two')) : ?>
                            <?php the_field('stallion_box_title_two'); ?>
                        <?php endif; ?>
                    </h2>
                    <p>
                        <?php if (get_field('stallion_box_paragraph_two')) : ?>
                            <?php the_field('stallion_box_paragraph_two'); ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="card card--three">
                    
                    <?php if (get_field('stallion_box_image_two')) : ?>
                        <img src="<?php the_field('stallion_box_image_two'); ?>" alt="stallion 2" class="card__image" />
                    <?php endif; ?>

                    <h2>
                        <?php if (get_field('stallion_box_title_three')) : ?>
                            <?php the_field('stallion_box_title_three'); ?>
                        <?php endif; ?>
                    </h2>
                    <p>
                        <?php if (get_field('stallion_box_paragraph_three')) : ?>
                            <?php the_field('stallion_box_paragraph_three'); ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>