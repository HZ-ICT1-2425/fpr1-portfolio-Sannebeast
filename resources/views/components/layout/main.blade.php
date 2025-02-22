<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white">
    <ul>
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a></li>
        <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a></li>
        <li><a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'active' : '' }}">Blog</a></li>
        <p style="color: white; margin-left: 776px;">Sanne Jimkes</p>
        <img class="profile-pic" alt="profile pic" src="images/karate-pv.jpg">
    </ul>
</nav>

{{-- Content --}}
<section class="section">
    {{ $slot }}
</section>

{{-- Footer --}}
<footer>
    <small>©
        <script>document.write(new Date().getFullYear())</script> Website of Sanne Jimkes
    </small>
</footer>

</body>
</html>
