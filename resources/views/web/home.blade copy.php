<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lumus Soluções Ambientais empresa de meio ambiente e sustentabilidade.">
    <title>Lumus Ambiental</title>
    <!-- FONT GOOGLE -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- FONT ICON -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> --}}
    
    <!-- CAROUSEL PLUGIN -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">

    <!-- ESTILOS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
</head>

<body>

{{-- DIALOG --}}
<div class="dialog">
    <button class="dialog-close">FECHAR <i class="fas fa-times-circle"></i></button>

    {{-- dialog equipe - luiz vieira --}}
    <div class="dialog-body dialog-equipe" id="luiz_vieira">
        <div class="row dialog-body-header">
            <p><strong>Luiz Vieira</strong></p>
            <p><strong><span>Front-end</span></strong></p>
        </div>

        <div class="row">
            <div class="dialog-cols">
                <div class="dialog-equipe-photo">
                    <img src="{{ asset('frontend/assets/images/equipe/luiz-vieira.jpg')}}" alt="Luiz Vieira">
                </div>
                <div class="dialog-equipe-redes">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="dialog-cols">
                <div class="row">
                    <p class="dialog-cols-header"><span>Biografia</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Formação</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Experiências</span></p>
                    <p>
                        <strong>10/2017 - (Atual)</strong><br>
                        Nome Empresa 3<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2016 - 10/2017</strong><br>
                        Nome Empresa 2<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2015 - 10/2016</strong><br>
                        Nome Empresa 1<br>
                        programador front-end
                    </p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Habilidades</span></p>
                    <ul class="dialog-equipe-habilidades">
                        <li>
                            <label>HTML5 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>CSS3 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>Wordpress <span>50%</span></label>
                            <div><span style="width: 50%;"></span></div>
                        </li>
                        <li>
                            <label>SASS <span>70%</span></label>
                            <div><span style="width: 70%;"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- end dialog equipe - luiz vieira --}}
    {{-- dialog equipe - angela maria --}}
    <div class="dialog-body dialog-equipe" id="angela_maria">
        <div class="row dialog-body-header">
            <p><strong>Angela Maria</strong></p>
            <p><strong><span>Diretora de Arte</span></strong></p>
        </div>

        <div class="row">
            <div class="dialog-cols">
                <div class="dialog-equipe-photo">
                    <img src="{{ asset('frontend/assets/images/equipe/angela-maria.jpg')}}" alt="Angela Maria">
                </div>
                <div class="dialog-equipe-redes">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="dialog-cols">
                <div class="row">
                    <p class="dialog-cols-header"><span>Biografia</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Formação</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Experiências</span></p>
                    <p>
                        <strong>10/2017 - (Atual)</strong><br>
                        Nome Empresa 3<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2016 - 10/2017</strong><br>
                        Nome Empresa 2<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2015 - 10/2016</strong><br>
                        Nome Empresa 1<br>
                        programador front-end
                    </p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Habilidades</span></p>
                    <ul class="dialog-equipe-habilidades">
                        <li>
                            <label>HTML5 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>CSS3 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>Wordpress <span>50%</span></label>
                            <div><span style="width: 50%;"></span></div>
                        </li>
                        <li>
                            <label>SASS <span>70%</span></label>
                            <div><span style="width: 70%;"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- end dialog equipe - angela maria --}}
    {{-- dialog equipe - Marcos Viana --}}
    <div class="dialog-body dialog-equipe" id="marcos_viana">
        <div class="row dialog-body-header">
            <p><strong>Marcos Viana</strong></p>
            <p><strong><span>Diretor Geral</span></strong></p>
        </div>

        <div class="row">
            <div class="dialog-cols">
                <div class="dialog-equipe-photo">
                    <img src="{{ asset('frontend/assets/images/equipe/marcos-viana.jpg')}}" alt="Marcos Viana">
                </div>
                <div class="dialog-equipe-redes">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="dialog-cols">
                <div class="row">
                    <p class="dialog-cols-header"><span>Biografia</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Formação</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Experiências</span></p>
                    <p>
                        <strong>10/2017 - (Atual)</strong><br>
                        Nome Empresa 3<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2016 - 10/2017</strong><br>
                        Nome Empresa 2<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2015 - 10/2016</strong><br>
                        Nome Empresa 1<br>
                        programador front-end
                    </p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Habilidades</span></p>
                    <ul class="dialog-equipe-habilidades">
                        <li>
                            <label>HTML5 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>CSS3 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>Wordpress <span>50%</span></label>
                            <div><span style="width: 50%;"></span></div>
                        </li>
                        <li>
                            <label>SASS <span>70%</span></label>
                            <div><span style="width: 70%;"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- end dialog equipe - marcos viana --}}
    {{-- dialog equipe - Patricia Souza --}}
    <div class="dialog-body dialog-equipe" id="patricia_souza">
        <div class="row dialog-body-header">
            <p><strong>Patricia Souza</strong></p>
            <p><strong><span>Financeiro</span></strong></p>
        </div>

        <div class="row">
            <div class="dialog-cols">
                <div class="dialog-equipe-photo">
                    <img src="{{ asset('frontend/assets/images/equipe/patricia-souza.jpg')}}" alt="Patricia Souza">
                </div>
                <div class="dialog-equipe-redes">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
            <div class="dialog-cols">
                <div class="row">
                    <p class="dialog-cols-header"><span>Biografia</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Formação</span></p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word</p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Experiências</span></p>
                    <p>
                        <strong>10/2017 - (Atual)</strong><br>
                        Nome Empresa 3<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2016 - 10/2017</strong><br>
                        Nome Empresa 2<br>
                        programador front-end
                    </p>
                    <p>
                        <strong>10/2015 - 10/2016</strong><br>
                        Nome Empresa 1<br>
                        programador front-end
                    </p>
                </div>
                <div class="row">
                    <p class="dialog-cols-header"><span>Habilidades</span></p>
                    <ul class="dialog-equipe-habilidades">
                        <li>
                            <label>HTML5 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>CSS3 <span>90%</span></label>
                            <div><span style="width: 90%;"></span></div>
                        </li>
                        <li>
                            <label>Wordpress <span>50%</span></label>
                            <div><span style="width: 50%;"></span></div>
                        </li>
                        <li>
                            <label>SASS <span>70%</span></label>
                            <div><span style="width: 70%;"></span></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- end dialog equipe - patricia souza --}}

    {{-- PORTFOLIO --}}
    {{-- dialog portfolio job_1 --}}

    @foreach($posts as $post)        
    
    <div class="dialog-body dialog-portfolio" id="job_{{ $post->id }}">
        <div class="dialog-cols">
            {{-- Carrossel portfolio --}}
            <div class="owl-carousel carousel_portfolio">
                <div class="owl-lazy" data-src="{{ url('storage').'/'.$post->image }}">
                    <div class="owl-caption">
                        <p>{{ $post->title }}</p>
                    </div>
                </div>
                <div class="owl-lazy" data-src="{{ url('storage').'/'.$post->image }}">
                    <div class="owl-caption">
                        <p>{{ $post->title }}</p>
                    </div>
                </div>
            </div>
            {{-- End Carrossel Portfolio --}}
        </div>

        <div class="dialog-cols">
            <div class="row">
                <p class="dialog-cols-header"><span>Descrição do Post</span></p>
                <p>{{ $post->content }}</p>
            </div>

            <div class="row">
                <p class="dialog-cols-header"><span>Detalhes do Post</span></p>
                <ul>
                    <li><strong>Autor:</strong> {{ $post->author_id }}</li>
                    <li><strong>Data:</strong> {{ $post->published_at }}</li>
                    <li><strong>Tags:</strong> Design, HTML, javaScript, PHP</li>
                    <li><strong>URL:</strong> www.angrycriative.com.br</li>
                </ul>
            </div>
        </div>        
    </div>
    @endforeach
    {{-- end dialog portfolio job_1--}}
