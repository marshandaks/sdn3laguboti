@extends('layouts.layouts')

@section('content')
    <!-- ======= Pengumuman Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="position-relative" style="height: 6cm; overflow: hidden; margin-top: -2cm;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
            <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid float-right" alt="Visi Misi Image" style="width: 100%; height: auto; object-fit: cover;">
            <div class="position-absolute top-50 start-50 translate-middle text-white" style="text-align: center; width: 100%; transform: translate(-50%, -50%); z-index: 1;">
                <h2 class="">Pengumuman SDN 173551</h2>
            </div>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2></h2>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 portfolio-container">
                    @foreach ($pengumumans as $item)
                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('storage/pengumuman/' . $item->image) }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('storage/pengumuman/' . $item->image) }}" width="420" height="200"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a title="More Details">{{ $item->judul }}</a>
                                    </h4>
                                    <p><a href="/pengumuman/{{ $item->slug }}">Baca selengkapnya...</a></p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>

        </div>
    </section><!-- End Pengumuman Section -->
@endsection
