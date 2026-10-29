@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <section class="message-card message-card-centered">
        <span class="card-icon card-icon-large" aria-hidden="true">H</span>
        <p class="eyebrow eyebrow-dark">Un petit bonjour</p>
        <h1>Hello World et bonjour !</h1>
        <p class="message-description">
            Bienvenue sur votre page Hello. Prenez le temps de découvrir le reste de l’espace.
        </p>
        <a href="{{ route('home') }}" class="button button-primary">
            Retour à l’accueil
        </a>
    </section>
@endsection
