<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Diva Amalia — Host Live & Content Creator')</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --bg-white: #FFF9F9;
            --bg-soft: #FFF5F5;
            --text-dark: #2D2D2D;
            --text-muted: #8A6E6E;
            --accent-pink: #E88D8D;
            --accent-hover: #D46B6B;
            --border-light: #F0E0E0;
        }
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: var(--bg-white);
            color: var(--text-dark);
            overflow-x: hidden;
            position: relative;
        }
        
        h1, h2, h3, .serif {
            font-family: 'Playfair Display', serif;
        }
        
        /* === BUBBLE ANIMATION === */
        .bubbles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }
        
        .bubble {
            position: absolute;
            bottom: -100px;
            background: linear-gradient(135deg, rgba(232, 141, 141, 0.15), rgba(232, 141, 141, 0.05));
            border-radius: 50%;
            animation: floatUp 8s infinite ease-in-out;
            box-shadow: 0 0 15px rgba(232, 141, 141, 0.2);
        }
        
        @keyframes floatUp {
            0% {
                transform: translateY(0) scale(0.5);
                opacity: 0;
            }
            20% {
                opacity: 0.6;
            }
            80% {
                opacity: 0.4;
            }
            100% {
                transform: translateY(-120vh) scale(1.2);
                opacity: 0;
            }
        }
        
        /* Navbar */
        .navbar {
            background-color: rgba(255, 249, 249, 0.96);
            backdrop-filter: blur(8px);
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-light);
            position: relative;
            z-index: 10;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            font-size: 1.35rem;
            color: var(--text-dark);
        }
        
        .nav-link {
            font-weight: 500;
            font-size: 0.9rem;
            color: var(--text-muted);
            transition: color 0.2s;
            margin: 0 0.25rem;
        }
        
        .nav-link:hover {
            color: var(--accent-pink);
        }
        
        /* Section Label */
        .section-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--accent-pink);
            font-weight: 500;
            margin-bottom: 1rem;
            display: inline-block;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .section-subtitle {
            color: var(--text-muted);
            margin-bottom: 3rem;
        }
        
        /* Cards */
        .card-custom {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(4px);
            border-radius: 28px;
            padding: 1.8rem;
            transition: all 0.35s ease;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 35px rgba(232, 141, 141, 0.1);
        }
        
        /* Foto tanpa frame - gradasi langsung */
        .img-gradasi {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 28px;
            transition: all 0.4s ease;
            box-shadow: none;
            border: none;
        }
        
        .img-gradasi:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(232, 141, 141, 0.15);
        }
        
        /* Button */
        .btn-pink {
            background: var(--accent-pink);
            color: white;
            padding: 0.7rem 1.8rem;
            border-radius: 40px;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-block;
            text-decoration: none;
            border: none;
        }
        
        .btn-pink:hover {
            background: var(--accent-hover);
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-outline-pink {
            border: 1.5px solid var(--accent-pink);
            background: transparent;
            color: var(--accent-pink);
            padding: 0.6rem 1.6rem;
            border-radius: 40px;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-block;
            text-decoration: none;
        }
        
        .btn-outline-pink:hover {
            background: var(--accent-pink);
            color: white;
        }
        
        /* Grid */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
        
        .grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.8rem;
        }
        
        /* Gallery item */
        .gallery-item {
            position: relative;
            border-radius: 28px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .gallery-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: all 0.4s ease;
            border-radius: 28px;
        }
        
        .gallery-item .gradient-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(45, 45, 45, 0.7), transparent);
            color: white;
            padding: 1.5rem 1rem 0.8rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            border-radius: 0 0 28px 28px;
        }
        
        .gallery-item:hover .gradient-caption {
            transform: translateY(0);
        }
        
        .gallery-item:hover img {
            transform: scale(1.03);
        }
        
        footer {
            border-top: 1px solid var(--border-light);
            padding: 2.5rem 0;
            margin-top: 3rem;
            color: var(--text-muted);
            font-size: 0.85rem;
            position: relative;
            z-index: 10;
            background: rgba(255, 249, 249, 0.95);
        }
        
        .social-link {
            color: var(--text-muted);
            transition: color 0.2s;
            margin: 0 0.75rem;
            font-size: 1.2rem;
        }
        
        .social-link:hover {
            color: var(--accent-pink);
        }
        
        .container {
            position: relative;
            z-index: 5;
        }
        
        @media (max-width: 768px) {
            .grid-2, .grid-3 {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body>

<!-- Bubbles Animation -->
<div class="bubbles" id="bubbles"></div>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Diva Amalia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('experience') }}">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('education') }}">Education</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('event') }}">Event</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('organization') }}">Organization</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('achievements') }}">Achievements</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skills') }}">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a></li>
            </ul>
        </div>
    </div>
</nav>

<main style="margin-top: 80px;">
    <div class="container py-4">
        @yield('content')
    </div>
</main>

<footer>
    <div class="container text-center">
        <p class="mb-2">© 2026 Diva Amalia — Host Live & Content Creator</p>
        <div>
            <a href="https://instagram.com/divamlia" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
            <a href="https://tiktok.com/@divamlia" target="_blank" class="social-link"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.linkedin.com/in/diva-amalia-ba99a7352/?skipRedirect=true" target="_blank" class="social-link"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@divaamalia2304" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
         </div>
        <p class="mt-3 small">
    <a href="https://wa.me/62881027067545" target="_blank" style="color: #8A6E6E; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#E88D8D'" onmouseout="this.style.color='#8A6E6E'">
        <i class="fab fa-whatsapp" style="margin-right: 5px;"></i> 0881-0270-67545
    </a>
    <span style="margin: 0 8px;">|</span>
    <a href="mailto:divamliaaa@gmail.com?subject=Hello%20Diva%20-%20Inquiry%20from%20Portfolio" style="color: #8A6E6E; text-decoration: none; transition: color 0.2s;" onmouseover="this.style.color='#E88D8D'" onmouseout="this.style.color='#8A6E6E'">
        <i class="fas fa-envelope" style="margin-right: 5px;"></i> divamliaaa@gmail.com
    </a>
</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Bubble Animation
    document.addEventListener('DOMContentLoaded', function() {
        const bubblesContainer = document.getElementById('bubbles');
        const bubbleCount = 25;
        
        for (let i = 0; i < bubbleCount; i++) {
            const bubble = document.createElement('div');
            bubble.classList.add('bubble');
            
            const size = Math.random() * 60 + 20;
            bubble.style.width = size + 'px';
            bubble.style.height = size + 'px';
            bubble.style.left = Math.random() * 100 + '%';
            bubble.style.animationDuration = Math.random() * 10 + 6 + 's';
            bubble.style.animationDelay = Math.random() * 10 + 's';
            
            bubblesContainer.appendChild(bubble);
        }
    });
</script>
@stack('scripts')
</body>
</html>