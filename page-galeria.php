<?php
get_header(); ?>
<!-- Center -->
<div class="under-menu description col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
    <?php
        while ( have_posts() ): the_post();
                the_content();
        endwhile;
    ?>
</div>
<!--End of Center-->
<?php get_footer(); ?>
