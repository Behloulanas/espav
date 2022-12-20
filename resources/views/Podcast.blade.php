@extends('layout')
@section('content')
 <!-- header -->
 <header>
        <label for="checkbox_toggle" class="hamburger" style="margin-bottom: 25px;">&#9776;</label>
        <div id="navBar">

            <a href="#"><img src=".img/logo2.png" alt="" class="logo"></a>
            <ul class="list-items1">
                <li><a href="./index.html">Acceuil</a></li>
            </ul>
            <ul class="list-items">
                <li><a href="./News.html">News</a></li>
                <li> <a href="./reportages.html">Reportages</a></li>
                <li><a href="./Couvertures Mediatiques.html">Couvertures
                        Médiatiques</a></li>
                <li><a href="./Emission.html">Émissions</a></li>
                <li><a href="./Magazines.html">Magazines</a></li>
                <li><a href="./Podcast.html">Podcast</a></li>
                <li><a href="./Making off.html">Making Off</a></li>
                <li><a href="./Court Metrage.html">courts
                        métrage </a></li>
                <li><a href="./Documentaire.html">Documentaire
                    </a></li>
                <li><a href="./Ecole.html">Autres vidéos</a></li>
            </ul>
        </div>
    </header>
    <br>
    <br>


    <section class="headingg">
        <span class="text1">Podcast</span>
    
    </section>


    <div class="wrapper">
        <div class="card">
            <div class="info">
                <h1>Podcast News</h1>
 
                <p>Concept ep1</p>
                <a href="https://www.youtube.com/watch?v=QFqRAypM6fY&list=PLFSJPRVc6NT1bm5sNPDV9LQQCIZfPc8uk&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>Podcast News</h1>
         
                <p>concept ep2</p>
                <a href="https://www.youtube.com/watch?v=mR_QN_bP34E&list=PLFSJPRVc6NT1bm5sNPDV9LQQCIZfPc8uk&index=2&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>

    </div>





    <div class="footer">

        <img src="./img/logo2.png" alt="">

    </div>
@endsection