<?php $this->setLayout('layout', ['title' => 'Pokiut Api v1.0 - Accueil', 'keywords' => 'PokIutApi, accueil, pokemon,api,iut,aix en provence,aix', 'description' => '']); ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="<?= \PoireauFramework\Helper\Url::base()?>">Pokiut Api</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="#about"> About </a> </li>
          <li> <a href="#Pokedex"> Pokedex </a> </li>
        </ul>
      </div><!--/.navbar-collapse -->
    </div>
</nav>
<div class="jumbotron">
    <div class="container">
        <h1>Pokiut Api <small>La première API pokémon en français !</small></h1>
    </div>
</div>
<div class="container marketing">
    <div class="row">
        <div id="about"><h2>À propos</h2></div>
        <hr>
    </div>
</div>
<footer>
    <p class="text-center"><a href="#">Haut de page </a> ©  Pokiut Api 2016</p>
</footer>
