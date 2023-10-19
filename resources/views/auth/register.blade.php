<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Hijab Shop</title>
    <link rel="icon" href="/images/logo.png" type="image/x-icon" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body background="{{ asset('') }}images/gambar.jpeg">
    <div class="container-fluid">
        <div class="align-items-center justify-content-center">
            <div class="welcome-msg mt-5 text-black text-center">
                <h2 class="fw-bold">Mendaftarkan Akun</h2>
            </div>
            <div class="input-form bg-white mt-3">
                @if (session()->has('warning'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('warning') }}
                    </div>
                @endif
                <form action="{{ route('auth.register.process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}" placeholder="Masukkan nama lengkapmu" autofocus>
                        @error('name')
                            <span class="help-block" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan email"value="{{ old('email') }}">
                        @error('email')
                            <span class="help-block" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password"
                            value="{{ old('password') }}" placeholder="Masukkan kata sandi">
                        @error('password')
                            <span class="help-block" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control" id="confirmPassword" name="password_confirmation"
                            placeholder="Masukkan ulang kata sandi" value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                            <span class="help-block" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-login" id="submit">Daftar</button>
                </form>
                <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('auth.login') }}"
                        class="text-danger fw-bold">Masuk</a>
                </p>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- <script src="/public/js/script.js"></script> -->
</body>

</html>
