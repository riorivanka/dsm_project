<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DSM Monitoring</title>

    {{-- CDN SweetAlert2 --}}
    <link rel="stylesheet" href="{{ asset('dist/css/sweetalert2/sweetalert2.min.css') }}">
    <script src="{{ asset('dist/js/sweetalert2/sweetalert2.min.js') }}"></script>

    <style>
        :root {
            --primary-orange: #fc7a2f;
            --primary-blue: #009ec2;
            --primary-blue-hover: #008db0;
            --text-dark: #1a1a1a;
            --text-muted: #888;
        }

        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            overflow: hidden;
        }

        .bg-image {
            position: fixed; top: 0; left: 0; 
            width: 100vw; height: 100vh;
            background-image: url("{{ asset('assets/asset_login.webp') }}");
            background-size: cover; background-position: center; 
            z-index: 1;
        }

        .bg-overlay {
            position: fixed; top: 0; left: 0; 
            width: 100vw; height: 100vh;
            background: rgba(245, 130, 40, 0.9); /* opacity layer orange */
            z-index: 2;
        }

        .login-wrapper {
            position: fixed; top: 0; left: 0; 
            width: 100vw; height: 100vh;
            display: flex; align-items: center; justify-content: center;
            z-index: 10;
            padding: 20px; box-sizing: border-box;
        }

        .login-card {
            background: #ffffff; border: none; border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            overflow: hidden; 
            max-width: 900px; width: 100%; 
            animation: fadeIn 0.5s ease-out; 
            display: flex; 
        }

        /* =========================================
           5. PANEL KIRI & KANAN
           ========================================= */
        .left-panel { 
            padding: 3.5rem 4rem; 
            background: #ffffff;
            text-align: left; 
            display: flex; flex-direction: column; justify-content: center;
            flex: 1; 
        }
        
        .right-panel {
            background: #ffffff; 
            border-left: 1px solid #f0f0f0; 
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            padding: 3.5rem; 
            flex: 1; 
        }

        @media (max-width: 991px) {
            .right-panel { display: none; }
        }

        /* Elemen Kiri (Teks & Form) */
        .login-logo { 
            height: 55px; /* ukuran logo */
            margin-bottom: 25px; 
            object-fit: contain; 
            align-self: flex-start; /* logo dibuat dikiri */
        }
        .login-title { 
            font-weight: 800; 
            color: var(--text-dark); 
            font-size: 1.6rem; 
            margin: 0 0 5px 0; 
            letter-spacing: -0.5px; 
        }

        .login-subtitle { 
            color: var(--text-muted); 
            font-size: 0.85rem; 
            margin: 0 0 15px 0; 
        }
        
        .title-divider { 
            width: 45px; /* garis orange pembatas */
            height: 4.5px; 
            background-color: var(--primary-orange); 
            border-radius: 3px; 
            margin-bottom: 25px; 
            align-self: flex-start; /* garis tetap di kiri */
        }
        
        .form-group { margin-bottom: 1rem; }
        .form-group label { 
            font-size: 0.75rem; 
            font-weight: 700; 
            color: #555; 
            text-transform: uppercase; 
            margin-bottom: 8px; display: block; 
        }

        .form-control { 
            background-color: #ffffff; border: 1px solid #dcdcdc; border-radius: 8px; 
            padding: 12px 15px; font-size: 0.95rem; width: 100%; transition: 0.2s; box-sizing: border-box;
        }
        .form-control:focus { 
            border-color: var(--primary-blue); 
            outline: none; 
            box-shadow: 0 0 0 2px rgba(0, 158, 194, 0.2); 
        }

        .form-control::placeholder { color: #aaa; }

        /* tombol login */
        .btn-login { 
            background-color: var(--primary-blue); border: none; color: white; 
            font-weight: 700; padding: 12px; border-radius: 8px; font-size: 0.95rem; 
            width: 100%; margin-top: 15px; transition: 0.2s; cursor: pointer; 
        }
        .btn-login:hover { background-color: var(--primary-blue-hover); transform: translateY(-1px); }

        .btn-reset { 
            display: block; width: 100%; margin-top: 12px; padding: 10px; 
            background: #ffffff; border: 1px solid #f0f0f0; border-radius: 8px; 
            color: var(--text-muted); font-weight: 600; font-size: 0.85rem; text-decoration: none; text-align: center;
            transition: 0.2s; box-sizing: border-box;
        }
        .btn-reset:hover { border-color: #dcdcdc; color: #555; }

        .copyright { font-size: 0.75rem; color: #888; font-weight: 700; margin-top: 40px; }

        /* content kanan (QR)s */
        #qrImage { margin-bottom: 20px; width: 180px; height: 180px; object-fit: contain; display: block; transition: opacity 0.2s; }
        .qr-title { font-weight: 800; color: var(--text-dark); margin-bottom: 5px; font-size: 1.1rem; text-align: center; margin-top: 0;}
        .qr-timer { font-size: 0.8rem; color: #94a3b8; margin-bottom: 25px; font-weight: 500; text-align: center; margin-top: 0;}
        .text-danger { color: #dc3545; }
        .fw-bold { font-weight: bold; }
        
        .step-list { width: 100%; max-width: 270px; margin: 0 auto; }
        .step-item { display: flex; align-items: start; gap: 12px; text-align: left; margin-bottom: 15px; font-size: 0.8rem; color: #64748b; }
        .step-num { 
            background: #f1f5f9; color: #64748b; 
            width: 20px; height: 20px; border-radius: 50%; 
            font-size: 0.7rem; font-weight: 700; 
            display: flex; align-items: center; justify-content: center; flex-shrink: 0; margin-top: 2px; 
        }

        @keyframes fadeIn { from { opacity: 0; transform: translateY(15px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body>

    <div class="bg-image"></div>
    <div class="bg-overlay"></div>

    <div class="login-wrapper">
        <div class="login-card">
            
            <div class="left-panel"> 
                <img src="{{ asset('assets/logo4.webp') }}" alt="Logo Dan+Dan" class="login-logo">
                <h2 class="login-title">Selamat Datang</h2>
                <p class="login-subtitle">Login ke <b>DSM Monitoring</b></p>
                <div class="title-divider"></div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf 
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="Contoh: 1234567890" 
                               autofocus autocomplete="off" value="{{ old('nik') }}"
                               inputmode="numeric" maxlength="10"
                               oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    </div>
                    <div class="form-group">
                        <label for="password">Password / PIN</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="******"  
                               inputmode="numeric" maxlength="6"
                               oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                    </div>
                    
                    <button type="submit" class="btn-login">LOGIN</button>
                    
                    <a href="https://10.234.152.108/pinreset/public/index/reset" target="_blank" class="btn-reset">
                        Reset Password / Lupa PIN
                    </a>
                </form>

                <div class="copyright">&copy; 2026 PT Sumber Indah Lestari.</div>
            </div>

            <div class="right-panel">
                <img id="qrImage" src="{{ asset('assets/qr1.png') }}" alt="Scan QR Code" loading="eager">
                <h5 class="qr-title">LOGIN WITH QRCODE</h5>
                <p class="qr-timer">Refresh otomatis dalam <span id="timer" class="text-danger fw-bold">14</span> detik</p>
                
                <div class="step-list">
                    <div class="step-item"><div class="step-num">1</div><div>Buka Aplikasi <b>Dan+Dan</b> di HP Anda.</div></div>
                    <div class="step-item"><div class="step-num">2</div><div>Pilih menu <b style="color: var(--primary-orange);">Login QR</b>.</div></div>
                    <div class="step-item"><div class="step-num">3</div><div>Arahkan kamera ke kode di atas.</div></div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // reset qr
        const qrSrc1 = "{{ asset('assets/qr1.png') }}";
        const qrSrc2 = "{{ asset('assets/qr2.webp') }}";
        let timerEl = document.getElementById('timer');
        let qrImg = document.getElementById('qrImage');
        let timeLeft = 14;
        let isQr1 = true;

        setInterval(() => {
            timeLeft--;
            if (timerEl) timerEl.innerText = timeLeft;
            if (timeLeft <= 0) { 
                isQr1 = !isQr1; 
                qrImg.style.opacity = '0.5';
                setTimeout(() => {
                    qrImg.src = isQr1 ? qrSrc1 : qrSrc2; 
                    qrImg.style.opacity = '1';
                }, 150);
                timeLeft = 14; 
            }
        }, 1000);

        // script pop up error
        document.addEventListener('DOMContentLoaded', function() {
            @if ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Login',
                    html: `<div style="text-align: center; color: #555;">
                            @foreach ($errors->all() as $error)
                                <p style="margin: 5px 0;">{{ $error }}</p>
                            @endforeach
                           </div>`,
                    confirmButtonText: 'Coba Lagi',
                    confirmButtonColor: '#009ec2',
                    focusConfirm: false,
                });
            @endif
        });
    </script>
</body>
</html>