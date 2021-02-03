@extends('web.master.master')

@section('content')

<div class="main_contact py-5 bg-light text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="{{ url('storage').'/'.$post->image }}" alt="" class="img-slide-big">
            </div>
        </div>
        <div class="col-md-3"></div><br/>
        <div class="row">
            <div class="col-md-3"></div><br/>
            <div class="col-md-6">
                <h2 class="text-front">{{ $post->title }}</h2>
                <p>
                    {!! $post->content !!}
                </p>
            </div>
        </div>

    </div>
</div>

{{--<div class="main_contact_types bg-white p-5">--}}
{{--    <div class="container">--}}
{{--        <div class="row text-center">--}}
{{--            <div class="col-12 col-md-4">--}}
{{--                <h2 class="icon-envelope">Por E-mail</h2>--}}
{{--                <p>Nossos atendentes irão entrar em contato com você assim que possível.</p>--}}
{{--                <p class="pt-2"><a href="mailto:lumus@lumusambiental.com.br" class="text-front">lumus@lumusambiental.com.br</a></p>--}}
{{--            </div>--}}

{{--            <div class="col-12 col-md-4">--}}
{{--                <h2 class="icon-phone">Por Telefone | Whatsapp</h2>--}}
{{--                <p>Estamos disponíveis no número abaixo no horário comercial.</p>--}}
{{--                <p class="pt-2 text-front">+55 (81) 9 9900-1276</p>--}}
{{--            </div>--}}

{{--            <div class="col-12 col-md-4">--}}
{{--                <h2 class="icon-share-alt">Redes Sociais</h2>--}}
{{--                <p>Fique por dentro de tudo o que a gente compartilha em nossas redes sociais!</p>--}}
{{--                <p><a href="https://www.facebook.com/lumusambiental" target="_blank" class="btn btn-front icon-facebook icon-notext"></a> <a href="https://twitter.com/lumusambiental" target="_blank" class="btn btn-front icon-twitter icon-notext"></a> <a href="https://www.instagram.com/lumusambiental" target="_blank" class="btn btn-front icon-instagram icon-notext"></a></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
