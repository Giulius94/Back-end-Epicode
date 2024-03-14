@extends('templates.layout')
@section('title', 'Detail Libro')

@section('content')
    <div class="row g-0">
        <div class="col-md-4">
            <img src="https://static.vecteezy.com/ti/vettori-gratis/p1/20263873-libro-aperto-su-sfondo-bianco-stile-di-disegno-al-tratto-disegno-gratuito-vettoriale.jpg" class="img-fluid rounded-start" alt="{{$libri->title}}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$libri->title}}</h5>
                <p class="card-text">Tot.Pagine{{$value->pages}} Anno Pubblicazione: {{$libri->year}}</p>
                <p class="card-text"><small class="text-body-secondary">{{$libri->nome_autore}}</small></p>
                <p class="card-text"><small class="text-body-secondary">{{$libri->nome_categoria}}</small></p>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-outline-dark d-block" href="/">Back</a>
            </div>
        </div>
    </div>
@endsection