@extends('layouts.app')

@section('title', 'Espace étudiant')

@section('content')
    <section class="message-card">
        <div class="card-accent"></div>
        <div class="card-content">
            <span class="card-icon card-icon-amber card-icon-large" aria-hidden="true">É</span>
            <p class="eyebrow eyebrow-amber">Espace étudiant</p>
            @if (isset($nom))
                <h1>Bonjour, {{ $nom }} !</h1>
                <p class="message-description">
                    Bienvenue dans votre espace étudiant. Nous sommes heureux de vous retrouver.
                </p>
            @else
                <h1>Quel est votre nom ?</h1>
                <p class="message-description">
                    Saisissez votre nom pour recevoir un message de bienvenue personnalisé.
                </p>
            @endif

            <form action="{{ route('etudiant.saluer') }}" method="POST" class="student-form">
                @csrf
                <label for="nom">Votre nom</label>
                <input
                    id="nom"
                    name="nom"
                    type="text"
                    value="{{ old('nom', $nom ?? '') }}"
                    maxlength="100"
                    required
                    autocomplete="name"
                    placeholder="Ex. Awa Diop"
                    aria-describedby="nom-error"
                >
                @error('nom')
                    <p id="nom-error" class="form-error">{{ $message }}</p>
                @enderror
                <button type="submit" class="button button-primary">
                    Envoyer
                </button>
            </form>

            <a href="{{ route('home') }}" class="button button-secondary">
                Retour à l’accueil
            </a>
        </div>
    </section>
@endsection
