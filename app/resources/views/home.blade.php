@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <section class="welcome-banner">
        <div class="welcome-content">
            <p class="eyebrow">Bienvenue</p>
            <h1>Bienvenue sur Connect App</h1>
            <p class="welcome-description">
                Un espace simple pour découvrir nos pages et rester connecté.
            </p>
            <div class="welcome-actions">
                <a href="{{ route('hello') }}" class="button button-light">
                    Découvrir la page Hello
                </a>
                <a href="{{ route('etudiant') }}" class="button button-outline">
                    Espace étudiant
                </a>
            </div>
        </div>
    </section>

    <section class="pages-section" aria-labelledby="pages-title">
        <div class="section-heading">
            <p class="eyebrow eyebrow-dark">Explorer</p>
            <h2 id="pages-title">Accédez rapidement à vos pages</h2>
        </div>
        <div class="page-cards">
            <a href="{{ route('hello') }}" class="page-card">
                <span class="card-icon" aria-hidden="true">H</span>
                <h3>Hello</h3>
                <p>Une page de bienvenue simple et chaleureuse.</p>
                <span class="card-link">Voir la page <span aria-hidden="true">&rarr;</span></span>
            </a>
            <a href="{{ route('etudiant') }}" class="page-card">
                <span class="card-icon card-icon-amber" aria-hidden="true">É</span>
                <h3>Étudiant</h3>
                <p>Retrouvez votre espace et votre message de bienvenue.</p>
                <span class="card-link">Voir la page <span aria-hidden="true">&rarr;</span></span>
            </a>
        </div>
    </section>
@endsection
