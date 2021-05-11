<?php wp_footer();?>

        <footer id="site-footer" class="wrapper">
            <?php get_template_part('template-parts/site/site-logo'); ?>
            <?php get_template_part('template-parts/footer/widgits'); ?>
            <div id="footer-menus">
                <?php get_template_part('template-parts/footer/footer-links'); ?>
                <?php get_template_part('template-parts/footer/social-links'); ?>
            </div>              
        </footer>
    </body>
</html>