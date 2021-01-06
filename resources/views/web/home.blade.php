@extends('web.master.master')

@section('content')
 
<div class="main_slide d-none d-sm-block">
    <div class="owl-carousel" id="carousel_principal">
        @foreach($carousels as $carousel)
            <div class="owl-lazy" data-src="{{ url('storage').'/'.$carousel->image }}">

                <div class="row align-items-center" style="height: 100%;">
                    <div class="owl-caption col-lg-8">
                        <p class="owl-title">{{ $carousel->title }}</p>
                        <p class="owl-subtitle">{{ $carousel->description }}</p>
                    </div>
                </div>
            </div>   
        @endforeach  
    </div>
</div> 

<section class="main_properties py-5">
        <div class="container">
            <header class="d-flex justify-content-between align-items-center border-bottom border-front mb-5">
                <h2 class="text-front">Alguns dos nossos serviços</h2>
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

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-8">

                
                
            </div>
        </div>
    </div>
</div>