@extends('layouts.layouts')

@section('content')
    @foreach ($sejarah as $item)
        <section id="berita">
              <!-- Full-width image with overlay text -->
              <div class="position-relative" style="height: 6cm; overflow: hidden; margin-top: -2cm;">
                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
                <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid float-right" alt="Visi Misi Image" style="width: 100%; height: auto; object-fit: cover;">
                <div class="position-absolute top-50 start-50 translate-middle text-white" style="text-align: center; width: 100%; transform: translate(-50%, -50%); z-index: 1;">
                    <h2 class="">sejarah SDN 173551</h2>
                </div>
            </div>

        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="section-header">
                        </div>
                    </div>
                    <div class="col-md-5 mx-auto text-center">
                        <div class="p-3 mb-3" style="max-width: fit-content; border-radius: 10px;">

                            <img src="{{ asset('assets/images/il-photo-01.png') }}" style="width: 9cm; height: 5cm; margin-bottom: 5px;" alt="Rapat Sejarah">

                            <img src="{{ asset('assets/images/upacara.jpg') }}" style="width: 9cm; height: 5cm; margin-bottom: 5px;" alt="Rapat Sejarah">

                            <img src="{{ asset('assets/images/rapat.jpg') }}" style="width: 9cm; height: 5cm; margin-bottom: 5px;" alt="Rapat Sejarah">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="konten-berita" style="margin-top: 5px;">
                            <p class="text-secondary">{!! $item->desc !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
