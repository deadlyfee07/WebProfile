@extends('layouts.app')

@section('title', 'Kontak — Fadhli Muhammad')
@section('kontak_active', ' class="active"')

@section('content')

<section class="page-header">
    <div class="container">
        <h1>Kontak & Sosial</h1>
        <p>Jangan ragu untuk menghubungi saya</p>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="label">Email</div>
                    <div class="value"><a href="mailto:mfadhli2173@gmail.com">mfadhli2173@gmail.com</a></div>
                </div>
                <div class="contact-item">
                    <div class="label">WhatsApp</div>
                    <div class="value"><a href="https://wa.me/6281324736035" target="_blank">081324736035</a></div>
                </div>
                <div class="contact-item">
                    <div class="label">GitHub</div>
                    <div class="value"><a href="https://github.com/deadlyfee07" target="_blank">github.com/deadlyfee07</a></div>
                </div>
                <div class="contact-item">
                    <div class="label">CV / Resume</div>
                    <div class="value"><a href="https://drive.google.com/file/d/1ek82b4asxJQn-ANeYnSh8cBrGGCYncZ8/view?usp=sharing" target="_blank">Lihat CV (PDF)</a></div>
                </div>
            </div>

            <div class="contact-form">
                <h3>Kirim Pesan</h3>
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" placeholder="Nama lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="email@contoh.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pesan →</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
