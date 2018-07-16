    <footer class="footer">
        <div class="footer__left">
            <div class="footer__logo">
                <a href="/">
                    <object type="image/svg+xml" data="/tweenhills/wp-content/themes/tweenhills/img/tweenhills.svg" class="header__logo">
                        Tweenhills logo
                    </object>
                </a>
            </div>
            <nav class="footer__navigation">
                 <?php footer_nav(); ?>
            </nav>

            <div class="footer__copyright">
                <p>
                    <?php if (get_field('copyright_text')) : ?>
                        <?php the_field('copyright_text'); ?>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="footer__right">

            <?php if (get_field('footer_sponsor_logo_one')) : ?>
                <img src="<?php the_field('footer_sponsor_logo_one'); ?>" alt="sponsor one"/>
            <?php endif; ?>

            <?php if (get_field('footer_sponsor_logo_two')) : ?>
                <img src="<?php the_field('footer_sponsor_logo_two'); ?>" alt="sponsor two"/>
            <?php endif; ?>

            <?php if (get_field('footer_sponsor_logo_three')) : ?>
                <img src="<?php the_field('footer_sponsor_logo_three'); ?>" alt="sponsor three"/>
            <?php endif; ?>

        </div>
    </footer>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
