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
        .register-card {
            background-color: #6f42c1; /* Purple color */
            color: white;
        }
        .register-card .form-label,
        .register-card .form-check-label {
            color: white;
        }
        .register-card a {
            color: #ffcc00; /* Yellow color for the login link */
            font-weight: bold;
            text-decoration: underline;
        }
        .register-card a:hover {
            color: #ffd700; /* A brighter shade of yellow on hover */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto p-2">
                <div class="card register-card">
                    <div class="card-body">
                        <h2 class="text-center">Register</h2>
                        <form action="{{url ('register_action')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <i class="bi bi-envelope"></i>
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-person"></i>
                                <label for="" class="form-label">Username</label>
                                <input type="text" class="form-control" id="" name="username">
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-lock"></i>
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" id="" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-danger" type="submit">Register</button>
                            </div>
                        </form>
                        <hr>
                        <p class="text-center">Sudah Punya akun? <a href="{{url ('login')}}">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qn1ST1L4kpKCq05RA6qlzj/NVI5xSxI5cG21I+UPXK9y6tG7LV6+XxrD3BY/xN3C"
        crossorigin="anonymous"></script>
</body>

</html>
