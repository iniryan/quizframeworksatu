<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Framework Satu - RYAN ADI</title>
    <link rel="stylesheet" href="{{ ('assets/css/styles.css') }}">
</head>
<body>
    
<header class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        
        <div class="logo me-auto">
            <h1>
                <a href="{{ url('/') }}">RyanAdi.</a>
            </h1>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/') }}" class="nav-link">Beranda</a></li>
                <li><a href="{{ url('/about') }}" class="nav-link">Tentang</a></li>
                <li><a href="{{ url('/berita') }}" class="nav-link">Berita</a></li>
            </ul>
        </nav>

    </div>
</header>