@extends('web.master.master')

@section('content')


    <div class="main_slide d-none d-sm-block" style="background-color: blueviolet">  
    @foreach($carousels as $carousel)
        {{-- <img src="{{ url('storage').'/'.$carousel->image }}" alt="" style="height: 532px; width: 100%">                 --}}
    <div style="background-image: {{ url('storage').'/'.$carousel->image }}"></div>



        <div class="row align-items-center" style="height: 100%;">
            <div class="col-lg-8">
                <p class="main_slide_content text-white">Encontre o <b>Imóvel ideal</b> para você e <b>sua
                        família</b>
                    morar na praia!</p>
                <a href="{{ route('login') }}" class="btn btn-front btn-lg text-white">Quero <b>Alugar</b>!</a>
                <a href="{{ route('login') }}" class="btn btn-front btn-lg text-white">Quero <b>Comprar</b>!</a>
            </div>
        </div>


    {{-- </div> --}}

    @endforeach
    
        
        <div class="container" style="height: 100%;">

            <div class="row align-items-center" style="height: 100%;">
                <p>Onde vamos parar</p>
            </div>

        </div>

    </div>




    <div class="main_slide d-none d-sm-block">
        <div class="container" style="height: 100%;">
            @foreach($carousels as $carousel)
                {{-- <div class="owl-lazy" data-src="{{ url('storage').'/'.$carousel->image }}"> --}}
                    {{-- <div class="owl-caption">
                        <p class="main_slide_content text-white"><strong>{{ $carousel->title }}</strong></p>
                        <p>{{ $carousel->description }}</p>
                    </div> --}}
                {{-- </div>    --}}
                {{-- <img src="{{ url('storage').'/'.$carousel->image }}" alt="" style="height: 532px; width: 100%"> --}}
            @endforeach 
        </div>
    </div>

    <div class="main_slide d-none d-sm-block">
                   
        
        <div class="container" style="height: 100%;">

        <div class="row align-items-center" style="height: 100%;">

            {{-- Carrossel Principal --}}
            <div class="owl-carousel" id="carousel_principal">
                @foreach($carousels as $carousel)
                    <div class="owl-lazy" data-src="{{ url('storage').'/'.$carousel->image }}">
                        <div class="owl-caption">
                            <p class="main_slide_content text-white"><strong>{{ $carousel->title }}</strong></p>
                            <p>{{ $carousel->description }}</p>
                        </div>
                    </div>   
                @endforeach  
            </div>
            {{-- End Carrossel Principal --}}

        </div>


            {{-- <img src="{{ url('storage').'/'.$carousel->image }}" alt=""> --}}
            {{-- <div class="row align-items-center" style="height: 100%;"
            style="background: {{ url('storage').'/'.$carousel->image }} no-repeat; background-size: cover;">
                <div class="col-lg-8">
                    <p class="main_slide_content text-white">Encontre o <b>Imóvel ideal</b> para você e <b>sua
                            família</b>
                        morar na praia!</p>
                    <a href="" class="btn btn-front btn-lg text-white">Quero <b>Alugar</b>!</a>
                    <a href="" class="btn btn-front btn-lg text-white">Quero <b>Comprar</b>!</a>
                </div>
            </div> --}}
        </div>

        
    </div>

    <section class="main_list_group py-5 bg-light">
        <div class="container">
            <div class="p-4 border-bottom border-front">
                <h1 class="text-center">Ambiente no seu <span class="text-front"><b>estilo</b></span></h1>
                <p class="text-center text-muted mb-0 h4">Encontre o imóvel com a experiência que você quer viver</p>
            </div>

            {{-- <div class="main_list_group_item row mt-5 d-flex justify-content-around">
                <article class="main_list_group_items_item col-12 col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('web.experienceCategory', ['category' => 'cobertura']) }}">
                        <div class="d-flex align-items-center justify-content-center"
                             style="background: url('frontend/assets/images/home/cobertura_oto_1.jpg') no-repeat; background-size: cover;">
                            <h2>Cobertura</h2>
                        </div>
                    </a>
                </article>
            </div> --}}

        </div>
    </section>

    <section class="main_properties py-5">
        <div class="container">
            <header class="d-flex justify-content-between align-items-center border-bottom border-front mb-5">
                <h1 class="text-front">À Venda</h1>
                <a href="" class="text-front">Ver mais</a>
            </header>

            <div class="row">
                @foreach($posts as $post)                
                
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <article class="card main_properties_item">
                        <div class="img-responsive-16by9">
                            <a href="">
                                <img src="{{ url('storage').'/'.$post->image }}" alt="" class="card-img-top">
                            </a>
                        </div>
                        <div class="card-body">
                            <h2><a href="" class="text-front">{{ $post->title }}</a>
                            </h2>
                            <p class="main_properties_item_category"></p>
                        </div>
                    </article>
                </div>

                @endforeach

            </div>
        </div>

    </section>

@endsection