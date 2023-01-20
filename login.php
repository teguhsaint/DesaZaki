<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/boots_bina.css">
    <link rel="stylesheet" href="assets/FA5PRO/css/all.min.css">
    <link rel="stylesheet" href="assets/css/input_float.css">
    <title>Login</title>
    <style>
        .bg-dark {
            background-color: #1d1d38 !important;
        }

        .card {
            width: 30%;
            margin-top: 0%;
            transform: translateY(10%);
        }

        @media screen and (max-width:700px) {


            .card {
                width: 100%;
                margin-top: 3%;
                transform: translateY(10%);
            }

            .card-body {
                padding: 5px 10px !important;
            }


        }

        .icon_form {
            margin-right: 10px;
        }

        .form-me {
            background-color: #f2f2f2;

            border: 1px solid #e7e7e7;
            padding: 3px 20px;
        }

        .form-control {
            background-color: #00000000;
            border: none;
            outline: none;
        }

        .form-control:focus {
            background-color: #00000000;
            border: none;
            outline: none;
            box-shadow: none;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="card bg-white border-0 shadow rounded-2 mx-auto">
            <div class="card-body p-4 px-5">
                <br>
                <h3 class="mb-5 text-center text-warning fw-bold">Login Area</h3>
                <div class="input-container mb-4">
                    <input type="text" required="" />
                    <label>Username</label>
                </div>
                <div class="input-container mb-4">
                    <input id="pw" maxlength="30" type="password" required="" />
                    <label>Password</label>
                    <i onclick="ganti()" class="icon fas fa-eye"></i>
                </div>
                <div class="my-4">
                    <label class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" value="">
                        Remember Me
                    </label>

                </div>

                <button class="btn btn-warning py-2 w-100">Login</button>
                <br>
                <a href="#" class="d-block mt-4 text-center link-dark text-decoration-none">Lupa Password ?</a>

                
                <br><br>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
        var types = 0;

        function ganti() {
            if (types > 0) {
                types = 0;
                $('.icon').removeClass('text-dark')
                $('#pw').attr('type', 'password');

            } else {
                $('.icon').addClass('text-dark')
                types = types + 1;
                $('#pw').attr('type', 'text');
            }

        }
    </script>
</body>

</html>