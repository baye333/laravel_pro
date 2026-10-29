<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f8fafc">
        <title>@yield('title') | Connect App</title>
        @vite('resources/css/simple-pages.css')
    </head>
    <body>
        <div class="site">
            <header class="site-header">
                <nav class="navigation" aria-label="Navigation principale">
                    <a href="{{ route('home') }}" class="brand">
                        <span class="brand-mark">CA</span>
                        <span>Connect App</span>
                    </a>
                    <div class="navigation-links">
                        <a href="{{ route('home') }}" @class(['navigation-link', 'active' => request()->routeIs('home')])>Accueil</a>
                        <a href="{{ route('hello') }}" @class(['navigation-link', 'active' => request()->routeIs('hello')])>Hello</a>
                        <a href="{{ route('etudiant') }}" @class(['navigation-link', 'active' => request()->routeIs('etudiant')])>Étudiant</a>
                    </div>
                </nav>
            </header>

            <main class="main-content">
                @yield('content')
            </main>

            <footer class="site-footer">
                <div class="footer-content">
                    Connect App<span aria-hidden="true">&middot;</span> Simple, proche de vous.
                </div>
            </footer>
        </div>
    </body>
</html>
