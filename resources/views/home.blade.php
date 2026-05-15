@extends('layouts.app')

@section('title', 'Fadhli Muhammad — Portfolio')
@section('home_active', ' class="active"')

@section('content')

<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <p class="greeting">👋 Halo, saya</p>
                <h1>Fadhli <span>Muhammad</span></h1>
                <p class="tagline">Mahasiswa Rekayasa Perangkat Lunak | Backend & Game Developer</p>
                <p class="info-line"><strong>Domisili:</strong> Cirebon</p>
                <p class="info-line"><strong>Status:</strong> Mahasiswa RPL Semester 4</p>
                <p class="info-line"><strong>Panggilan:</strong> Fadhli</p>
                <div class="hero-actions">
                    <a href="{{ url('/proyek') }}" class="btn btn-primary">Lihat Proyek →</a>
                    <a href="{{ url('/kontak') }}" class="btn btn-outline">Hubungi Saya</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/Profile_Pribadi.jpeg') }}" alt="Fadhli Muhammad">
            </div>
        </div>
    </div>
</section>

<section class="section" id="tentang">
    <div class="container">
        <h2 class="section-title">Tentang Saya</h2>
        <p class="section-subtitle">Mengenal saya lebih dekat</p>
        <div class="about-grid">
            <div class="about-card">
                <p>Saya adalah mahasiswa Rekayasa Perangkat Lunak yang memiliki ketertarikan mendalam pada pengembangan sistem backend, integrasi IoT, dan pembuatan game mekanik.</p>
            </div>
            <div class="about-card">
                <p>Menggabungkan kreativitas dan logika terstruktur untuk menciptakan ekosistem digital yang komprehensif. Visi saya adalah terus mengembangkan keahlian dalam membangun arsitektur web yang tangguh dan efisien, sekaligus mengeksplorasi mekanik permainan yang interaktif untuk menghadirkan pengalaman pengguna yang maksimal.</p>
            </div>
        </div>
    </div>
</section>

<section class="section" id="keahlian">
    <div class="container">
        <h2 class="section-title">Keahlian Teknis</h2>
        <p class="section-subtitle">Teknologi dan tools yang saya kuasai</p>
        <div class="skills-grid">
            <div class="skill-category">
                <h3><span class="icon">⚙️</span> Backend</h3>
                <div class="skill-tags">
                    <span class="skill-tag">PHP (Laravel)</span>
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">SQL</span>
                </div>
            </div>
            <div class="skill-category">
                <h3><span class="icon">🎮</span> Game Dev</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Luau (Roblox Studio)</span>
                </div>
            </div>
            <div class="skill-category">
                <h3><span class="icon">🔌</span> Hardware</h3>
                <div class="skill-tags">
                    <span class="skill-tag">IoT (Sensor)</span>
                    <span class="skill-tag">CoAP</span>
                    <span class="skill-tag">MQTT</span>
                    <span class="skill-tag">Hardware Troubleshooting</span>
                </div>
            </div>
            <div class="skill-category">
                <h3><span class="icon">🛠️</span> Tools</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">Postman</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">IntelliJ IDEA</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
