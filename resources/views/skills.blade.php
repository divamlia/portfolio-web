@extends('layouts.app')

@section('title', 'Skills — Diva Amalia')

@section('content')
<div class="text-center">
    <span class="section-label">⚡ EXPERTISE</span>
    <h1 class="section-title">Skills</h1>
    <p class="section-subtitle">Hard skills & soft skills that I bring to every project.</p>
</div>

<div class="grid-2">
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1.5rem;"><i class="fas fa-code me-2"></i> Hard Skills</h3>
        <div class="grid-2" style="gap: 1rem;">
            <ul style="padding-left: 1.2rem; color: #6B5B4F;">
                <li>Public Speaking</li>
                <li>Live Hosting</li>
                <li>Content Creation</li>
                <li>Voice Over</li>
            </ul>
            <ul style="padding-left: 1.2rem; color: #6B5B4F;">
                <li>Script Writing</li>
                <li>Social Media Management</li>
                <li>Adobe Premiere</li>
                <li>CapCut</li>
            </ul>
        </div>
    </div>
    
    <div class="card-custom">
        <h3 style="font-family: 'Playfair Display', serif; color: #E88D8D; margin-bottom: 1.5rem;"><i class="fas fa-heart me-2"></i> Soft Skills</h3>
        <div class="grid-2" style="gap: 1rem;">
            <ul style="padding-left: 1.2rem; color: #6B5B4F;">
                <li>Communication</li>
                <li>Confidence</li>
                <li>Leadership</li>
            </ul>
            <ul style="padding-left: 1.2rem; color: #6B5B4F;">
                <li>Teamwork</li>
                <li>Problem Solving</li>
                <li>Adaptability</li>
            </ul>
        </div>
    </div>
</div>
@endsection