<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hijab Store</title>
    <link rel="icon" href="/images/logo.png" type="image/x-icon" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body background="{{ asset('') }}images/gambar.jpeg">
    <div class="container-fluid">
        <div class="m-5 m-lg-5 flex-column align-items-center justify-content-center">
            <div class="welcome-msg text-white text-center">
                <h2 class="fw-bold text-black">Selamat Datang</h2>
            </div>
            <div class="input-form bg-white mt-4 mt-lg-4 mb-5 mb-sm-0 justify-content-center align-content-center">
                @if (session()->has('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('errors') }}
                    </div>
                @endif
                <form action="{{ route('auth.login.process') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" placeholder="Masukkan email" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi"
                            name="password" value="{{ old('password') }}">
                        <div class="form-text text-end"><a href="/forget-pw.html">Lupa kata sandi?</a></div>
                    </div>
                    <button type="submit" class="btn-login" id="submit">Masuk</button>
                </form>
                <p class="mt-3 text-center">Belum punya akun? <a href="{{ route('auth.register') }}"
                        class="text-danger fw-bold">Daftar</a>
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
