

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', $title)</title>
</head>
<body>
  <!--Main Navigation-->
 
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
    </style>

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
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
            @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
              <form action="{{ route('register.action') }}" method="POST" class="bg-white rounded shadow-5-strong p-5"  >
              @csrf
              <!-- Logo -->
              <a class="navbar-brand nav-link " starget="_blank" href="https://mdbootstrap.com/docs/standard/">
              <h3><p><b><center>REGISTER</center></b></p></h3>
        </a>
                <!-- Email input -->
                <div class="form-outline mb-4" data-mdb-input-init>
                  <input class="form-control" type="username" name="name" value="{{ old('name') }}" />
                  <label class="form-label" >Nama</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                  <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                  <label class="form-label" >Username</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                  <input class="form-control" type="password" name="password" />
                  <label class="form-label" >Password</label>
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                  <input class="form-control" type="password" name="password_confirm" />
                  <label class="form-label" >Konfirmasi Password</label>
                </div>


                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                  </div>
                </div>

                <!-- Submit button -->
                <div class="form-outline mb-4" data-mdb-input-init>
                <button type="submit" class="btn btn-primary btn-block" data-mdb-ripple-init>Sign in</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>