</div>
{{-- end DIALOG --}}

{{-- start HEADER --}}
<header class="row header">
    <h1 class="font-zero">Lumus Soluções Ambientais - Portal</h1>
    <div class="content">
        <div class="header-logo">
            <a href="" title="Lumus Soluções Ambientais" class="back-top">
                <img src="{{ asset('frontend/assets/images/logo-lumus-720-250-fr.png') }}"></a>
        </div>

        <a href="" id="nav-toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="header-collapse">
            <nav class="header-nav">
                <h1 class="font-zero">Navegação do site</h1>
                <ul>                    
                    <li><a href="#home" title="Página Inicial" class="active">Página Inicial</a></li>
                    <li><a href="#agencia" title="A Empresa" class="">Empresa</a></li>
                    <li><a href="#servicos" title="Areas de Atuação" class="">Áreas de Atuação</a></li>
                    <li><a href="#contato" title="Contato" class="">Contato</a></li>
                    {{-- <li><a href="/login" title="Login" class="login-active">Área do Cliente</a></li> --}}
                    
                </ul>
                
            </nav>

            <div class="header-search">
                <form action="">
                    <input type="search" name="busca" placeholder="PESQUISAR">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="header-redes">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</header>
{{-- end HEADER --}}

{{-- Carrossel Principal --}}
<div class="owl-carousel" id="carousel_principal">
    @foreach($carousels as $carousel)
        <div class="owl-lazy" data-src="{{ url('storage').'/'.$carousel->image }}">
            <div class="owl-caption">
                <p><strong>{{ $carousel->title }}</strong></p>
                <p>{{ $carousel->description }}</p>
            </div>
        </div>   
    @endforeach  
