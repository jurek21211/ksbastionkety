<?php get_header(); ?>

<div class="img">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <!--<li data-target="#myCarousel" data-slide-to="3"></li>-->
     
    </ol>

    <!-- Wrapper for slides -->
	<!--recommended image width is 3000px and height 1000px
	All images have to have same dimensions-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a class="photo-link" href="<?= home_url() ?>/akcja-naborowa/"><img  src="<?php bloginfo('template_directory')?>/img/naborowa.jpg" alt=""></a>
		<div class="carousel-caption"><a class="photo-link" href="<?= home_url() ?>/akcja-naborowa/"><h3 class="slider-title">AKCJA NABOROWA</h3></a></div>
      </div>

      <div class="item">
        <a class="photo-link" href="<?= home_url() ?>/oferta-dla-mlodziezy/"><img src="<?php bloginfo('template_directory')?>/img/oferta-dla-mlodziezy.jpg" alt=""></a>
		<div class="carousel-caption"><a class="photo-link" href="<?= home_url() ?>/oferta-dla-mlodziezy/"> <h3 class="slider-title">OFERTA DLA MŁODZIEŻY</h3></a></div>
      </div>

      <div class="item">
          <a class="photo-link" href="<?= home_url () ?>/strzelectwo-sportowe/"><img src="<?php bloginfo('template_directory') ?>/img/strzelectwo.png" alt=""></a>
		<div class="carousel-caption"><a class="photo-link" href="<?= home_url () ?>/strzelectwo-sportowe/"><h3 class="slider-title">STZELECTWO SPORTOWE</h3></a></div>
      </div>
      
      <!--<div class="item">
        <a class="photo-link" href="#"><img src="<?php bloginfo('template_directory')?>/img/karabiny.jpg" alt=""></a>
        <div class="carousel-caption"><a class="photo-link" href="#"><h3 class="slider-title">STRZELECTWO DYNAMICZNO-PRAKTYCZNE</h3></a></div>
      </div>-->
      
       </div>
  </div>
</div>

<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bar"></div>
<!-- Description -->

<div class="description col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top:50px; font-size:20px !important">
  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
    <img class="img-responsive" src="<?php bloginfo('template_directory')?>/img/biale1.png" alt="" />
</div>
  <p>
   Założony przez kilku pasjonatów sportu strzeleckiego z dniem 19.02.2014r. Klub Strzelecki LOK Bastion Kęty rozpoczął oficjalnie działania na terenie powiatu Oświęcimskiego. Pragniemy rozpowszechnić sport strzelecki w naszym powiecie i reprezentować go w różnej rangi zawodach na terenie kraju szczególnie w kategoriach młodzików,
    juniorów młodszych oraz juniorów zarówno pod egidą LOK oraz również  jako członkowie Polskiego Związku Strzelectwa Sportowego. Szkolenie młodzieży oraz rozpowszechnianie sportu strzeleckiego jest dla nas priorytetem.
Główna siedziba klubu to Kęty, jednak również w porozumieniu z Zarządem Powiatowym nasi instruktorzy będą prowadzić zajęcia na strzelnicy w siedzibie LOK Oświęcim. Zajęcia będą prowadzone przez instruktorów z uprawnieniami LOKu oraz Ministerstwa Sportu. 
    </p>

</div>
<!--End of Description-->

<div>

</div>
<!-- Modal 

<div style="text-align:center" id="eventy" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PUCHAR BASTIONU 2016</h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').modal('show');
    });
</script>
<!-- End of Modal -->
<?php get_footer() ?>
