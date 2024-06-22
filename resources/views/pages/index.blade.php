@extends('layouts.app')

@section('hero')
<div class="container-xxl bg-primary hero-header">
    <div class="container px-lg-5">
        <div class="row g-5 align-items-end">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated slideInDown">Website Pendataan Buku Perpustakaan Sekolah Vokasi IPB University</h1>
                <p class="text-white pb-3 animated slideInDown">Memudahkan pengarsipan data buku perpustakaan sekolah vokasi ipb university dalam satu website dalam klasifikasi jenis buku, tahun terbit, penulis dan sebagainya.</p>
                <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Data Buku</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid animated zoomIn" src="{{ asset('img/hero.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Ada apa di perpustakaan?</h1>
                <p class="mb-4">Perpustakaan Sekolah Vokasi IPB menawarkan berbagai macam jenis buku kepada mahasiswa sebagai bahan referensi pembelajaran mahasiswa, maupun menjadikan tempat belajar yang nyaman bagi para mahasiswa dalam menjalankan kegiatan sehari hari.</p>
                <a href="profil.html" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Selengkapnya</a>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ asset('img/ruangan.jpg') }}">
            </div>
        </div>
    </div>
</div>
@endsection
