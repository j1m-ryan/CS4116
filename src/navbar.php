<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include_once "init.php";
?>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.0 Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Google Fonts (Mulish) -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <!-- Main Css File -->
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
    <!-- Header Start -->
  <div class="container-fluid py-3" style="background: #371661;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #371661;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/Logo.png" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--  -->
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Discover</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-white rounded-0 py-2 mx-2"><i class="fa fa-user"></i> LOG
                                IN</button>
                            <a href="./signup.php"><button class="btn btn-red rounded-0 py-2 mx-2"><i class="fa fa-user"></i> SIGN
                                UP</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- / Header End -->

<!-- Bootstrap 5.0 JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>

</body>
</html>
