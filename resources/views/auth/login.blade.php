@extends('layouts.app')

@section('content')

{{-- cdn --}}
<script src="{{ asset('dist/js/sweetalert2/sweetalert2.min.js') }}"></script>

<style>
    /* config colors */
    :root {
        --primary-orange: #fc7a2f;
        --primary-blue: #009ec2;
        --primary-blue-hover: #008db0;
    }

    /* body setup */
    body {
        height: 100vh;
        margin: 0;
        font-family: 'Inter', 'Segoe UI', sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333; 
        overflow: hidden; 
    }

    /* background image */
    .bg-image {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background-image: url("{{ asset('assets/asset_login.webp') }}");
        background-size: cover; background-position: center; z-index: -2;
    }

    /* overlay jingga */
    .bg-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(252, 122, 47, 0.9), rgba(255, 165, 0, 0.75));
        z-index: -1;
    }

    /* login card */
    .login-card {
        background: #ffffff; border: none; border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        overflow: hidden; max-width: 900px; width: 100%; margin: 15px;
        position: relative; z-index: 10; animation: fadeIn 0.6s ease-out; 
    }

    /* panel layout */
    .left-panel { padding: 3rem; }
    .right-panel {
        background: #ffffff; border-left: 1px solid #f1f5f9;
        display: flex; flex-direction: column; align-items: center; justify-content: center;
        padding: 3rem; height: 100%;
    }

    /* font dan forms */
    .login-header { margin-bottom: 2rem; }
    .login-title { font-weight: 800; color: #1a1a1a; font-size: 1.5rem; letter-spacing: -0.5px; }
    .login-subtitle { color: #888; font-size: 0.85rem; margin-top: 4px; }
    
    .form-group label { font-size: 0.75rem; font-weight: 700; color: #666; text-transform: uppercase; margin-bottom: 6px; }
    .form-control { background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 10px 14px; font-size: 0.95rem; }
    .form-control:focus { background-color: #fff; border-color: var(--primary-blue); box-shadow: 0 0 0 3px rgba(0, 158, 194, 0.1); outline: none; }

    .btn-login { background-color: var(--primary-blue); border: none; color: white; font-weight: 700; padding: 10px; border-radius: 10px; font-size: 0.95rem; width: 100%; transition: background-color 0.2s; }
    .btn-login:hover { background-color: var(--primary-blue-hover); }

    .btn-reset { 
        display: block; width: 100%; margin-top: 10px; padding: 10px; 
        background: transparent; border: 2px solid #f1f5f9; border-radius: 10px; 
        color: #888; font-weight: 600; font-size: 0.85rem; text-decoration: none; text-align: center;
        transition: background-color 0.2s, border-color 0.2s, color 0.2s; 
    }
    .btn-reset:hover { border-color: var(--primary-orange); color: var(--primary-orange); background: #fff8f5; }

    /* element qr code */
    #qrImage { margin-bottom: 20px; width: 180px; height: 180px; object-fit: contain; display: block; transition: opacity 0.3s ease; }
    .qr-title { font-weight: 800; color: #333; margin-bottom: 5px; font-size: 1.1rem; }
    .qr-timer { font-size: 0.8rem; color: #94a3b8; margin-bottom: 20px; font-weight: 500; }
    .step-item { display: flex; align-items: start; gap: 10px; text-align: left; margin-bottom: 10px; font-size: 0.8rem; color: #64748b; }
    .step-num { background: #f1f5f9; color: #64748b; width: 22px; height: 22px; border-radius: 50%; font-size: 0.7rem; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 1px; }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
</style>

<div class="bg-image"></div>
<div class="bg-overlay"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="card login-card">
            <div class="row g-0">
                
                <div class="col-lg-6 left-panel"> 
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="login-header text-center text-lg-start">
                            <img src="{{ asset('assets/logo4.webp') }}" alt="Logo" height="50" class="mb-3">
                            <h2 class="login-title">Selamat Datang</h2>
                            <p class="login-subtitle">Login ke <b>System Request Aplikasi</b></p>
                            <div class="d-none d-lg-block" style="width: 40px; height: 4px; background-color: #fc7a2f; border-radius: 2px; margin-top: 10px;"></div>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf 
                            <div class="mb-4 form-group">
                                <label for="nik">NIK</label>
                                {{-- value="{{ old('nik') }}" agar NIK tidak hilang saat error --}}
                                <input type="text" name="nik" class="form-control" id="nik" placeholder="Contoh: 1234567890" 
                                       autofocus autocomplete="off" value="{{ old('nik') }}"
                                       inputmode="numeric" 
                                       maxlength="10"
                                       oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            <div class="mb-4 form-group">
                                <label for="password">Password / PIN</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="******"  
                                       inputmode="numeric" 
                                       maxlength="6"
                                       oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                            </div>
                            
                            {{-- langsung kirim ke server, server validasi t/f --}}
                            <button type="submit" class="btn-login">LOGIN</button>
                            
                            <a href="https://10.234.152.108/pinreset/public/index/reset" target="_blank" class="btn-reset">
                                Reset Password / Lupa PIN
                            </a>
                        </form>

                        <div class="mt-5 text-center text-lg-start">
                            <small class="text-muted fw-bold" style="font-size: 0.75rem;">&copy; 2026 PT Sumber Indah Lestari.</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-lg-flex right-panel">
                    <div class="w-100 d-flex flex-column align-items-center">
                        <img id="qrImage" src="{{ asset('assets/qr1.png') }}" alt="Scan QR Code" loading="eager">
                        <h5 class="qr-title">LOGIN WITH QRCODE</h5>
                        <p class="qr-timer">Refresh otomatis dalam <span id="timer" class="text-danger fw-bold">15</span> detik</p>
                        <div class="px-3 w-100" style="max-width: 320px;">
                            <div class="step-item"><div class="step-num">1</div><div>Buka Aplikasi <b>Dan+Dan</b> di HP Anda.</div></div>
                            <div class="step-item"><div class="step-num">2</div><div>Pilih menu <b style="color: var(--primary-orange);">Login QR</b>.</div></div>
                            <div class="step-item"><div class="step-num">3</div><div>Arahkan kamera ke kode di atas.</div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // --- reset qr code (masih asset png) ---
    const qrSrc1 = "{{ asset('assets/qr1.png') }}";
    const qrSrc2 = "{{ asset('assets/qr2.webp') }}";
    let timerEl = document.getElementById('timer');
    let qrImg = document.getElementById('qrImage');
    let timeLeft = 15;
    let isQr1 = true;

    setInterval(() => {
        timeLeft--;
        if (timerEl) timerEl.innerText = timeLeft;
        if (timeLeft <= 0) { isQr1 = !isQr1; qrImg.src = isQr1 ? qrSrc1 : qrSrc2; timeLeft = 15; }
    }, 1000);

    // --- pop up error dari server ---
    // script otomatis jalan saat reload auth gagal
    document.addEventListener('DOMContentLoaded', function() {
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Gagal Login',
                html: `<div style="text-align: center; color: #555;">
                        @foreach ($errors->all() as $error)
                            <p style="margfin: 5px 0;">{{ $error }}</p>
                        @endforeach
                       </div>`,
                confirmButtonText: 'Coba Lagi',
                confirmButtonColor: '#d33',
                focusConfirm: false, // Hilangkan fokus otomatis biar estetik
            });
        @endif
    });
</script>

@endsection