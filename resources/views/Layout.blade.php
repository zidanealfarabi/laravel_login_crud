<!doctype html>
<html lang="en">

    <!-- HEADER -->
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">

    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>

    <title>Navbar Content</title>
  </head>

  <body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Application Development | </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/berita">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/kontak">kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/biodata">Biodata</a>
            </li>
        </ul>
        </div>
        <div class="flex-shrink-0 dropdown">
            <a href="login" class="btn btn-outline-light me-2">Dashboard</a>

        </div>
    </div>
</nav>

    <div class="container mt-5">

        <!-- CONTENT -->
        @yield('Content')

    </div>


    <!-- JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
