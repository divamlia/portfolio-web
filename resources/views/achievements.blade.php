@extends('layouts.app')

@section('title', 'Achievements — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">🏆 RECOGNITION</span>
    <h1 class="section-title">Achievements</h1>
    <p class="section-subtitle">Awards & competition selections.</p>
</div>

<!-- Foto Award -->
@if(file_exists(public_path('images/award.jpg')))
<div style="text-align: center; margin-bottom: 3rem;">
    <div class="gallery-item" style="max-width: 400px; margin: 0 auto;">
        <img src="{{ asset('images/award.jpg') }}" alt="Award Winner" style="height: 350px; width: 100%; object-fit: cover;">
        <div class="gradient-caption">
            <p style="color: white; font-weight: 500;">Winner Duta SMK Sidoarjo 2021</p>
        </div>
    </div>
</div>
@endif

<div class="grid-3">
    <div class="card-custom text-center">
        <i class="fas fa-trophy" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Winner Putra Putri SMKM1TA</h4>
        <small style="color: #B8A0A0;">2021</small>
    </div>
    <div class="card-custom text-center">
        <i class="fas fa-medal" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Bronze Award English Speech</h4>
        <small style="color: #B8A0A0;">MEA Jatim 2021</small>
    </div>
    <div class="card-custom text-center">
        <i class="fas fa-crown" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Winner Duta SMK Sidoarjo</h4>
        <small style="color: #B8A0A0;">2021</small>
    </div>
    <div class="card-custom text-center">
        <i class="fas fa-award" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Juara Lomba Video Kreatif</h4>
        <small style="color: #B8A0A0;">Fujifilm PENS 2025</small>
    </div>
    <div class="card-custom text-center">
        <i class="fas fa-star" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Finalis Miss Hijab Jawa Timur</h4>
        <small style="color: #B8A0A0;">Tahap 3 (2023)</small>
    </div>
    <div class="card-custom text-center">
        <i class="fas fa-microphone" style="font-size: 2.5rem; color: #E88D8D; margin-bottom: 1rem;"></i>
        <h4>Top 10 English Speech</h4>
        <small style="color: #B8A0A0;">MEA Jatim 2022</small>
    </div>
</div>
@endsection