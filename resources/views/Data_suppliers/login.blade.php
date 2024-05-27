<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .login-card {
            background-color: #6f42c1;
            color: white;
        }

        .login-card .form-label,
        .login-card .form-check-label {
            color: white;
        }

        .login-card a {
            color: #ffcc00;
            font-weight: bold;
            text-decoration: underline;
        }

        .login-card a:hover {
            color: #ffd700;
        }

        .password-toggle {
            cursor: pointer;
            color: black; /* Set the icon color to black */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto p-2">
                <div class="card login-card">
                    @if ($message = Session::get('message'))
                    <div class="alert alert-success">{{$message}}</div>
                    @endif
                    <div class="card-body">
                        <h2 class="text-center">Login</h2>
                        <form action="{{url('proses_login')}}" method="post" class="position-relative">
                            @csrf
                            <div class="mb-3">
                                <i class="bi bi-person"></i>
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
                            </div>
                            <div class="mb-3 position-relative">
                                <i class="bi bi-lock"></i>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <i class="bi bi-eye password-toggle position-absolute end-0 top-0 mt-3 me-3" onclick="togglePassword()"></i>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="submit">Kirim</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Belum Punya akun? <a href="{{url('register')}}">register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qn1ST1L4kpKCq05RA6qlzj/NVI5xSxI5cG21I+UPXK9y6tG7LV6+XxrD3BY/xN3C" crossorigin="anonymous"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordToggle.classList.remove('bi-eye');
                passwordToggle.classList.add('bi-eye-slash');
            } else {
                passwordField.type = 'password';
                passwordToggle.classList.remove('bi-eye-slash');
                passwordToggle.classList.add('bi-eye');
            }
        }
    </script>
</body>

</html>
