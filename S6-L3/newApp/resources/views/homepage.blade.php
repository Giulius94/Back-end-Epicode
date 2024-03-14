<?php

print_r($libri);

?>

@extends ('templates.layout')

@section('title', 'Ecco un bel titolone')

@section('content')

@if($libri)
<div class="row row-cols-1 row-cols-md-3 g-4">

    @foreach($libri as $key => $value)
    <div class="col">
    <div class="card">
        <img src="https://static.vecteezy.com/ti/vettori-gratis/p1/20263873-libro-aperto-su-sfondo-bianco-stile-di-disegno-al-tratto-disegno-gratuito-vettoriale.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$value->title}}</h5>
        <p class="card-text">Tot.Pagine{{$value->pages}} Anno Pubblicazione: {{$value->year}}</p>
        <p class="card-text"><small class="text-body-secondary">{{$value->nome_autore}}</small></p>
        <p class="card-text"><small class="text-body-secondary">{{$value->nome_categoria}}</small></p>
        <a type="button" class="btn btn-outline-info" href="/books?id={{$value->id}}">Info</a>
        <a type="button" class="btn btn-outline-warning" href="/books/{{$value->id}}/edit">Edit</a>
        <a type="button" class="btn btn-outline-danger" href="/books/{{$value->id}}/destroy">Delete</a>
        </div>
    </div>
    </div>
  @endforeach
</div>

@endif

@endsection
