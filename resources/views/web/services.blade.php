@extends('web.master.master')

@section('content')

    <div class="main_contact py-5 bg-light">
        <div class="container" style="background-color: #f2f2f2">
            <h1 class="text-front text-center">Serviços</h1>

            <section class="content py-5">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="teste col-md-8">
                            <article class="service">
                                <div class="image-service col-md-4 text-center">
                                    <img src="{{ url('storage').'/'.$post->image }}" alt="" class="img-service">
                                </div>
                            </article>
                            <div class="description-service col-md-8">
                                <h2 class="title-service">{{ $post->title }}</h2>
                                <p class="description-service">{{ $post->content }}</p>

                                <a href="" class="btn-service">Ver mais</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">

                </div>
            </section>

        </div>
    </div>

@endsection
