<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SMKN 4 BOGOR</title>
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

    .register-container {
          background: white;
          border-radius: 12px;
          border-top: 6px solid #7a3cff;
          box-shadow: 0 6px 20px rgba(122, 60, 255, 0.25);
          width: 330px; /* biar pas */
          padding: 25px 20px;
          margin: 0 auto; /* pastikan di tengah */
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
            margin-bottom: 12px;
        }

        label {
           display: block;
           margin-bottom: 4px;
           color: #555;
           font-weight: 500;
}

.form-group {
    margin-bottom: 14px;
    text-align: left;
}

        input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box; /* penting biar gak keluar dari lebar container */
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
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
    margin-top: 8px;
}

button:hover {
    background-color: #5f2fd4;
    transform: scale(1.03);
    box-shadow: 0 0 10px rgba(122, 60, 255, 0.5);
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
    <div class="register-container">
       

        <h2>REGISTER</h2>
        <form method="POST" action="/register">
            @csrf
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Ketik Nama Lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Ketik Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Ketik Password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ketik Ulang Password" required>
            </div>

            <button type="submit">Daftar</button>
        </form>

        <a href="/login" class="link">Sudah punya akun? Login di sini</a>

        <footer>© SMKN 4 BOGOR</footer>
    </div>
</body>
</html>