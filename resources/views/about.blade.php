@extends('layouts.app')

@section('title', 'About — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">🌸 GET TO KNOW ME</span>
    <h1 class="section-title">About</h1>
    <p class="section-subtitle">Host live, content creator, and public speaker based in Sidoarjo.</p>
</div>

<div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 4rem; align-items: center;">
    <div style="text-align: center;">
        <!-- Foto diva-2.jpg, tanpa frame, gradasi -->
        <div style="border-radius: 32px; overflow: hidden; background: linear-gradient(145deg, rgba(232, 141, 141, 0.15), rgba(232, 141, 141, 0.05));">
            <img src="{{ asset('images/diva-2.jpg') }}" alt="Diva" style="width: 100%; max-width: 320px; height: auto; aspect-ratio: 1/1; object-fit: cover; display: block; margin: 0 auto; border-radius: 32px;">
        </div>
    </div>
    <div>
        <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem;">Diva Amalia</h3>
        <p style="color: #E88D8D; margin-bottom: 1.5rem;">Mahasiswa D3 Teknologi Multimedia Broadcasting · PENS</p>
        <p style="color: #6B5B4F;">Berpengalaman sebagai MC profesional, moderator, host live di berbagai platform, serta voice over talent. Memiliki kemampuan komunikasi yang kuat, percaya diri di depan publik, dan mampu membangun engagement audiens melalui pendekatan konten yang kreatif dan autentik.</p>
        <p style="color: #6B5B4F; margin-top: 1rem;">Saat ini aktif sebagai host live dan content creator, dengan fokus menciptakan pengalaman menonton yang interaktif dan meningkatkan koneksi brand dengan audiens.</p>
        <hr style="margin: 2rem 0; border-color: #F0E0E0;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div><span style="font-size: 0.75rem; color: #B8A0A0;">PHONE</span><p class="fw-bold">0881-0270-67545</p></div>
            <div><span style="font-size: 0.75rem; color: #B8A0A0;">EMAIL</span><p class="fw-bold">divamliaaa@gmail.com</p></div>
            <div><span style="font-size: 0.75rem; color: #B8A0A0;">LOCATION</span><p class="fw-bold">Sidoarjo, Indonesia</p></div>
            <div><span style="font-size: 0.75rem; color: #B8A0A0;">LANGUAGES</span><p class="fw-bold">Indonesian, English</p></div>
        </div>
    </div>
</div>
@endsection