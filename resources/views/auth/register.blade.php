<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
        }

        .card {
            width: 400px;
            margin: 60px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        input,
        textarea,
        button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
        }

        button {
            background: green;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>Registrasi Akun</h2>

        @if ($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <input type="text" name="phone" placeholder="No HP" value="{{ old('phone') }}">
            <textarea name="address" placeholder="Alamat">{{ old('address') }}</textarea>

            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password">

            <button type="submit">Daftar</button>
        </form>
    </div>

</body>

</html>
