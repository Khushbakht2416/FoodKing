<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - FoodKing</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="../backend/img/favicon.png" rel="icon">
    <link href="../backend/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="../backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../backend/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="../backend/css/style.css" rel="stylesheet">
    <style>
        body {
            background-image: url('../backend/img/background.png'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            z-index: 1;
        }

        .credits a {
            color: rgb(1, 1, 1);
            font-weight: bold;
        }

        .credits {
            color: rgb(255, 255, 255); 
        }

        .card {
            background-color: rgba(255, 255, 255, 0.85); 
            width: 70%; 
            max-width: 600px; 
            min-height: 500px; 
            padding: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .foodking-admin {
            color: white;
        }

        .form-label, .form-control, .btn {
            font-size: 15px; 
        }
        .bold-text {
            font-weight: bold;
        }
        
    </style>
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{ url('/admin/login') }}" class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block"></span>
                                </a>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4 bold-text">Login to your Account </h5>
                                    </div>
                                    <form method="POST" action="{{ url('/admin/login') }}">
                                        @csrf
                                        <div class="col-12 mb-4 mt-5">
                                            <label for="username" class="form-label">Username</label>
                                            <div class="input-group">
                                                <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                                            </div>
                                            @if ($errors->has('username'))
                                                <span class="text-danger">
                                                    {{ $errors->first('username') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                        <br>
                                        <div class="col-12 mb-3">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="../backend/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../backend/vendor/chart.js/chart.umd.js"></script>
    <script src="../backend/vendor/echarts/echarts.min.js"></script>
    <script src="../backend/vendor/quill/quill.js"></script>
    <script src="../backend/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../backend/vendor/tinymce/tinymce.min.js"></script>
    <script src="../backend/js/main.js"></script>
</body>

</html>
