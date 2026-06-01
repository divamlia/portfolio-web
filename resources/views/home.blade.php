@extends('layouts.app')

@section('title', 'Diva Amalia — Host Live & Content Creator')

@section('content')
<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; padding: 2rem 0 3rem;">
    <div>
        <span class="section-label">✨ HOST LIVE & CONTENT CREATOR</span>
        <h1 style="font-size: 3.5rem; font-weight: 600; line-height: 1.2; margin-bottom: 1.5rem;">
            Hi, I'm <span style="color: #E88D8D; font-style: italic;">Diva.</span><br>
            Let me be your<br>
            <span style="color: #E88D8D; font-style: italic;">live host</span> energy.
        </h1>
        <p style="color: #8A6E6E; margin-bottom: 2rem; font-size: 1.05rem;">Bringing warmth, confidence, and engagement to every live session. Hosting across beauty, fashion, and lifestyle brands — with a touch of professional charm.</p>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="{{ route('experience') }}" class="btn-pink">View My Work</a>
            <a href="#contact" class="btn-outline-pink">Let's Connect</a>
        </div>
        <div style="margin-top: 2rem;">
            <p style="font-size: 0.85rem; color: #B8A0A0;">📍 Sidoarjo, Indonesia</p>
        </div>
    </div>
    
    <!-- FOTO: tanpa frame, bergradasi dengan background -->
    <div style="text-align: center;">
        @if(file_exists(public_path('images/diva.jpg')))
        <div style="border-radius: 32px; overflow: hidden; background: linear-gradient(145deg, rgba(232, 141, 141, 0.25), rgba(232, 141, 141, 0.05)); box-shadow: 0 20px 40px rgba(232, 141, 141, 0.1);">
            <img src="{{ asset('images/diva.jpg') }}" alt="Diva Amalia" style="width: 100%; max-width: 380px; height: auto; aspect-ratio: 1/1; object-fit: cover; display: block; margin: 0 auto; border-radius: 32px; opacity: 0.95; transition: all 0.3s ease;">
        </div>
        @else
        <div style="border-radius: 32px; overflow: hidden; background: linear-gradient(145deg, rgba(232, 141, 141, 0.25), rgba(232, 141, 141, 0.05)); padding: 60px; text-align: center;">
            <i class="fas fa-image" style="font-size: 3rem; color: #E88D8D; opacity: 0.5;"></i>
            <p style="color: #B8A0A0; margin-top: 1rem;">Foto diva.jpg belum ada</p>
        </div>
        @endif
        
        <div style="margin-top: 1.5rem;">
            <h3 style="font-family: 'Playfair Display', serif;">Diva Amalia</h3>
            <p style="color: #E88D8D; font-size: 0.85rem;">Host Live · Content Creator</p>
        </div>
    </div>
</div>

<!-- Experience Preview -->
<section style="padding: 3rem 0;">
    <span class="section-label">✦ MY JOURNEY</span>
    <h2 class="section-title">Work Experience</h2>
    <div class="grid-2" style="margin-top: 2rem;">
        <div class="card-custom">
            <div style="font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 600;">CV. Suwarlandono Fashion Art · Elly Gallery</div>
            <div style="color: #E88D8D; font-size: 0.85rem; margin: 0.5rem 0;">Host Live & Content Creator</div>
            <div style="font-size: 0.75rem; color: #B8A0A0; margin-bottom: 1rem;">Mei 2024 – Januari 2026 · Mei 2026 – Present</div>
            <ul style="padding-left: 1.2rem; color: #6B5B4F; font-size: 0.9rem;">
                <li>Host live multiplatform</li>
                <li>Handle social media sebagai Content Creator</li>
            </ul>
        </div>
        <div class="card-custom">
            <div style="font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 600;">PT. JJTop Cosmindo Jaya</div>
            <div style="color: #E88D8D; font-size: 0.85rem; margin: 0.5rem 0;">Host Live (Multi-brand)</div>
            <div style="font-size: 0.75rem; color: #B8A0A0; margin-bottom: 1rem;">April – Mei 2026</div>
            <ul style="padding-left: 1.2rem; color: #6B5B4F; font-size: 0.9rem;">
                <li>Host untuk Liora Beauty & BeautyTalk Official</li>
                <li>2 brand, 2 pendekatan komunikasi berbeda</li>
            </ul>
        </div>
    </div>
    <div style="text-align: center; margin-top: 2rem;">
        <a href="{{ route('experience') }}" class="btn-outline-pink">View All Experience →</a>
    </div>
</section>

<!-- Skills Preview -->
<section style="padding: 3rem 0;">
    <span class="section-label">✦ WHAT I DO</span>
    <h2 class="section-title">Skills & Expertise</h2>
    <div class="grid-3" style="margin-top: 2rem;">
        <div class="card-custom text-center"><i class="fas fa-microphone-alt" style="font-size: 2rem; color: #E88D8D; margin-bottom: 1rem;"></i><h4>Live Hosting</h4><small style="color: #8A6E6E;">Warm & professional</small></div>
        <div class="card-custom text-center"><i class="fas fa-video" style="font-size: 2rem; color: #E88D8D; margin-bottom: 1rem;"></i><h4>Content Creation</h4><small style="color: #8A6E6E;">Script to screen</small></div>
        <div class="card-custom text-center"><i class="fas fa-chalkboard-user" style="font-size: 2rem; color: #E88D8D; margin-bottom: 1rem;"></i><h4>Public Speaking</h4><small style="color: #8A6E6E;">MC & moderator</small></div>
    </div>
</section>

<!-- Contact CTA -->
<section id="contact" style="text-align: center; background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(8px); border-radius: 40px; margin: 2rem 0; padding: 3rem 2rem;">
    <span class="section-label">✨ LET'S CREATE TOGETHER</span>
    <h2 class="section-title" style="font-size: 2rem;">Ready to elevate your<br>live streaming & content?</h2>
    <a href="mailto:divamliaaa@gmail.com?subject=Hello%20Diva%20-%20Inquiry%20from%20Portfolio" class="btn-pink d-inline-block mt-3" style="padding: 0.8rem 2rem;">
    <i class="fas fa-envelope me-2"></i> divamliaaa@gmail.com
</a>
@endsection