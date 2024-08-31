<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />

    <style>
        :root {
            --main-bg: #e91e63;
        }

        .main-bg {
            background: var(--main-bg) !important;
        }

        input:focus,
        button:focus {
            border: 1px solid var(--main-bg) !important;
            box-shadow: none !important;
        }

        .form-check-input:checked {
            background-color: var(--main-bg) !important;
            border-color: var(--main-bg) !important;
        }

        .card,
        .btn,
        input {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="main-bg">
    <!-- Login Form -->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card shadow">
                    <div class="card-title text-center border-bottom">
                        <h2 class="p-3">Login</h2>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="username" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="username" />
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Contrasena</label>
                                <input type="password" name="password" class="form-control" id="password" />
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn text-light main-bg">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>