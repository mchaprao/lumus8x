<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lumus Soluções Ambientais</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap_custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/chaprao.css') }}">

    <link rel="icon" type="image/png" href="{{ url(asset('frontend/assets/images/favicon.png')) }}"/>

    <!-- CAROUSEL PLUGIN -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.carousel.css') }}">
</head>
<body>

<header class="main_header">
    <div class="header_bar bg-front">
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-location-arrow"></i>
                    <p class="my-auto ml-3">Rua Ouricuri, nº 93 | Santo Antônio <br>Igarassu/PE</p>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-clock-o"></i>
                    <p class="my-auto ml-3">Seg/Sex: 08:00h - 18:00h <br>Sáb/Dom: Plantão</p>
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                    <i class="icon-envelope"></i>
                    <p class="my-auto ml-3">lumus@lumusambiental.com.br <br>+55 (81) 9 9900-1276</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <div class="navbar-brand">
                <a href="/">
                    <h1 class="text-hide">Lumus Soluções Ambientais</h1>
                    <img src="{{ asset('frontend/assets/images/logo-lumus-720-250-fr.png') }}" alt="Lumus Soluções Ambientais" class="d-inline-block" width="200px">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end text_menu" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Página Inicial</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="{{ route('company') }}">Empresa</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contato</a></li>
                    <li class="nav-item px-4"><a class=" btn btn_lumus" href="{{ route('login') }}" target="_blank">Acesso Cliente</a></li>
                </ul>

            </div>
        </div>
    </nav>
</header>

@yield('content')

<section class="main_footer bg-light">
         {{-- style="background: url({{ asset('frontend/assets/images/footer.png') }}) repeat-x bottom center; background-size: 10%;"> --}}
    <div class="container pt-5" style="padding-bottom: 20px;">

        <div class="row d-flex justify-content-around text-muted">

            <div class="col-12 col-md-3 col-lg-3">
                <h1 class="pb-2">Navegue <span class="text-front">Aqui!</span></h1>
                <ul>
                    <li><a href="/">Página Inicial</a></li>
                    <!-- <li><a href="{{ route('company') }}">Empresa</a></li> -->
                    <li><a href="{{ route('services') }}">Serviços</a></li>
                    <li><a href="{{ route('contact') }}">Contato</a></li>
                    <li><a href="{{ route('login') }}" class="text-front">Acesso Cliente</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-9 col-lg-6">
                <h1 class="pb-2">Nos <span class="text-front">Conheça!</span></h1>
                <p>Somos uma consultoria especializada na área de meio ambiente e segurança do trabalho. Buscamos sempre alcançar o desenvolvimento sustentável. </p>

                <h1 class="pb-2">Somos especializados em <span class="text-front">desenvolver</span></h1>
                <p>Projetos de Sustentabilidade para grandes empresas.</p>
                <p>Entre em contato com a nossa equipe, temos a melhor solução para a sua empresa.</p>
            </div>

            <div class="col-12 col-md-12 col-lg-3 text-center">
                <a href="https://www.facebook.com/lumusambiental" target="_blank" class="btn btn-front icon-facebook icon-notext"></a>
                <a href="https://twitter.com/lumusambiental" target="_blank" class="btn btn-front icon-twitter icon-notext"></a>
                <a href="https://www.instagram.com/lumusambiental" target="_blank" class="btn btn-front icon-instagram icon-notext"></a>
            </div>
        </div>
    </div>
</section>


<div class="main_copyright py-3 bg-front text-white text-center">
    {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-12">
                <p class="mb-0">Lumus Soluções Ambientais | Rua Ouricuri, nº 93 - Santo Antônio - Igarassu/PE</p>
                <p class="mb-0">Todos os Direitos Reservados - <b>Chaprão</b>Web®</p>
            </div>
        </div>
    {{-- </div> --}}
</div>

<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
