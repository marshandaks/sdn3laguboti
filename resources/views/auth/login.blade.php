@extends('layouts.layouts')

@section('content')
    <section style="">
        <div class="container col-xxl-6 py-5">

            <h3 class="fw-bold mb-3">Login</h3>
            <div id="errorMessage" class="text-danger" style="display: none;">Email atau password salah.</div>
            <form action="" method="POST" id="loginForm">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Masukan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var errorMessage = document.getElementById('errorMessage');
            errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan setiap kali formulir dikirim
            // Lakukan validasi email dan password di sini
            var email = document.querySelector('input[name="email"]').value;
            var password = document.querySelector('input[name="password"]').value;

            // Contoh validasi sederhana, Anda harus menggunakan validasi yang lebih aman di produksi
            if (email !== 'sdn173551@gmail.com' || password !== 'sdn173551') {
                errorMessage.style.display = 'block'; // Tampilkan pesan kesalahan
                setTimeout(function() {
                    errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan setelah 8 detik
                }, 8000);
                event.preventDefault(); // Mencegah formulir dikirim
            }
        });
    </script>
@endsection
