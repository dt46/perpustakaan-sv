@extends('layouts.app')

@section('hero')
<div class="container-xxl py-5 bg-primary hero-header">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated slideInDown">Profil</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Halaman</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Profil</li>
                    </ol>
                </nav>
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
                <h1 class="mb-5">Perpustakaan Sekolah Vokasi</h1>
                <p class="mb-4">Perpustkaan Sekolah Vokasi IPB University merupakan fasilitas yang disediakan oleh fakultas Sekolah Vokasi agar mahasiswa dapat mencari sumber referensi dan menjadikan tempat yang nyaman bagi para mahasiswanya untuk belajar</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/ruangan.jpg">
            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Fasilitas</h1>
                <p class="mb-4">Perpustakaan Sekolah Vokasi memiliki berbagai macama saran yang dapat digunakan oleh mahasiswanya antara lain yaitu ruang belajar mengajar, kumpulan buku yang terdiri dari fiksi dan non fiksi hingga kumpulan tugas akhir yang dapat dijadikan mahasiswa sebagai bahan referensi bacaan</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/fasilitas.jpg">
            </div>
        </div>
    </div>
</div>
@endsection