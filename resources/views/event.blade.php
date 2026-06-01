@extends('layouts.app')

@section('title', 'Event — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">🎤 ON STAGE & ON AIR</span>
    <h1 class="section-title">Event & Public Speaking</h1>
    <p class="section-subtitle">MC, moderator, narasumber, voice over.</p>
</div>

<!-- Foto Event -->
<div class="grid-2" style="margin-bottom: 3rem;">
    <!-- Kiri: Moderator DTMK Expo 2025 - pakai event-1.jpg -->
    <div class="gallery-item">
        <img src="{{ asset('images/event-1.jpg') }}" alt="Moderator DTMK Expo" style="height: 350px; width: 100%; object-fit: cover;">
        <div class="gradient-caption">
            <p style="color: white; font-weight: 500;">🎙️ Moderator DTMK Expo PENS 2025</p>
        </div>
    </div>
    
    <!-- Kanan: Narasumber Ruang Karir JTV - pakai event-3.jpg -->
    <div class="gallery-item">
        <img src="{{ asset('images/event-3.jpg') }}" alt="Narasumber Ruang Karir JTV" style="height: 350px; width: 100%; object-fit: cover;">
        <div class="gradient-caption">
            <p style="color: white; font-weight: 500;">💬 Narasumber "Ruang Karir" JTV 2025</p>
        </div>
    </div>
</div>

<div class="grid-2">
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1rem;"><i class="fas fa-microphone-alt me-2"></i> Master of Ceremony</h3>
        <ul style="padding-left: 1.2rem; color: #6B5B4F;">
            <li>Sidoarjo Moslem Week (2023)</li>
            <li>Gen Connection DTMK PENS (2025)</li>
            <li>MMB Fest PENS (2025)</li>
            <li>Workshop Fujifilm Photography PENS (2025)</li>
        </ul>
    </div>
    
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1rem;"><i class="fas fa-comments me-2"></i> Moderator & Host</h3>
        <ul style="padding-left: 1.2rem; color: #6B5B4F;">
            <li>Talkshow DTMK Expo PENS (2025, 2026)</li>
            <li>Podcast Sinar PENS (Episode 44 & 46) (2025)</li>
            <li>Host Live Streaming Elly Gallery (2024–2026)</li>
        </ul>
    </div>
    
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1rem;"><i class="fas fa-chalkboard-user me-2"></i> Narasumber / Speaker</h3>
        <ul style="padding-left: 1.2rem; color: #6B5B4F;">
            <li>Public Speaking NextGen Creators MMB PENS (2024)</li>
            <li>Personal Branding Fortasi SMKM1TA (2023)</li>
            <li>Program "Ruang Karir" JTV (2025)</li>
        </ul>
    </div>
    
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1rem;"><i class="fas fa-head-side-vr me-2"></i> Voice Over Talent</h3>
        <ul style="padding-left: 1.2rem; color: #6B5B4F;">
            <li>VO Talent Teaching Factory PENS (2026)</li>
            <li>VO Talent Project "Sistem Notulensi Otomatis" PENS (2026)</li>
        </ul>
    </div>
</div>
@endsection