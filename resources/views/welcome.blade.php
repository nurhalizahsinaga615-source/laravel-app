<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NyeblakYuk - Selamat Datang</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       
        :root {
            --bg1: #b7c9ff; --bg2: #ffd9f0; --bg3: #f4d8ff;
            --ink: #24324a; --muted: #6b7280;
            --card: rgba(255,255,255,.78);
            --primary: #70a7ff; --primary2: #ff8cb3;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--bg1) 0%, var(--bg3) 45%, var(--bg2) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .welcome-card {
            background: var(--card);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            border: 2px solid white;
        }

        .brand-name {
            font-size: 48px;
            font-weight: 800;
            color: var(--ink);
            margin-bottom: 10px;
        }

        .btn-custom {
            background: linear-gradient(90deg, var(--primary), var(--primary2));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 15px;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(112, 167, 255, 0.3);
            color: white;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            padding: 12px 30px;
            border-radius: 15px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <div class="brand-name">NyeblakYuk! 🍜</div>
        <p style="color: var(--muted); margin-bottom: 30px;">
            Satu-satunya tempat jajan seblak paling gemess dan bikin nagih. 
            Sudah siap makan pedas hari ini?
        </p>

        <div class="d-flex gap-3 justify-content-center">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="btn-custom">Masuk ke Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-custom">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-outline">Daftar Akun</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

</body>
</html>