</div>
{{-- End Carrossel Principal --}}

{{-- Agencia --}}
<section class="section" id="agencia">
    @foreach($webempresas as $webempresa)        
    
        <header class="section-header">
            <div class="content">
                <h1><span>Empresa</span></h1>                
                <p class="tagline">
                    {{ $webempresa->empresa }}
                </p>
            </div>
        </header>

        {{-- <div class="row agencia">
            <div class="content">
                <div class="agencia-title">
                    <p>{{ $webempresa->title }}</p>
                    <p><strong>{{ $webempresa->subtitle }}</strong></p>
                </div> --}}

                {{-- <section class="agencia-item">
                    <div class="agencia-item-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h2>Inovação</h2>
                    <p>{{ $webempresa->innovation }}</p>
                </section>
                <section class="agencia-item">
                    <div class="agencia-item-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h2>Experimente</h2>
                    <p>{{ $webempresa->experience }}</p>
                </section>
                <section class="agencia-item">
                    <div class="agencia-item-icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h2>Perfeição</h2>
                    <p>{{ $webempresa->perfection }}</p>
                </section> --}}
            {{-- </div>
        </div> --}}
    @endforeach
</section>
{{-- End Agencia --}}

{{-- Curiosidades --}}
{{-- <div class="row curiosidades">
    <div class="content" style="text-decoration: none;">
        <p>Veja algumas curiosidades sobre a nossa empresa</p>
        <ul>
            <li>
                <span>100</span>
                <label>Clientes atendidos</label>
            </li>
            <li>
                <span>790</span>
                <label>Prospecção</label>
            </li>
            <li>
                <span>10</span>
                <label>Trabalhos em andamento</label>
            </li>
            <li>
                <span>800</span>
                <label>Trabalhos realizados</label>
            </li>
        </ul>
    </div>
</div> --}}
{{-- End Curiosidades --}}

