<?php define( 'WP_USE_THEMES', false ); get_header(); ?>


<div class="container-fluid col-md-12 col-lg-12 col-sm-12 col-xs-12  under-menu news " >
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name'=> 'Post',
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    
      ?>
      <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 " style="height:150px;">
    <div class="col-md-12 col-xs-12 col-sm-12">
    <h3><a href="<?php the_permalink() ?>"rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    </div>
    <div class="col-md-12 col-xs-12">
        <h6><?php
        echo " Data dodania: ";
        the_date(d.".".m.".".Y);
        ?></h6>
    </div>
    </div>
    <?php 
  }
}
?>
    

</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 " style="margin-top: 125px; position:absolute; z-index:-9999; " >
    <img style="opacity:0.26" src="<?php bloginfo('template_directory')?>/img/logo-bastion.png" />
</div>
<?php get_footer() ?>


