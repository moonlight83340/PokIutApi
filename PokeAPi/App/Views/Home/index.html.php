<?php $this->setLayout('layout', ['title' => 'Pokiut Api v1.0 - Accueil', 'keywords' => 'PokIutApi, accueil, pokemon,api,iut,aix en provence,aix', 'description' => '']); ?>
<nav class="navbar navbar-inverse">
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
          <li> <a href="#example"> Exemple</a> </li>
          <li> <a href="#pokedex"> Pokedex </a> </li>
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
        <p>
            Pokiut Api est la première API pokémon en français, 
            cette API permet d'avoir des informations sur les pokemons renvoyé en JSON afin d'être utilisé par d'autre site web,
            comme des pokedex en ligne ou bien des jeux en utilisant les stats et sprites des pokémons.<br/>
            Elle est développé par moi même, étudiant en DUT Informatique à l'iut d'aix en provence.<br/>
            Elle est aussi actuellement utilisé sur le <a href="#pokedex">pokedex</a> que j'ai crée pour un projet informatique.
        </p>
    </div>
    <div class="row">
        <div id="example"><h2>Exemple</h2></div>
        <hr>
    </div>
    <div class="row">
        <div id="pokedex">
            <h2>
                <!-- Pokedex icon by Icons8 -->
                <img src="https://maxcdn.icons8.com/Color/PNG/48/Gaming/pokedex-48.png" title="Pokedex" width="48">
                Pokedex
            </h2>
        </div>
        <hr>
    </div>
</div>
<footer>
    <p class="text-center"><a href="#">Haut de page </a> ©  Pokiut Api 2016</p>
</footer>
