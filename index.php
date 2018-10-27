<?php

$tituloPagina = "Home - BLACKPIECE";
$pagina = "home";

include("inc/header.php");?>


<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!--Indicadores
      Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
 
  <!--Envoltório para os 
       Wrapper for slides -->
  <div class="carousel-inner" role="listbox"> 
    <div class="item active">
      <img src="img/Camera-Andoer-4k-1080p-48mp-DigitalVideo-destaque.png" id="box" class="img-rounded" alt="Câmera Endoer 4K 1080P 48MP Digital Video">
      <div class="carousel-caption">
        
      </div> 
    </div>

      <div class="item">
      <img src="img/mi-band-3-destaque.png" id="box" class="img-rounded" alt="Mi Band 3">
      <div class="carousel-caption">
      </div> 
    </div>

    <div class="item">
      <img src="img/Genuine-Leather-Solid-Crossbody-Bag-destaque.png" id="box" class="img-rounded" alt="Cross Bag Menssageira">
      <div class="carousel-caption">
      </div> 


    </div>
       <!-- Controles esquerdo e direito      
            Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Anterior/Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Próximo/Next</span>
        </a>
  </div>
</div>

<div>
<a class="twitter-timeline" title="Veja os últimos tweets da página Blackpiece no Twitter"data-lang="pt" data-width="300" data-height="300" data-dnt="true" data-theme="black" data-link-color="#2B7BB9"
  href="https://twitter.com/BlackpieceStore">
Tweets por @BlackpieceStore
</a>


<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
</div> 


         <!--
        <div ng-controller="nomesShow" >

        <ul id="gallery">
          <li ng-repeat='artista in nomes'>
            <a href={{artista.pagina}}>
              <img src={{artista.img}}>
              <p>{{artista.nome}}<p>
              <p>{{artista.data}}</p>
            </a>
          </li>
        </ul>
      </div>
    -->
<?php include("inc/footer.php");?>

    
