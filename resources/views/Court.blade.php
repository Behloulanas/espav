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
        <span class="text1">courts métrage</span>
    </section>


    <div class="wrapper">
        <div class="card">
            <div class="info">
                <h1>courts métrage News</h1>
                <p style="font-size: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                        <path
                            d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                    </svg>9 juin 2022</p>
                <p>SATISFACTION</p>
                <a href="https://www.youtube.com/watch?v=qW2zbw-n6LA&list=PLFSJPRVc6NT3G5X8u35WvTwTSVx7qc_pi&ab_channel=ESPAV"  
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>courts métrage News</h1>
         
                <p>Me vs I</p>
                <a href="https://www.youtube.com/watch?v=8S6XUpKa5As&list=PLFSJPRVc6NT3G5X8u35WvTwTSVx7qc_pi&index=2&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>courts métrage News</h1>
          
                <p>Chemin Vers Son Coeur</p>
                <a href="https://www.youtube.com/watch?v=xls1IkpLlfo&list=PLFSJPRVc6NT3G5X8u35WvTwTSVx7qc_pi&index=3&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <!-- <img src="./assets/img/Nachrat akhbar.jpg" alt=""> -->
            <div class="info">
                <h1>courts métrage News</h1>
     
                <p>DEJAS VU</p>
                <a href="https://www.youtube.com/watch?v=dSaXCAgiksk&list=PLFSJPRVc6NT3G5X8u35WvTwTSVx7qc_pi&index=5&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
    </div>



    <div class="footer">

        <img src="./img/logo2.png" alt="">

    </div>

@endsection