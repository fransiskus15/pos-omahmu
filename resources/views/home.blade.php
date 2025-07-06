@extends('layouts.app')

@section('title', 'Aplikasi Point Of Sale - OmahMU')

@section('content')
<style>
html,
body {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

.landing-bg {
    min-height: 100vh;
    width: 100vw;
    position: relative;
    background: radial-gradient(ellipse at bottom, #23243a 0%, #18111a 100%);
    color: #fff;
    font-family: 'Poppins', Arial, sans-serif;
    box-sizing: border-box;
}

.navbar-landing {
    width: 100vw;
    max-width: 100vw;
    box-sizing: border-box;
    padding: 1.5rem 0 1rem 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: transparent;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
}

.navbar-landing .brand {
    font-weight: 700;
    font-size: 1.3rem;
    letter-spacing: 1px;
    color: #fff;
    margin-left: 2.5rem;
}

.navbar-landing .nav-menu {
    display: flex;
    gap: 2rem;
    margin-right: 2.5rem;
    align-items: center;
}

.navbar-landing .nav-menu a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.2s;
}

.navbar-landing .nav-menu a:hover {
    color: #e0aaff;
}

.navbar-landing .nav-icons {
    display: flex;
    gap: 1rem;
    margin-left: 1.5rem;
}

.navbar-landing .nav-icons a {
    color: #fff;
    font-size: 1.1rem;
    transition: color 0.2s;
}

.navbar-landing .nav-icons a:hover {
    color: #e0aaff;
}

.hero-section {
    min-height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-top: 7rem;
    padding-bottom: 2rem;
    box-sizing: border-box;
}

.hero-title {
    font-size: 2.7rem;
    font-weight: 800;
    background: linear-gradient(90deg, #e040fb 20%, #7f7fd5 80%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    margin-bottom: 0.5rem;
    letter-spacing: 1px;
}

.hero-subtitle {
    font-size: 2.2rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 1.2rem;
    letter-spacing: 2px;
}

.hero-desc {
    color: #e0e0e0;
    font-size: 1.08rem;
    max-width: 540px;
    margin: 0 auto 2.2rem auto;
    line-height: 1.7;
    text-align: center;
}

.hero-btns {
    display: flex;
    gap: 1.2rem;
    justify-content: center;
    margin-bottom: 2.5rem;
}

.hero-btn {
    padding: 0.7rem 2.2rem;
    border-radius: 30px;
    border: 2px solid #e0aaff;
    background: transparent;
    color: #fff;
    font-weight: 600;
    font-size: 1.08rem;
    transition: 0.2s, color 0.2s;
    cursor: pointer;
    outline: none;
}

.hero-btn.primary {
    background: linear-gradient(90deg, #e040fb 20%, #7f7fd5 80%);
    color: #fff;
    border: none;
    box-shadow: 0 2px 16px 0 rgba(224, 170, 255, 0.10);
}

.hero-btn.primary:hover {
    background: #fff;
    color: #7f7fd5;
}

.hero-btn.secondary:hover {
    background: #e0aaff;
    color: #23243a;
}

.hero-logo {
    margin-top: 2.5rem;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hero-logo img {
    width: 180px;
    max-width: 80vw;
    opacity: 0.92;
    margin-bottom: 0.7rem;
}

.hero-logo span {
    font-size: 1.1rem;
    color: #e0e0e0;
    letter-spacing: 2px;
}

<blade media|%20(max-width%3A%20600px)%20%7B%0D>.navbar-landing .brand {
    margin-left: 1rem;
}

.navbar-landing .nav-menu {
    margin-right: 1rem;
    gap: 1rem;
}

.hero-title {
    font-size: 1.5rem;
}

.hero-subtitle {
    font-size: 1.2rem;
}

.hero-section {
    padding-top: 5rem;
}

.hero-logo img {
    width: 120px;
}

.container,
.container-fluid {
    max-width: 100vw !important;
    width: 100vw !important;
    padding: 0 !important;
    margin: 0 !important;
}

body,
html {
    background: none !important;
}
</style>
<div class="landing-bg">
    <nav class="navbar-landing">
        <div class="brand">OmaMU</div>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="#about">About me</a>
            <a href="#contact">Contact</a>
            <div class="nav-icons">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-github"></i></a>
            </div>
        </div>
    </nav>
    <section class="hero-section">
        <div class="hero-title">Aplikasi <span
                style="background: linear-gradient(90deg,#e040fb,#7f7fd5);-webkit-background-clip:text;-webkit-text-fill-color:transparent;">Point
                Of Sale</span></div>
        <div class="hero-subtitle">POS</div>
        <div class="hero-desc">
            Sekarang saatnya pindah ke sistem kasir online yang praktis!<br>
            Aplikasi POS Angkringan OmahMU bantu kelola penjualan, stok, laporan, sampai pemesanan online—all in one.
            Cepat, rapi, dan nggak bikin pusing!
        </div>
        <div class="hero-btns">
            <a href="{{ url('/login') }}" class="hero-btn primary">Get started</a>
            <a href="#about" class="hero-btn secondary">About me</a>
        </div>
        <div class="hero-logo">
            <img src="https://i.ibb.co/6b7n6Qw/omamu-logo.png" alt="Logo OmaMU"
                onerror="this.src='https://dummyimage.com/180x80/23243a/e0aaff&text=OMAMU'">
            <span>ANGKRINGAN OMAMU</span>
        </div>
    </section>
</div>
<!-- Pastikan Bootstrap Icons sudah di-load di layout utama -->
@endsection