{{-- Equipe --}}
{{-- <section class="section" id="equipe">
    <header class="section-header">
        <div class="content">
            <h1><span>Equipe</span></h1>
            <p class="tagline">
                Nossos profissionais se destacam em equipe porque são apaixonados pela profissão e trabalho.
                Isso nos torna únicos em todos os sentidos.
            </p>
        </div>
    </header>

    <div class="row equipe">
        <div class="content">
            <ul class="equipe-list">
                <li>
                    <div class="equipe-foto">
                        <div class="equipe-foto-hover">
                            <div>
                                <span>Front-end</span>
                                <p><a href="#luiz_vieira" class="dialog-open">Ver perfil</a></p>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/images/equipe/luiz-vieira.jpg')}}" alt="Luiz Vieira">
                    </div>
                    <p class="equipe-title">
                        <strong >Luiz Vieira</strong>
                    </p>
                </li>
                <li>
                    <div class="equipe-foto">
                        <div class="equipe-foto-hover">
                            <div>
                                <span>Diretora de Arte</span>
                                <p><a href="#angela_maria" class="dialog-open">Ver perfil</a></p>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/images/equipe/angela-maria.jpg')}}" alt="Angela Maria">
                    </div>
                    <p class="equipe-title">
                        <strong >Angela Maria</strong>
                    </p>
                </li>
                <li>
                    <div class="equipe-foto">
                        <div class="equipe-foto-hover">
                            <div>
                                <span>Diretor Geral</span>
                                <p><a href="#marcos_viana" class="dialog-open">Ver perfil</a></p>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/images/equipe/marcos-viana.jpg')}}" alt="Marcos Viana">
                    </div>
                    <p class="equipe-title">
                        <strong >Marcos Viana</strong>
                    </p>
                </li>
                <li>
                    <div class="equipe-foto">
                        <div class="equipe-foto-hover">
                            <div>
                                <span>Financeiro</span>
                                <p><a href="#patricia_souza" class="dialog-open">Ver perfil</a></p>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/images/equipe/patricia-souza.jpg')}}" alt="Patrici Souza">
                    </div>
                    <p class="equipe-title">
                        <strong >Patrícia Souza</strong>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section> --}}
{{-- End Equipe --}}

{{-- Serviços --}}
<section class="section" id="servicos">
    <header class="section-header">
        <div class="content">
            <h1><span>Serviços</span></h1>
            <p class="tagline">
                Nossos serviços são entregues por uma equipe com anos de experiência no mercado e apaixonados pelo desenvolvimento sustentável.
            </p>
        </div>
    </header>

    {{-- <div class="row servicos">
        <div class="content">
            <section class="servicos-item design">
                <header>
                    <i class="fas fa-pencil-alt"></i>
                    <h2>Design</h2>
                </header>
                <div class="content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><strong>Oferecemos</strong></p>
                    <ul>
                        <li>Loren ipsum</li>
                        <li>consectertus</li>
                        <li>exectiontion</li>
                    </ul>
                    <a href="/login">Saiba Mais</a>
                </div>
            </section>
            <section class="servicos-item estrategia">
                <header>
                    <i class="fas fa-chart-line"></i>
                    <h2>Estrategia</h2>
                </header>
                <div class="content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><strong>Oferecemos</strong></p>
                    <ul>
                        <li>Loren ipsum</li>
                        <li>consectertus</li>
                        <li>exectiontion</li>
                    </ul>
                    <a href="#">Saiba Mais</a>
                </div>
            </section>
            <section class="servicos-item digital">
                <header>
                    <i class="fas fa-laptop"></i>
                    <h2>Digital</h2>
                </header>
                <div class="content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><strong>Oferecemos</strong></p>
                    <ul>
                        <li>Loren ipsum</li>
                        <li>consectertus</li>
                        <li>exectiontion</li>
                    </ul>
                    <a href="#">Saiba Mais</a>
                </div>
            </section>
            <section class="servicos-item marketing">
                <header>
                    <i class="fas fa-comments"></i>
                    <h2>Marketing</h2>
                </header>
                <div class="content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p><strong>Oferecemos</strong></p>
                    <ul>
                        <li>Loren ipsum</li>
                        <li>consectertus</li>
                        <li>exectiontion</li>
                    </ul>
                    <a href="#">Saiba Mais</a>
                </div>
            </section>
        </div>
    </div> --}}

    {{-- <div class="row">

        @foreach($posts as $post)

            <div class="portfolio visible websites design">
                <div class="portfolio-hover">
                    <div>
                        <strong>{{ $post->title }}</strong>
                        <label>{{ $post->published_at }} - {{ $post->author_id }}</label>
                        <a href="#job_{{ $post->id }}" class="dialog-open"><i class="far fa-eye"></i></a>
                    </div>
                </div>
                <img src="{{ url('storage').'/'.$post->image }}" alt="">
            </div>

        @endforeach
        
    </div> --}}

