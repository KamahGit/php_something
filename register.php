<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="form-body">
<!--    <div class="container-xxl position-relative bg-white d-flex p-0">-->
<!--       Spinner Start -->
<!--        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">-->
<!--            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">-->
<!--                <span class="sr-only">Loading...</span>-->
<!--            </div>-->
<!--        </div>-->
<!-- Spinner End -->


<!-- Sign Up Start -->
<div class="container-fluid" id="form-div">

    <div class="col-sm-6 bg-light rounded h-100 p-4 mx-auto" id="form-wrapper">
        <h4 class="mb-4">SIGN UP</h4>
        <form action="authenticate.php" method="post" class="form-floating">
            <div class="form-floating mb-4">
                <input type="text" class="form-control" name="fname" id="fname_input" placeholder="fname" required>
                <label for="fname_input">First Name</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" name="lname" id="lname_input" placeholder="lname" required>
                <label for="lname_input">Last Name</label>
            </div>
            <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email_input" name="email" PLACEHOLDER="email" required>
                <label for="email_input">Email address</label>
            </div>

            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="pass" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="mb-4">
                <label>Phone Number</label>
                <div class="input-group mb-3">

                    <span class="input-group-text" id="basic-addon1">+254</span>
                    <input type="text" class="form-control" placeholder="700000000" id="telinput" name="tel_no" maxlength="9" required>

                </div>
            </div>

            <fieldset class="row mb-4">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                               id="gender_male" value="male" required>
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"
                               id="gender_female" value="female" required>
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" name="register" value="register" class="btn btn-primary py-3 w-100 mb-4">Sign Up
            </button>
            <p class="text-center mb-0">Already have an account? <a href="login.php">Sign In</a></p>
        </form>
    </div>
</div>

<!-- Sign Up End -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>