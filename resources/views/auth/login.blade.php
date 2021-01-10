<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | SIMKO</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-color: #222831 !important;
            font-family: "roboto" !important;

            src: url('/dist/font/Roboto-Black.ttf') format(truetype);
            color: white !important;
        }

        .navbar {
            border: none !important;
        }

        .bgwhite {
            color: black !important;
        }

        nav {
            background-color: #393e46 !important;
        }

        a {
            color: white !important;
        }



        body {
            background-image: url('/dist/img/hmsibg.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 60%;
            background-attachment: fixed;

        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="login-page" style="background-color: lightsteelblue;">
    <div class="container-fluid">
        <div class="card mb-3 mx-auto" style="max-width: 900px;max-height: 500px; background-color: #393e46 !important;">
            <div class="row align-items-center">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <div class="mx-auto">
                            <div class="row align-items-center" style="background-color: #222831 !important;">
                                <div class="col">
                                    <img src="/dist/img/hmsi.png" alt="AdminLTE Logo" class="img-fluid">
                                </div>
                                <div class="col text-center">
                                    SIMKO
                                </div>
                            </div>
                            <br>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row-15">

                                    <!-- /.col -->
                                    <div class="col-15">
                                        <button type="submit" class="btn btn-info btn-block ">Login</button>
                                    </div>
                                    <!-- /.col -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>