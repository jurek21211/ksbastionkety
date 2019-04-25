<?php define( 'WP_USE_THEMES', false ); get_header(); ?>


<div class="container-fluid col-md-12 col-lg-12 col-sm-12 col-xs-12  under-menu news " >
    <div style="text-align: center; margin-bottom: 50px;">        
        <h1>Zarchiwizowane artykuły:</h1>
        <br/>
    </div>
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name'=> 'Archiwum',
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    
      ?>
      <div class="col-lg-4 col-md-4 col-xs-4 " style="height:100px;">
    <div class="col-md-12 col-xs-12">
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
<?php get_footer() ?>


