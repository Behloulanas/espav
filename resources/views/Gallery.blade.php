@extends('layout')
@section('content')
<div class="btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="red" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>
  </div>
  <nav class="sidebar">

    <img src="img/logo.png" alt="">
    <ul>
      <li>
        <li><a href="./index.html">Acceuil</a></li>
    </li>
        <li>
            <a href="#" class="serv-btn">L'ecole
                <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="serv-show">
                <li><a href="./Mot directeur.html">Mots du directeur</a></li>
                <li><a href="./Presentation.html">Présentation</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="feat-btn">Nos Formations
                <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
                <li><a href="./Presse et communication.html" >Press & Communication</a></li>
                <li><a href="./Techniques audiovisuelles.html" >Techniques d'audiovisuel</a></li>
                <li><a href="./Formation Modulaire.html" >Formation Modulaire</a></li>
            </ul>
        </li>
        <li>
          <a href="#" class="feat-btn-second">ESPAV TV
              <span class="fas fa-caret-down third"></span>
          </a>
          <ul class="feat-show-espav">
            <li><a href="./News.html">News</a></li>
            <li><a href="./reportages.html">Reportages</a></li>
            <li><a href="./Couvertures Mediatiques.html">Couvertures Médiatiques</a></li>
            <li><a href="./Emission.html">Émissions</a></li>
            <li><a href="./Magazines.html">Magazines</a></li>
            <li><a href="./Podcast.html">Podcast</a></li>
            <li><a href="./Making off.html">Making Off</a></li>
            <li><a href="./Court Metrage.html">courts métrage</a></li>
            <li><a href="./Documentaire.html">Documentaire</a></li>
            <li><a href="./Ecole.html">Autres vidéos</a></li>
          </ul>
      </li>
        <li><a href="./inscription.html" >S'incrire</a></li>
        <li><a href="./Agenda.html" >Agenda</a></li>
        <li><a href="./Galerie.html" >Gallery</a></li>
        <li><a href="./Nous Contactez.html">Nous Contacer</a></li>
    </ul>
</nav>


  <div class="container1 mt-5">
    <div class="heading">
      <h3>Photo <span>Gallery</span></h3>
    </div>
    <div class="box">

      <div class="dream">
        <img src="./img/soutenance.jpg">
        <img src="./img/Untitled2.jpg">
        <img src="./img/agenda1.jpg">
        <img src="./img/circle1.jpg">

      </div>

      <div class="dream">
        <img src="./img/circle3.jpg">
        <img src="./img/metrage.jpg">
        <img src="./img/DP4L0939.jpg">
        <img src="./img/DSC02903.jpg">
        <img src="./img/DSC03038.jpg">
        <img src="./img/IMG_7061.JPG">

      </div>

      <div class="dream">
        <img src="./img/IMG_0056.JPG">
        <img src="./img/IMG_3432.jpg">
        <img src="./img/IMG_5233.JPG">
        <img src="./img/IMG_5450.jpg">
        <img src="./img/IMG_6928.JPG">
      </div>

    </div>

  </div>
@endsection