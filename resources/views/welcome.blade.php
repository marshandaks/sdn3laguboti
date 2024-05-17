@extends('layouts.layouts')

@section('content')
    {{-- Hero --}}
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="d-flex justify-content-center" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2 class="text-center">Selamat Datang <br> Website SDN 173551</h2>
                    <p style="font-size:24px" class="text-center text-light">"Berprestasi Beriman Dan Berbudaya Dengan Displin Yang Tinggi Dalam Lingkungan Sekolah Yang Nyaman"</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- ======= Visi Misi Section ======= -->
    <section id="visi-misi" class="visi-misi" style="margin-top: -50px;">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Visi</h2>
                            <p class="card-text">
                                @foreach($visi as $item)
                                    {{ $item->visi }}
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-md-0 mt-4">
                        <div class="card-body">
                            <h2 class="card-title">Misi</h2>
                            <p class="card-text">
                                @if(isset($misi[0]))
                                    {{ Str::limit($misi[0]->misi, 100) }}
                                @else
                                    "Misi belum tersedia"
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <div class="text-center">
                        <a href="/visimisi" class="lainnya mt-5 btn btn-primary" type="button">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Visi Misi Section -->

    <!-- ======= Kegiatan Section ======= -->
    <section id="kegiatan" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header text-center">
                <h2>Kegiatan Sekolah</h2>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($kegiatan as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/kegiatan/' . $item->image) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                                    <img src="{{ asset('storage/kegiatan/' . $item->image) }}" width="430" height="200" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a></h4>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
            <div class="text-center">
                <a href="/galeri" class="lainnya mt-5 btn btn-primary" type="button">Lihat Selengkapnya</a>
            </div>
        </div>
    </section><!-- End Kegiatan Section -->

    <!-- ======= Fasilitas Section ======= -->
    <section id="fasilitas" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header text-center">
                <h2>Fasilitas Sekolah</h2>
            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($fasilitas as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/fasilitas/' . $item->image) }}" data-gallery="portfolio-gallery-app" class="glightbox">
                                    <img src="{{ asset('storage/fasilitas/' . $item->image) }}" width="490" height="180" alt="">
                                </a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a></h4>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
            <div class="text-center">
                <a href="/galeri" class="lainnya mt-5 btn btn-primary" type="button">Lihat Selengkapnya</a>
            </div>
        </div>
    </section><!-- End Fasilitas Section -->
@endsection
