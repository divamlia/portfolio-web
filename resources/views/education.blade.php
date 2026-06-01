@extends('layouts.app')

@section('title', 'Education — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">🎓 ACADEMIC</span>
    <h1 class="section-title">Education</h1>
    <p class="section-subtitle">My academic journey & achievements.</p>
</div>

<div class="grid-2">
    <div class="card-custom">
        <div style="font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 600;">Politeknik Elektronika Negeri Surabaya</div>
        <div style="color: #E88D8D; font-size: 0.85rem; margin: 0.5rem 0;">D3 Teknologi Multimedia Broadcasting</div>
        <div style="font-size: 0.75rem; color: #B8A0A0; margin-bottom: 1rem;">2024 – Present</div>
        <ul style="padding-left: 1.2rem; color: #6B5B4F;">
            <li>IPK: 3.66 (Semester 3)</li>
            <li>Peringkat 1 Semester 3</li>
        </ul>
    </div>
    
    <div class="card-custom">
        <div style="font-family: 'Playfair Display', serif; font-size: 1.3rem; font-weight: 600;">SMK Muhammadiyah 1 Taman</div>
        <div style="color: #E88D8D; font-size: 0.85rem; margin: 0.5rem 0;">Desain Interior & Teknik Furnitur</div>
        <div style="font-size: 0.75rem; color: #B8A0A0; margin-bottom: 1rem;">2021 – 2024</div>
    </div>
</div>
@endsection