</section>
{{-- End Serviços --}}

{{-- testemunhas --}}
{{-- <section class="section">
    <header class="section-header">
        <div class="content">
            <h1><span>Testemunhas</span></h1>
            <p class="tagline">
                Veja o que nossos clientes falam da Lumus pelo ótimo serviços prestados, tudo feito para trazer os melhores resultados para a sua empresas.
            </p>
        </div>
    </header>

    <div class="row testemunhas">
        <div class="content">
            <div class="owl-carousel" id="carousel_testemunhas">
                <article class="testemunhas-item">
                    <div class="testemunhas-photo">
                        <img src="{{ asset('frontend/assets/images/testemunhas/luiz-vieira.jpg')}}" alt="Luiz Vieira">
                    </div>
                    <div class="testemunhas-info">
                        <header>
                            <h2>Luiz Vieira <span>Front-end</span></h2>
                            <i class="fas fa-quote-right"></i>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </header>
                    </div>
                </article>
                <article class="testemunhas-item">
                    <div class="testemunhas-photo">
                        <img src="{{ asset('frontend/assets/images/testemunhas/angela-maria.jpg')}}" alt="Angela Maria">
                    </div>
                    <div class="testemunhas-info">
                        <header>
                            <h2>Angela Maria <span>Diretora de Arte</span></h2>
                            <i class="fas fa-quote-right"></i>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </header>
                    </div>
                </article>
                <article class="testemunhas-item">
                    <div class="testemunhas-photo">
                        <img src="{{ asset('frontend/assets/images/testemunhas/marcos-viana.jpg')}}" alt="Marcos Viana">
                    </div>
                    <div class="testemunhas-info">
                        <header>
                            <h2>Marcos Viana <span>Diretor Geral</span></h2>
                            <i class="fas fa-quote-right"></i>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </header>
                    </div>
                </article>
                <article class="testemunhas-item">
                    <div class="testemunhas-photo">
                        <img src="{{ asset('frontend/assets/images/testemunhas/patricia-souza.jpg')}}" alt="Patricia Souza">
                    </div>
                    <div class="testemunhas-info">
                        <header>
                            <h2>Patrícia Souza <span>Financeiro</span></h2>
                            <i class="fas fa-quote-right"></i>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </header>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section> --}}
{{-- End testemunhas --}}

