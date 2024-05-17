@extends('layouts.layouts')

@section('content')
    <section id="team" class="team">
        <div class="position-relative" style="height: 6cm; overflow: hidden; margin-top: -2cm;">
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
            <img src="{{ asset('assets/images/il-photo-01.png') }}" class="img-fluid float-right" alt="Visi Misi Image" style="width: 100%; height: auto; object-fit: cover;">
            <div class="position-absolute top-50 start-50 translate-middle text-white" style="text-align: center; width: 100%; transform: translate(-50%, -50%); z-index: 1;">
                <h2 class="">Tenaga Kerja SDN 173551</h2>
            </div>
        </div>
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2></h2>
            </div>

            <div class="row gy-4">

                @foreach ($tenagaKerjas as $item)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('storage/tenagaKerja/' . $item->image) }}" class="img-fluid" alt="">
                            <h4>{{ $item->nama }}</h4>
                            <span>{{ $item->jabatan }}</span>
                            <div class="social">
                                <table class="table">

                                    <tbody class="text-start">

                                        <tr>
                                            <th scope="row">tanggal Lahir</th>
                                            <td>{{ $item->tanggal_lahir }}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Wali Kelas</th>
                                            <td colspan="2">{{ $item->wali_kelas }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach


            </div>

        </div>
    </section><!-- End Our Team Section -->
@endsection
