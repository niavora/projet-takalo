<div class="container">

<div class="row">

  <div class="col-lg-4">
  
    <h5 class="my-4"><?php echo $email; ?></h5>
    
    <div class="list-group">
    <?php if(isset($listeCategorie))
      {
        foreach ($listeCategorie as $lsc) { ?>
          <a href="#" class="list-group-item"><?php echo $lsc['categorie']?></a>
      <?php }
      }?>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="row">
      <?php foreach ($listeObjetaechanger as $objet) {?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/img/'.$objet['photo'])?>" alt="" width=50px; height=250px;></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#"><?php echo $objet['nomObjet']?></a>
            </h4>
            <h5><?php echo $objet['prixEstim']?></h5>
            <p class="card-text"><?php echo $objet['descri']?></p>
          </div>
          <div class="card-footer">
            <button>demande d'échange</button>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>