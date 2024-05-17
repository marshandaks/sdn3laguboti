@extends('layouts.layouts')

@section('content')
    <section id="berita">
        <!-- Full-width image with overlay text -->
        <div class="position-relative" style="height: 6cm; overflow: hidden; margin-top: -2cm;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
            <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid float-right" alt="Visi Misi Image" style="width: 100%; height: auto; object-fit: cover;">
            <div class="position-absolute top-50 start-50 translate-middle text-white" style="text-align: center; width: 100%;">
                <h2 class="">Visi Misi SDN 173551</h2>
            </div>
        </div>

        <div class="section-header mt-5 text-center">
            <h2>Visi Sekolah</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <!-- Replace 'visi-image.jpg' with the actual image path -->
                    <img src={{ asset('assets/images/ujian.jpg') }} class="img-fluid" alt="Visi Image">
                </div>
                <div class="col-md-8">
                    @foreach ($visi as $visi)
                        <h5 class="">"
                            {{ $visi->visi }}"
                        </h5>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="py-5 section-header text-center">
            <h2>Misi Sekolah</h2>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="text-start ">
                        <ul class="px-5">
                            @foreach ($misi as $misi)
                                <li>
                                    <h5>{{ $misi->misi }}</h5>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Replace 'misi-image.jpg' with the actual image path -->
                    <img src={{ asset('assets/images/guru.jpg') }} class="img-fluid" alt="Misi Image">
                </div>
            </div>
        </div>
    </section>
@endsection
