<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <style>
        #intro {
            background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
            height: 106.5vh;
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

        .form-control {
            width: 300px;
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
        }

        ::placeholder {
            color: #eaeaea; /* Warna placeholder */
            opacity: 1; /* Untuk beberapa browser */
        }

        .button1,
.button2 {
    display: inline-block;
    outline: 0;
    border: 0;
    cursor: pointer;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    height: 36px;
    padding: 0px 20px;
    transition: all 0.5s ease 0s;
    text-align: center;
    line-height: 36px;
    margin-right: 10px;
}

.button1 {
    color: #fff;
    background: linear-gradient(92.88deg, rgb(69, 94, 181) 9.16%, rgb(86, 67, 204) 43.89%, rgb(103, 63, 215) 64.72%);
}

.button1:hover {
    box-shadow: 0px 1px 40px rgba(80, 63, 205, 0.5);
    transform: translateY(-3px);
}

.button2 {
    color: #fff;
    background: linear-gradient(92.88deg, rgb(69, 94, 181) 9.16%, rgb(86, 67, 204) 43.89%, rgb(103, 63, 215) 64.72%);
}

.button2:hover {
    box-shadow: 0px 1px 40px rgba(80, 63, 205, 0.5);
    transform: translateY(-3px);
}
.button-container {
    display: flex;
    justify-content: center;
    align-items: center; /* menambahkan ini */
    margin-top: 20px;
}
.button2 {
            text-decoration: none;
        }
    </style>
</head>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
       
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
    </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container" >
          <div class="row justify-content-center" >
            <div class="col-xl-5 col-md-8"  >
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
           
              <form action="{{ route('dashboard') }}" method="POST" class="rounded shadow-5-strong p-5"   >
              @csrf
              <!-- Logo -->
              <a class="navbar-brand nav-link " starget="_blank" href="https://mdbootstrap.com/docs/standard/">
              <img src="dist/img/logocu.png" class="img-circle elevation-2" >
              </a>
                <!-- username input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                <center><input type="text" placeholder="Username" input class="form-control" type="username" name="username" value="{{ old('username') }}" /></center>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4" data-mdb-input-init >
                  <center><input type="password" placeholder="Password" input type="password"  class="form-control"  name="password" id="password" />
                  <i class="bi bi-eye-slash" id="togglePassword"></i></center>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                  </div>
                </div>

                            <!-- Submit button -->
                            <div class="button-container">
                                <button type="submit" class="button1" data-mdb-ripple-init>Login</button>
                                <a class="button2" href="{{ route('home') }}">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>