<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMKN 4 BOGOR</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            border-radius: 10px;
            border-top: 6px solid #7a3cff; /* ungu hanya di bagian atas */
            box-shadow: 0 6px 25px rgba(122, 60, 255, 0.25); /* efek glow ungu lembut */
            width: 360px;
            padding: 40px 30px;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 25px;
            color: #222;
            text-align: left;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #7a3cff;
            box-shadow: 0 0 6px rgba(122, 60, 255, 0.3);
        }

        button {
            width: 100%;
            padding: 11px;
            border: none;
            background-color: #7a3cff;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #5f2fd4;
            transform: scale(1.03);
        }

        .link {
            display: block;
            margin-top: 18px;
            font-size: 13px;
            color: #7a3cff;
            text-decoration: none;
            text-align: center;
        }

        .link:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 25px;
            font-size: 12px;
            color: #999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
    <img src="/image/logosmkn4.png" alt="logo" class="logo">
        <h2>LOGIN ADMIN</h2>
        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Ketik Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Ketik Password" required>
            </div>

            <button type="submit">Login</button>
        </form>

      <a href="{{ route('register') }}" class="link">Belum punya akun? Daftar di sini</a>

        <footer>© SMKN 4 BOGOR</footer>
    </div>
</body>
</html>