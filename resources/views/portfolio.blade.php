@extends('layouts.app')

@section('title', 'Portfolio — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">📁 FEATURED WORK</span>
    <h1 class="section-title">Portfolio</h1>
    <p class="section-subtitle">Selected projects & creative works.</p>
</div>

<!-- Portfolio Pilihan (dari CV) -->
<div class="grid-3" style="margin-bottom: 4rem;">
    <div class="card-custom text-center">
        <i class="fas fa-video" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Video NE3 Angkatan 33</h4>
        <small style="color: #8A6E6E;">Koordinator Pelaksana</small>
        <div style="margin-top: 1rem;">
            <a href="https://youtu.be/m7yD7XS5hYs?si=TBpKtCEHFf4v9RjY" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">View →</a>
        </div>
    </div>
    
    <div class="card-custom text-center">
        <i class="fas fa-pen-fancy" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>"Iya Lagi" Video Project</h4>
        <small style="color: #8A6E6E;">Script Writer</small>
        <div style="margin-top: 1rem;">
            <a href="https://drive.google.com/drive/folders/1kNEdrYy-iWlLF2RaypO8bUCye_3_ggcv?usp=sharing" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">View →</a>
        </div>
    </div>
    
    <div class="card-custom text-center">
        <i class="fas fa-film" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Short Movie "Pambali"</h4>
        <small style="color: #8A6E6E;">Producer</small>
        <div style="margin-top: 1rem;">
            <a href="https://drive.google.com/drive/folders/1FqhDLhgghViD4zBGwSXkcQxmBinjM7Rt" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">Watch →</a>
        </div>
    </div>
    
    <div class="card-custom text-center">
        <i class="fas fa-radio" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>"Serasa FM"</h4>
        <small style="color: #8A6E6E;">Producer · Studio Radio</small>
        <div style="margin-top: 1rem;">
            <a href="https://youtube.com/live/YVArqG7uD_U?feature=share" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">Listen →</a>
        </div>
    </div>
    
    <div class="card-custom text-center">
        <i class="fas fa-tv" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>"Chilltalk News"</h4>
        <small style="color: #8A6E6E;">Program Director · Studio TV</small>
        <div style="margin-top: 1rem;">
            <a href="https://www.youtube.com/live/wCCrI8Tl00I?si=JIiiBKQNEPTKK07a" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">Watch →</a>
        </div>
    </div>
    
    <div class="card-custom text-center">
        <i class="fas fa-microphone" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Live Hosting Showreel</h4>
        <small style="color: #8A6E6E;">Best moments compilation</small>
        <div style="margin-top: 1rem;">
            <a href="https://www.tiktok.com/@beautytalk.official/video/7630677737350384903" target="_blank" class="btn-outline-pink" style="padding: 0.4rem 1.2rem; font-size: 0.8rem;">Watch →</a>
        </div>
    </div>
</div>

<!-- Galeri Foto Live Hosting & BTS -->
<div style="margin-top: 2rem;">
    <span class="section-label" style="display: block; text-align: center;">📸 MOMENTS</span>
    <h2 class="section-title" style="text-align: center;">Live Hosting Gallery</h2>
    <div class="grid-3" style="margin-top: 2rem;">
        @if(file_exists(public_path('images/live-hosting-1.jpg')))
        <div class="gallery-item">
            <img src="{{ asset('images/live-hosting-1.jpg') }}" alt="Live Hosting Session 1" style="height: 280px; width: 100%; object-fit: cover;">
            <div class="gradient-caption">
                <p style="color: white; font-weight: 500;">Live Hosting at Elly Gallery</p>
            </div>
        </div>
        @endif

        @if(file_exists(public_path('images/live-hosting-2.jpg')))
        <div class="gallery-item">
            <img src="{{ asset('images/live-hosting-2.jpg') }}" alt="Live Hosting Session 2" style="height: 280px; width: 100%; object-fit: cover;">
            <div class="gradient-caption">
                <p style="color: white; font-weight: 500;">Beauty Brand Live Session</p>
            </div>
        </div>
        @endif

        @if(file_exists(public_path('images/bts-konten-1.jpg')))
        <div class="gallery-item">
            <img src="{{ asset('images/bts-konten-1.jpg') }}" alt="Behind The Scene" style="height: 280px; width: 100%; object-fit: cover;">
            <div class="gradient-caption">
                <p style="color: white; font-weight: 500;">Behind The Scene Content Creation</p>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- External Portfolio Links -->
<section style="margin-top: 3rem; text-align: center; background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(8px); border-radius: 30px; padding: 2rem;">
    <span class="section-label">🔗 MORE WORK</span>
    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 1.5rem;">See my complete portfolio</h3>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
        <a href="https://drive.google.com/drive/u/1/folders/1hjAbQZv_0BGQKrN2TRTrBrZ-qTpCPjQ0" target="_blank" class="btn-pink" style="padding: 0.6rem 1.5rem;">📁 Google Drive</a>
        <a href="https://www.youtube.com/@divaamalia2304" target="_blank" class="btn-outline-pink" style="padding: 0.6rem 1.5rem;">▶️ YouTube Channel</a>
        <a href="https://instagram.com/divamlia" target="_blank" class="btn-outline-pink" style="padding: 0.6rem 1.5rem;">📸 Instagram Highlights</a>
    </div>
</section>
@endsection