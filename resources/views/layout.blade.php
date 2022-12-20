
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPAV</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Custom Style Sheet -->

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    
     <!-- Side-Bar  Start -->

     <div class="btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="red" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </div>
    <nav class="sidebar">

        <img src="{{ asset('img/logo.png') }}" alt="logo">

        <ul>
            <li>
            <li><a href="{{ url('/') }}">Acceuil</a></li>
            </li>


            <li>
                <a href="#" class="serv-btn">L'ecole
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="{{ route('motDirecteur') }}">Mots du directeur</a></li>
                    <li><a href="{{ route('Presentation') }}">Présentation</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="feat-btn">Nos Formations
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="{{ route('Press') }}">Press & Communication</a></li>
                    <li><a href="{{ route('Technique') }}">Techniques d'audiovisuel</a></li>
                    <li><a href="{{ route('Formation') }}">Formation Modulaire</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="feat-btn-second">ESPAV TV
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="feat-show-espav">
                    <li><a href="{{ route('News') }}">News</a></li>
                    <li><a href=".{{ route('Reportage') }}">Reportages</a></li>
                    <li><a href="{{ route('Couverture') }}">Couvertures Médiatiques</a></li>
                    <li><a href="{{ route('Emission') }}">Émissions</a></li>
                    <li><a href="{{ route('Magazine') }}">Magazines</a></li>
                    <li><a href="{{ route('Podcast') }}">Podcast</a></li>
                    <li><a href="{{ route('Making') }}">Making Off</a></li>
                    <li><a href="{{ route('Court') }}">courts métrage</a></li>
                    <li><a href="{{ route('Documentaire') }}">Documentaire</a></li>
                    <li><a href="{{ route('Autres') }}">Autres vidéos</a></li>
                </ul>
            </li>
            <li><a href="{{ route('inscription') }}">S'incrire</a></li>
            <li><a href="{{ route('Agenda') }}">Agenda</a></li>
            <li><a href="{{ route('Gallery') }}">Gallery</a></li>
            <li><a href="{{ route('Contacter') }}">Nous Contacer</a></li>
        </ul>
    </nav>

    <!-- Side-Bar  END -->

            @yield('content')



  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom Javascript -->
    <script src="https://cdn.plyr.io/3.6.3/plyr.polyfilled.js"></script>
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>