{{-- portfolio --}}
{{-- <section class="section" id="portfolio">
    <header class="section-header">
        <div class="content">
            <h1><span>Portfolio</span></h1>
            <p class="tagline">
                Veja alguns de nossos trabalhos e contrate-nos para fazer seus serviços, pois ajudamos as empresas a vincular processos de negócios e pessoas.
            </p>
        </div>
    </header>

    <div class="row">
        <ul class="portfolio-nav">
            <li><a href="#" id="all" class="active">Todos</a></li>
            <li><a href="#" id="websites">Websites</a></li>
            <li><a href="#" id="sistemas">Sistemas</a></li>
            <li><a href="#" id="design">Design</a></li>
            <li><a href="#" id="logos">Logos</a></li>
        </ul>
    </div> --}}

    {{-- <div class="py-10">
        <ul class="text-center uppercase ">
            <li><a href="#" class="py-1 px-2 text-indigo-500 border-2 border-indigo-500 text-extrabold">Todos</a></li>
        </ul>
    </div> --}}    

    {{-- <div class="row">

        @foreach($posts as $post)

            <div class="portfolio visible websites design">
                <div class="portfolio-hover">
                    <div>
                        <strong>{{ $post->title }}</strong>
                        <label>{{ $post->published_at }} - {{ $post->author_id }}</label>
                        <a href="#job_{{ $post->id }}" class="dialog-open"><i class="far fa-eye"></i></a>
                    </div>
                </div>
                <img src="{{ url('storage').'/'.$post->image }}" alt="">
            </div>

        @endforeach

        {{-- <div class="portfolio visible websites design">
            <div class="portfolio-hover">
                <div>
                    <strong>Angry Criative</strong>
                    <label>Websites, Design</label>
                    <a href="#job_1" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/1.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas logos">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas, Logos</label>
                    <a href="#job_2" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/2.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas logos websites">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas, Logos, Websites</label>
                    <a href="#job_3" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/3.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_4" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/4.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_5" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/5.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_6" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/6.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_7" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/7.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_8" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/8.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_9" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/9.jpg')}}" alt="">
        </div>
        <div class="portfolio visible sistemas">
            <div class="portfolio-hover">
                <div>
                    <strong>Wordpress</strong>
                    <label>Sistemas</label>
                    <a href="#job_10" class="dialog-open"><i class="far fa-eye"></i></a>
                </div>
            </div>
            <img src="{{ asset('frontend/assets/images/portfolio/10.jpg')}}" alt="">
        </div> --}}
    {{-- </div>
</section> --}}
{{-- End portfolio --}}

{{-- clientes --}}
{{-- <div class="row clientes">
    <div class="content">
        <p>Veja alguns de nossos clientes</p>
        <ul>
            <li><i class="fab fa-angrycreative"></i></li>
            <li><i class="fab fa-windows"></i></li>
            <li><i class="fab fa-wordpress"></i></li>
            <li><i class="fab fa-weibo"></i></li>
            <li><i class="fab fa-wpbeginner"></i></li>
            <li><i class="fab fa-xbox"></i></li>
        </ul>
    </div>
</div> --}}
{{-- end clientes --}}

{{-- blog --}}
{{-- <section class="section" id="blog">
    <header class="section-header">
        <div class="content">
            <h1><span>Blog</span></h1>
            <p class="tagline">
                Saíba mais de tudo o que acontece e as novidades das tecnologias mais mordernas do mercado atual. Confira isso e muito mais no nosso Blog.
            </p>
        </div>
    </header>

    <div class="row blog">
        <div class="content">
            <article class="blog-item">
                <div class="blog-item-thumb">
                    <span>01 agosto de 2020</span>
                    <span><i class="fas fa-comment-dots"></i> 10</span>
                    <img src="{{ asset('frontend/assets/images/blog/1.png')}}" alt="">
                </div>
                <div class="content">
                    <h2>Sites estáticos e dinâmicos</h2>
                    <p>São aqueles sites que não possuem banco de dados e nem ferramentas para gerenciamentos de conteúdos...</p>
                    <p class="blog-link"><a href="#">Ler mais</a></p>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-thumb">
                    <span>01 agosto de 2020</span>
                    <span><i class="fas fa-comment-dots"></i> 11</span>
                    <img src="{{ asset('frontend/assets/images/blog/2.png')}}" alt="">
                </div>
                <div class="content">
                    <h2>Termos e definições do CSS</h2>
                    <p>Devemos ser consistentes no uso dos termos no que diz respeito ao CSS. Muitas coisas são bastante fáceis para a maioria rientes, mas...</p>
                    <p class="blog-link"><a href="#">Ler mais</a></p>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-thumb">
                    <span>01 agosto de 2020</span>
                    <span><i class="fas fa-comment-dots"></i> 12</span>
                    <img src="{{ asset('frontend/assets/images/blog/3.jpg')}}" alt="">
                </div>
                <div class="content">
                    <h2>O que é HTML?</h2>
                    <p>Então, HTML é um tipo especial de documento de texto que é usado pelos navegadores da Web para apresentar textos e gráficos...</p>
                    <p class="blog-link"><a href="#">Ler mais</a></p>
                </div>
            </article>

            <article class="blog-item">
                <div class="blog-item-thumb">
                    <span>01 agosto de 2020</span>
                    <span><i class="fas fa-comment-dots"></i> 15</span>
                    <img src="{{ asset('frontend/assets/images/blog/4.png')}}" alt="">
                </div>
                <div class="content">
                    <h2>Breve história do HTML</h2>
                    <p>Nos primeiros cinco anos (1990-1995), o HTML passou por várias revisões e experimentou várias extensões, hospedadas primeiramente...</p>
                    <p class="blog-link"><a href="#">Ler mais</a></p>
                </div>
            </article>
        </div>
    </div>
</section> --}}
{{-- End blog --}}

{{-- contato --}}
<section class="section bg-gray-100" id="contato">
    <header class="section-header">
        <div class="content">
            <h1><span>Contato</span></h1>
            <p class="tagline">
                Queremos muito ouvir você, então por que não nos enviar um e-mail? Entraremos em contato com você o mais breve possível.
            </p>
        </div>
    </header>

    <div class="row py-8 text-center font-extrabold text-2xl">
        <div class="content">
            <p><span>lumus@lumusambiental.com.br</span></p>
            <p><span>   81 9 9900 1276</span> </p>
            {{-- Rua Ouricuri, 90 - Santo Antônio<br> Igarassu - PE --}}
        </div>
    </div>

    {{-- <div class="row contato-form">
        <div class="content">
            <p><i class="fab fa-wpforms"></i></p>
            <form action="">
                <div>
                    <label>
                        <span>Nome</span>
                        <input type="text" name="nome" />
                    </label>
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" />
                    </label>
                    <label>
                        <input type="checkbox" name="nome" />
                        <span>Deseja receber novidades e promoções?</span>
                    </label>
                </div>
                <div>
                    <label>
                        <span>Mensagem</span>
                        <textarea name="mensagem"></textarea>
                    </label>
                    <button>
                        <i class="far fa-envelope"></i>
                    </button>
                </div>
            </form>
        </div>
    </div> --}}
</section>
{{-- End contato --}}


{{-- <div class="bg-gray-100">
	
		<div class="container w-full max-w-6xl mx-auto px-2 py-8">
			<div class="flex flex-wrap -mx-2">
                @foreach($posts as $post)
                <div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-gray-200 rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="bg-red-900 no-underline hover:no-underline">
								<img src="{{ url('storage').'/'.$post->image }}" class="h-48 w-full rounded-t shadow-lg">
								<div class="p-4 h-auto md:h-12">	
									<p class="text-green-600 text-xs md:text-sm text-extrabold uppercase">{{ $post->title }}</p>
								</div>
						</a>
					</div>
				</div>
                @endforeach

            </div>
        </div>

</div> --}}

{{-- <footer>
    <div class="container mx-auto bg-gray-600">
        <div class="flex space-x-4 text-center text-white">
            <div class="flex-1 self-center text-3xl">
                <a href=""><i class="p-2 fab fa-facebook-f"></i></a>
                <a href=""><i class="p-2 fab fa-instagram"></i></a>
                <a href=""><i class="p-2 fab fa-linkedin-in"></i></a>
            </div>
            <div class="flex-1 p-8">
                <a href="">
                    <img class="h-20 ml-20" src="{{ asset('frontend/assets/images/logo-lumus-720-250-fr-br.png') }}">
                </a>
            </div>
            <div class="flex-1 self-center">
                <p>Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer> --}}





<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>

</body>

</html>
