<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="Important ext/flaticon/font/flaticon.css" rel="stylesheet">
</head>

<body>

     <!-- nav start -->

   <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
            <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>FurniVerse</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="design navbar-design ml-auto px-3" id="navbardesign">
            <div class="navbar-nav ml-auto py-0">
                <a href="Main.php" class="nav-item nav-link m-1">Home</a>
                <a href="service.php" class="nav-item nav-link m-1">Service</a>
                <a href="about.php" class="nav-item nav-link m-1">About</a>
                <a href="project.php" class="nav-item nav-link m-1">Project</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active m-1" data-toggle="dropdown" href="#">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <a href="contact.php" class="nav-item nav-link m-1">Contact</a>
                <form class="form-inline" action="/search.php">
                    <input class="form-control mr-sm-2 ml-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- nav end -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark py-1">
        <div class="container">
            <div class="row align-items-center py-2">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">SERVICES</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="main.php">Home</a>
                        <i class="fa fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- dropdown start-->
    <!-- dropdown end-->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-1 px-sm-3 px-md-5">
        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>ABC, New Delhi, India</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+91 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://twitter.com/i/flow/login"><i
                            class="fa fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.facebook.com/"><i
                            class="fa fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;"
                        href="https://in.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><i
                            class="fa fa-linkedin"></i></a>
                    <a class="btn btn-outline-secondary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="https://www.instagram.com/"><i
                            class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="Main.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="About.php"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="Service.php"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                    <a class="text-white mb-2" href="Project"><i class="fa fa-angle-right mr-2"></i>Our Projects</a>
                    <a class="text-white" href="Contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="home.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="office.php"><i class="fa fa-angle-right mr-2"></i>Office</a>
                    <a class="text-white mb-2" href="bedroom.php"><i class="fa fa-angle-right mr-2"></i>Bedroom</a>
                    <a class="text-white mb-2" href="resturant.php"><i class="fa fa-angle-right mr-2"></i>Restaurant</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 mb-5">
                <h4 class="text-primary mb-3 text-center">CONTACT US</h4>
                <form action="homeinfo.php">
                    <div class="form-group">
                        <input type="text" id="name" class="form-control border-0 text-center" placeholder="Your Name"
                            required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" class="form-control border-0 text-center"
                            placeholder="Your Email" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control " rows="2" placeholder="Leave your Comment" id="comment"
                            required="required"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-lg btn-primary btn-block border-0" value="submit" name"submit"
                            type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container border-top border-secondary pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">furniverse</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="#">Tarun</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/func.js"></script>
</body>

</html>