@extends('layout')
@section('content')


    <!--Carousel start -->


    <div class="owl-carousel owl-theme">
        <div class="slide slide-1">
            <div class="slide-content">
                <h1>Presse audiovisuelle</h1>
                <p>TV / Radio</p>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">
                <h1>Évènements</h1>
                <p>accueil des grands acteurs du domaine</p>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">
                <h1>Production audiovisuelle</h1>
                <p>Couverture médiatique</p>
                <!-- <button>Like & Share</button> -->
            </div>
        </div>
        <div class="slide slide-4">
            <div class="slide-content">
                <h1>Techniques de l'audiovisuel</h1>
                <p>Image / Montage / Son</p>
                <!-- <button>Comment</button> -->
            </div>
        </div>
        <div class="slide slide-5">
            <div class="slide-content">
                <h1>Salle Radio</h1>
                <p>Travaux Pratiques</p>
                <!-- <button>Like & Share</button> -->
            </div>
        </div>
        <div class="slide slide-6">
            <div class="slide-content">
                <h1>Multimédias</h1>
                <p>Infographie / motion designe</p>
                <!-- <button>Comment</button> -->
            </div>
        </div>
        <div class="slide slide-7">
            <div class="slide-content">
                <h1>Presse</h1>
                <p>Écrite / Digitale</p>
                <!-- <button>Comment</button> -->
            </div>
        </div>
        <div class="slide slide-8">
            <div class="slide-content">
                <h1>Court métrage</h1>
                <h1>/</h1>
                <h1>Documentaire</h1>
                <p></p>
                <!-- <button>Comment</button> -->
            </div>
        </div>
    </div>
    <!-- </div> -->


    <!--Carousel End -->





    <!--Preloader Start -->


    <div id="overlay">
        <div class="spinner"></div>
    </div>


    <!--Preloader END -->





    <!-- Moving title Start-->

    <div class="wrapperr">
        <ul class="dynamic-txts">
            <li><span>Rejoignez-nous</span></li>
            <li><span>Rejoignez-nous</span></li>
            <li><span>Rejoignez-nous</span></li>
            <li><span>Rejoignez-nous</span></li>
        </ul>
    </div>
    <!-- Moving title End-->





    <!-- Youtube Video Start-->

    <div class="container my-1">
        <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/K2rqOx4KN4Q"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <!-- Youtube Video End-->






    <!--Moving title start -->


    <div class="wrapperr">
        <ul class="dynamic-txts">
            <!-- <li><span>Formations </span></li> -->
            <li><span>Thématiques</span></li>
            <li><span>Thématiques</span></li>
            <li><span>Thématiques</span></li>
            <!-- <li><span>Projet professionnel</span></li> -->
        </ul>
    </div>


    <!--Moving title End -->







    <!-- Formation  start-->

    <div class="container">
        <div class="metier text-center">
            <!-- Formation title -->
            <div class="waviy">
                <span>F</span>
                <span>a</span>
                <span>i</span>
                <span>r</span>
                <span>e</span>
                <span></span>
                <span>d</span>
                <span>e</span>
                <span></span>
                <span>V</span>
                <span>o</span>
                <span>t</span>
                <span>r</span>
                <span>e</span>
                <span></span>
                <span>F</span>
                <span>o</span>
                <span>r</span>
                <span>m</span>
                <span>a</span>
                <span>t</span>
                <span>i</span>
                <span>o</span>
                <span>n</span>
                <span></span>
                <span>u</span>
                <span>n</span>
                <span></span>
                <span>M</span>
                <span>e</span>
                <span>t</span>
                <span>i</span>
                <span>e</span>
                <span>r</span>

            </div>
            <div class="formation-options">
                <span>Recherchez une formation :</span>

                <!-- Formation options start -->

                <select name="" id="">
                    <option value="">Les thematiques de Formation</option>
                    <option value="">Presse / Communication </option>
                    <option value="">Techniques d'audiovisuel</option>
                    <option value="">Formation modulaire</option>
                </select>

                <select name="" id="">
                    <option value="">Mon Niveau d'Etude</option>
                    <option value="">je suis Lyceen</option>
                    <option value="">j'ai le bac</option>
                    <option value="">j'ai un bac + 1</option>
                    <option value="">j'ai un bac + 2</option>
                    <option value="">j'ai un bac + 3 ou +</option>
                </select>

                <select name="" id="">
                    <option value="">Mon Projet</option>
                    <option value="">je cherche une formation diplomante</option>
                    <option value="">je cherche une formation certifiante</option>
                    <option value="">je cherche une boîte de production</option>
                    <option value="">je cherche un partenaire</option>
                </select>
                <button><a href="./Formation Modulaire.html">Ok</a></button>

                <!-- Formation options End -->
            </div>
            <h2><a href="./Formation Modulaire.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                    Toutes les formations de L'ESPAV</a></h2>
        </div>
    </div>

    <!-- Formation  End -->







    <!--Circle Cards ESPA TV start-->


    <!-- Moving title Start-->

    <div class="wrapperr">
        <img src="./img/logoespav.png" alt="logo">
    </div>

    <!-- Moving title End-->

    <div class="photos">
        <div class="circle-cards">
            <div class="image-circle">
                <img src="./img/news.jpg" alt="" srcset="">
                <button><a href="./News.html">News</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/News1.jpg" alt="" srcset="">
                <button><a href="./reportages.html">Reportages</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/Mediatique.jpg" alt="" srcset="">
                <button><a href="./Couvertures Mediatiques.html">Couvertures</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/emissions.jpg" alt="" srcset="">
                <button><a href="./Emission.html">Emissions</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/Magazines.jpg" alt="" srcset="">
                <button><a href="./Magazines.html">Magazines</a></button>
            </div>
        </div>

        <div class="circle-cards">
            <div class="image-circle">
                <img src="./img/Podcasts.jpg" alt="" srcset="">
                <button><a href="./Podcast.html">Podcasts</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/circle1.jpg" alt="" srcset="">
                <button><a href="./Making off.html">Making Off</a></button>
            </div>
            <div class="image-circle">
                <img src="./img/metrage.jpg" alt="" srcset="">
                <button><a href="./Court Metrage.html">Courts Métrages</a></button>
            </div>
            <!-- <div class="image-circle">
                <img src="./img/" alt="" srcset="">
                <button><a href="./Documentaire.html">Documentaires</a></button>
            </div> -->
            <div class="image-circle">
                <img src="./img/ecole.jpg" alt="" srcset="">
                <button><a href="./Ecole.html">Autres vidéos</a></button>
            </div>
        </div>
    </div>

    <!--Circle Cards ESPA TV End-->







    <!-- Moving title Start-->

    <div class="wrapperr">
        <ul class="dynamic-txts">
            <li><span>Agenda</span></li>
            <li><span>Agenda</span></li>
            <li><span>Agenda</span></li>
            <li><span>Agenda</span></li>
        </ul>
    </div>

    <!-- Moving title End	-->





    <!-- Cards Start-->
    <div class="cards">
        <div class="container ml-2">
            <div class="cardd">
                <div class="car-header">
                    <img src="./img/agenda3.jpg" alt="" />
                </div>
                <div class="car-body">
                    <h4>
                        Couverture médiatique des éléctions législatives
                    </h4>
                    <p>
                        <span>L</span>A DISCUSSION DES MÉDIAS AU MAROC, ENCADRÉE PAR LE <span>D</span>r. <span> AZIZ AL-ATATERI</span>
                    </p>
                </div>
            </div>
            <div class="cardd">
                <div class="car-header">
                    <img src="./img/agenda2.jpg" alt="" />
                </div>
                <div class="car-body">
                    <h4>
                        Court Métrage INVERSE
                    </h4>
                    <p>
                     <span>L</span>'ACCEUIL DU RÉALISATEUR <span>A</span>BDERRAHIM <span>BOUGLASS</span> POUR LA PROJECTION DE SON COURT MÉTRAGE EN
                        AVANT-PREMIÈRE "<span> INVERSE</span>"
                    </p>
                </div>
            </div>
            <div class="cardd">
                <div class="car-header">
                    <img src="./img/agenda1.jpg" alt="" />
                </div>
                <div class="car-body">
                    <h4>
                        Couverture Médiatique
                    </h4>
                    <p>
                     <span>L</span>A 25ÈME EDITION DE LA SEMAINE SCIENTIFIQUE ET CULTURELLE DE L'ÉTUDIANT SOUS LE THÉME
                        "INTELLIGENCE ARTIFICIELLE" <span>FSSM</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards End-->




    <!--Footer Start-->

    <div class="footer-basic mt-5">
        <footer>
            <div class="social">
                <a href="https://www.youtube.com/channel/UCH6dGdVIxoj4zyOglfUvGYQ" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-youtube" viewBox="0 0 16 16">
                        <path
                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/espav.ma" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-facebook" viewBox="0 0 16 16">
                        <path
                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></i>
                </a>
                <a href="https://www.linkedin.com/company/espav-%C3%A9cole-sp%C3%A9ciale-de-la-production-audiovisuelle-et-m%C3%A9tiers-de-la-presse/ "
                    target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/espav.ma/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-instagram" viewBox="0 0 16 16">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg>
                </a>
            </div>

            <ul class="list-inline">
                <div class="box" data-aos="fade-up" data-aos-delay="450">
                    <a class="link" href="#"> <i class="fas fa-phone"></i> 05-24-30-20-99 </a><br>
                    <a class="link" href="#"> <i class="fas fa-envelope"></i> contact@espav.ma </a><br>
                    <a class="link" href="#"> <i class="fas fa-map"></i> Assif B,47,Centre Commercial Al Anwar 5éme
                        étage Bd Allal Al Fassi Marrakech</a><br>
                </div><br>
                <li class="list-inline-item"><a href="#">Réclamations</a></li>
                <li class="list-inline-item"><a href="#">MENTIONS LÉGALES</a></li>
            </ul>
            <p class="copyright">Copyright ESPAV</p>

        </footer>

        <!--Footer End-->


        <div id="mybutton">
            <button class="feedback"><a href="inscription.html">Inscriptions ouvertes
                    2022/2023</a></button>
        </div>

    </div>





@endsection