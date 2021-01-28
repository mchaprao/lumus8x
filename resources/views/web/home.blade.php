@extends('web.master.master')

@section('content')

    <div class="main_slide d-none d-sm-block">
        <div class="owl-carousel" id="carousel_principal">
            @foreach($carousels as $carousel)
                <div class="owl-lazy" data-src="{{ url('storage').'/'.$carousel->image }}">

                    <div class="row align-items-center" style="height: 100%;">
                        <div class="owl-caption col-lg-68">
                            <p class="owl-title">{{ $carousel->title }}</p>
                            <p class="owl-subtitle">{{ $carousel->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <header class="d-flex justify-content-between align-items-center border-bottom border-front mb-5">
                <h2 class="text-front">Alguns dos nossos serviços</h2>
                <a href="" class="text-front">Ver mais</a>
            </header>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <article class="img-big">
                                <a href="">
                                    <img src="{{ url('storage').'/'.$post->image }}" alt="" class="img-slide-big">

                                    <h1><a href="#" class="text-post">{{ $post->title }}</a></h1>
                                </a>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="slide d-flex">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <article class="img-big">--}}
{{--                            <a href="">--}}
{{--                                <img src="{{ asset('frontend/assets/images/folhas.jpg') }}" alt=""--}}
{{--                                     class="img-slide-big">--}}
{{--                                <h1 class="text-slide">--}}
{{--                                    Folhas Secas--}}
{{--                                </h1>--}}
{{--                            </a>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <article class="img-small">--}}
{{--                            <a href="">--}}
{{--                                <img src="{{ asset('frontend/assets/images/folhas.jpg') }}" alt=""--}}
{{--                                     class="img-slide-small">--}}
{{--                                <h1 class="text-slide">--}}
{{--                                    Folhas Secas 2--}}
{{--                                </h1>--}}
{{--                            </a>--}}
{{--                        </article>--}}
{{--                        <article class="img-small">--}}
{{--                            <a href="">--}}
{{--                                <img src="{{ asset('frontend/assets/images/folhas.jpg') }}" alt=""--}}
{{--                                     class="img-slide-small">--}}
{{--                                <h1 class="text-slide">--}}
{{--                                    Tratamento de Efluentes--}}
{{--                                </h1>--}}
{{--                            </a>--}}
{{--                        </article>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--    </section>--}}


    <!-- <div class="main_property_content py-5">
    <div class="container">
        <div class="row">
            <div class="col-8">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($posts as $post)
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $post->id }}"></li>
                        @endforeach
        </ol>
        <div class="carousel-inner">
@foreach($posts as $post)


        <div class="carousel-item active">
            <img src="{{ url('storage').'/'.$post->image }}" class="d-block w-100" alt="...">
                        </div>

                        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </a>
    </div>
</div>
</div>
</div>
</div> -->

    <article class="main_optin bg-dark text-white py-5">
        <div class="container">
            <div class="row mx-auto" style="max-width: 600px;">
                <h1>Quer ficar por dentro das novidades?</h1>

                <p>Deixe o seu nome e seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre as novidades
                    voltadas ao meio ambiente.</p>

                <form action="">
                    <input type="email" class="form-control" placeholder="Digite seu nome" size="50">
                    <input type="email" class="form-control" placeholder="Digite seu melhor e-mail" size="50">
                    <button type="submit" class="btn btn-front">Me avise!</button>
                </form>
            </div>
        </div>
    </article>


@endsection
