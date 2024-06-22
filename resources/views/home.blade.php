<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>CU BONAVENTURA</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #intro {
            background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
            height: 109vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }

        .bg-white-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Putih dengan 50% transparansi */
        }

        .top-right {
            position: absolute;
            top: 10px;
            right: 10px;
            font-family: "Times New Roman", Times, serif;
            letter-spacing: 1px;
        }

        .top-right .btn {
            margin-left: 10px;
            font-weight: bold;
            cursor: pointer;
        }
        .motto{
            margin-left: 10px;
            border: none; /* Menghilangkan border */
            background: none; /* Menghilangkan latar belakang */
            color: #fff; /* Warna teks putih */
            font-weight: bold; /* Membuat teks lebih tebal */
            cursor: pointer; /* Menambahkan kursor pointer */
            font-family: "Trirong", serif;
            font-size: 25px;
        }
    </style>
</head>
<body>
    @extends('app')

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8 " style="background-color: rgba(0, 0, 0, 0);>
                        @if(session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif

                        <form action="{{ route('dashboard') }}" method="POST" class="bg-white rounded shadow-5-strong p-5">
                            @csrf
                            <!-- Logo -->
                            <div class="text-center mb-4">
                                <a class="navbar-brand nav-link" target="_blank" href="{{ route('login') }}">
                                    <img src="dist/img/logocu.png" >
                                </a>
                                <div class="motto">
                                    "Bangun Kemandirian Raih Kesejahteraan"
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Top right buttons -->
    <div class="top-right">
        <a class="btn btn-secondary btn-sm" href="{{ route('register') }}">Register</a>
        <a class="btn btn-secondary btn-sm" href="{{ route('login') }}">Login</a>
    </div>

    <!-- Bootstrap JS, Popper.js, dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>