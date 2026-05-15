@extends('layouts.app')

@section('title', 'Proyek — Fadhli Muhammad')
@section('proyek_active', ' class="active"')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Proyek Saya</h1>
        <p>Karya dan pengalaman selama perjalanan sebagai developer</p>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="projects-grid">

            <div class="project-card">
                <h3>Sistem CRUD Mahasiswa</h3>
                <p>Aplikasi manajemen basis data mahasiswa lengkap dengan antarmuka pengguna grafis.</p>
                <p class="role"><strong>Role:</strong> Backend Programmer</p>
                <div class="tech-stack">
                    <span>Java</span>
                    <span>JDBC</span>
                    <span>Swing</span>
                    <span>SQL</span>
                </div>
                <div class="project-links">
                    <a href="#" target="_blank">🔗 GitHub</a>
                </div>
            </div>

            <div class="project-card">
                <h3>FPP Fishing Game Mechanic</h3>
                <p>Pengembangan mekanik memancing dengan sudut pandang orang pertama (First-Person Perspective) dan animasi bahu yang realistis.</p>
                <p class="role"><strong>Role:</strong> Game Developer</p>
                <div class="tech-stack">
                    <span>Roblox Studio</span>
                    <span>Luau</span>
                </div>
                <div class="project-links">
                    <a href="#" target="_blank">🎮 Lihat Demo</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
