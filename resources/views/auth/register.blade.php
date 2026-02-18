{{-- <!DOCTYPE html>
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

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Registrasi - Rice field trade</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Belgrano&family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Peralta&family=Voces&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="regist-bg min-h-screen flex items-center justify-center bg-[#f5f8fc]">
        <div class="w-[700px] bg-white rounded-2xl shadow-lg p-8">

            <!-- Judul -->
            <h1 class="font-bold text-2xl text-center uppercase mb-12">
                Daftar Akun
            </h1>

            <!-- Form -->
            <form action="" method="POST">
                @csrf

                <!-- Nama / Email -->
                <div class="mb-4 flex gap-5">
                    <div class="flex-1">
                        <label for="nama" class="font-semibold text-md">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap"
                            class=" rounded-lg w-full h-10 px-3 mt-1 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                    </div>
                    <div class="flex-1">
                        <label for="email" class="font-semibold text-md">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email aktif"
                            class=" rounded-lg w-full h-10 px-3 mt-1 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                            required>
                    </div>
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <label for="password_confirmation" class="font-semibold text-md">Siapa anda? <span class="text-red-500">*</span></label>
                    <select name="role" id="role"
                        class="rounded-lg w-full h-10 px-3 mt-1 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                        <option value="">Pilih</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="font-semibold text-md">Kata Sandi <span class="text-red-500">*</span></label>
                    <input type="password" name="password" id="password" placeholder="Masukkan kata sandi"
                        class=" rounded-lg w-full h-10 px-3 mt-1 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                        required>
                </div>

                <!-- Tombol -->
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 cursor-pointer text-white font-semibold py-2 rounded-lg transition duration-200">
                    Daftar
                </button>

                <!-- Link Login -->
                <p class="text-center text-sm mt-4">
                    Sudah punya akun?
                    <a href="" class="text-blue-600 hover:underline font-semibold">
                        Masuk
                    </a>
                </p>

            </form>
        </div>
    </div>
</body>


</html>
