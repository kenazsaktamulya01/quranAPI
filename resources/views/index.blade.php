<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigitalQur'an</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  {{-- NAVBAR --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Digital <span>Qur'an</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left:800px; ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Quran</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container" style="margin-top: 250px;">
        @yield('content')
      </div>

      <div id="cta">
        <div class="dark-overlay">
            <div class="cloud-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto text-center">
                            <h3 class="display-4">Media <span>Quran</span></h3>
                            <h5>Informasi Mengenai Tentang islam <br> Yaitu Ilmu Al-qur'an</h5>
                            <h3 style="margin-top: 25px">Contact Information</h3>
                            <div class="py-3 row">
                                <i class="col-4 bi bi-telephone" >
                                    <p style="color: rgb(0, 0, 0)">Phone <br>
                                        <h5>+62 858-1616-6614</h5>
                                    </p>
                                </i>
                                <i class="col-4 bi bi-geo-alt" >
                                    <p style="color: rgb(0, 0, 0)">Address <br>
                                        <h5>Jl.Jambu Kutorejo Kecamatan Pandaan</h5>
                                    </p>
                                </i>
                                <i class="col-4 bi bi-envelope" >
                                    <p style="color: rgb(0, 0, 0)">Email <br>
                                        <h5>pinterngaji@gmail.com</h5>
                                    </p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <footer class="py-5 bg-dark text-center text-white">
        <p>Copyright &copy; 2024 | DigitalQur'an by:kenzsw_</p>
      </footer>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>