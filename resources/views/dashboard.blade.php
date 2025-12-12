<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SMKN 4 BOGOR</title>
</head>
<body style="font-family: sans-serif; text-align: center; margin-top: 100px;">
    <h1>Selamat Datang di Dashboard 🎉</h1>
    <p>Anda berhasil login sebagai <b>{{ Auth::user()->name }}</b></p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>