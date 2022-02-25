<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Odading Absen</title>
    <!-- MDB icon -->
    <link
      rel="icon"
      href="https://icon-library.com/images/icon-cute/icon-cute-0.jpg"
      type="image/x-icon"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->

    <!-- Navbar -->
    <!-- Image and text -->
    <nav class="navbar mb-4 navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img
            src="https://icon-library.com/images/icon-cute/icon-cute-0.jpg"
            class="me-2"
            height="20"
            alt="MDB Logo"
            loading="lazy"
          />
          <small>ODADING</small>
        </a>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- Button -->
    <section id="tombol" class="p-5 mt-4 justify-content-center text-center">
      <div class="container">
        <div class="row pt-3">
          <div class="col">
            <h3>Absen dengan GPS</h3>
            <h5 class="mb-4">Tekan tombol berikut untuk absen!</h5>
            <button
              onclick="getLocation()"
              class="btn btn-rounded btn-primary btn-absen"
            >
              Absen
            </button>
            <p class="pt-3 fw-bold" id="location"></p>
          </div>
        </div>
      </div>
    </section>
    <!-- end of button -->

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Javascript -->
    <script src="js/script.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
