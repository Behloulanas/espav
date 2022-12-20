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
                <li><a href="./Couvertures Mediatiques.html">Couvertures Médiatiques</a></li>
                <li><a href="./Emission.html">Émissions</a></li>
                <li><a href="./Magazines.html">Magazines</a></li>
                <li><a href="./Podcast.html">Podcast</a></li>
                <li><a href="./Making off.html">Making Off</a></li>
                <li><a href="./Court Metrage.html">courts métrage </a></li>
                <li><a href="./Documentaire.html">Documentaire
                    </a></li>
                <li><a href="./Ecole.html">Autres vidéos</a></li>
            </ul>
        </div>
    </header>
    <br>
    <br>

    <section class="headingg">
        <span class="text1">News</span>
        <!-- <span class="text2"></span> -->
    </section>


    <div class="wrapper">
        <div class="card">
            <div class="info">
                <h1>Espav News</h1>
           
                <p>موجز الأخبار1</p>
                <a href="https://www.youtube.com/watch?v=zHfJ-24iooI&list=PLFSJPRVc6NT084tPldrlV4JMLD8n2X0di&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>Espav News</h1>
   
                <p>موجز الأخبار2</p>
                <a href="https://www.youtube.com/watch?v=6LodqEmEQGI&list=PLFSJPRVc6NT084tPldrlV4JMLD8n2X0di&index=3&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>Espav News</h1>
     
                <p>موجز الأخبار3</p>
                <a href="https://www.youtube.com/watch?v=EMfiAo-bTM4&list=PLFSJPRVc6NT084tPldrlV4JMLD8n2X0di&index=4&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>
        <div class="card">
            <div class="info">
                <h1>Espav News</h1>
        
                <p>نشرة الأخبار</p>
                <a href="https://www.youtube.com/watch?v=0JPHx2pz4qo&list=PLFSJPRVc6NT084tPldrlV4JMLD8n2X0di&index=5&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>

        <div class="card">
            <div class="info">
                <h1>Espav News</h1>
   
                <p>ESPAV النشرة الإقتصادية</p>
                <a href="https://www.youtube.com/watch?v=a3UTaZnWjqE&list=PLFSJPRVc6NT084tPldrlV4JMLD8n2X0di&index=5&ab_channel=ESPAV"
                    class="btn">Voir video</a>
            </div>
        </div>


    </div>





    <div class="footer">

        <img src="./img/logo2.png" alt="">

    </div>
@endsection