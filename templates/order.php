<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile Dashboard</title>
</head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="Important ext/flaticon/font/flaticon.css" rel="stylesheet">


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
                    <a class="nav-link dropdown-toggle m-1" data-toggle="dropdown" href="#">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
                <a href="contact.php" class="nav-item nav-link m-1">Contact</a>
                <form class="form-inline ml-2" action="/search.php">
                    <input class="form-control mr-sm-2 ml-4" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
                <a href="order.php" class="nav-item nav-link ml-4"><img src="../static/Images/tracking.png" height="40"
                        width="40"></a>
                <a href="shopping.php" class="nav-item nav-link"><img src="../static/Images/shopping-cart.png" height="35"
                        width="35"></a>
                <a href="user_signup.php" class="nav-item nav-link"><img src="../static/Images/user.png" height="35"
                        width="35"></a>

            </div>
        </div>
    </nav>

    <!-- nav end -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark py-1">
        <div class="container ">
            <div class="row align-items-center py-2">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Order Tracking</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" href="main.php">Home</a>
                        <i class="fa fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Track Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!--- Main start --->

    <main>
        <br>
        <br>

        <section class="track trk bg-basic align-item-center text-center py-2 py-lg-0 pl-3 pl-lg-5">
            <div class="col-lg-6 col-md-4 mb-5">
                <h2 class="track-head font-weight-bold py-5">Track Your Order using Order Number</h2>
                <form class="container-fluid ">
                    <div>
                        <div class="track input-order mb-3 text-center py-2">
                            <input type="text" id="order_id" class="text-center" value="" name="orderNumber"
                                placeholder="Order Number" required="required">
                        </div>
                        <div class="track input-num mb-3 text-center py-1">
                            <input type="tel" id="num_5202" class="track-number" value="" name="phoneNumber"
                                placeholder="Phone Number" autocomplete="tel" required="" pattern="[6-9][0-9]{9}"
                                title="Please enter valid 10 digit mobile number">
                        </div>
                        <button class="btn btn-info ml-auto" type="submit">
                            <span>Submit</span>
                        </button>
                    </div>
                </form>
                <p class="track-nxt p-2"> - OR - </p>
                <form class="track track-form" action="/login">
                    <input type="hidden" name="src" value="track-order">
                    <button class="btn btn-outline-secondary ml-auto " width="40" type="submit">Login To Track All
                        Your Orders</button>
                </form>
                <br>
            </div>

            <style>
                input,
                textarea {
                    font-size: 22px;
                    display: block;
                    width: 90%;
                    height: 90%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid $gray-light;
                    border-radius: 0;
                }

                .track trk{
                    align-item: center;

                }

            </style>

        </section>
    </main>

    <!--- Main end--->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-1 px-sm-3 px-md-5">
        <div class="row pt-3">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>ABC, New Delhi, India, 110019</p>
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
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-primary mb-3 text-center">CONTACT</h4>
                <form action="homeinfo.php" method="post">
                    <div class="form-group">
                        <input type="name" name="name" id="name" class="form-control border-0 text-center"
                            placeholder="Your Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control border-0 text-center"
                            placeholder="Your Email" required="required">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="2" name="comment" type="comment"
                            placeholder="Leave your Comment" id="comment" required="required"></textarea>
                    </div>
                    <div class="container">
                        <button class="btn btn-outline-success bg-basic" value="submit" name"submit"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" charset="utf-8"></script>

    <script src="js/func.js"></script>

</body>

</html>


<div class="primary-stepper-container">
    <div class="primary-steppper-content-container">
        <div class="primary-steppper-content">
            <div
                class="primary-stepper-circle w_3_rem h_3_rem background_color_primary border_radius_senary color_white font_size_large font_weight_bold display_grid place_content_center">
                <i class="fa-solid fa-check color_white font_size_large"></i>
            </div>
            <div class="primary-stepper-text-container">
                <div class="primary-stepper-title font_size_medium font_weight_bold">Order Placed</div>
                <div class="primary-stepper-description color_toast font_size_medium">Your order has been placed</div>
            </div>
        </div>
        <div class="primary-steppper-content">
            <div
                class="primary-stepper-circle w_3_rem h_3_rem background_color_disabled border_radius_senary color_white font_size_large font_weight_bold display_grid place_content_center">
                2
            </div>
            <div class="primary-stepper-text-container">
                <div class="primary-stepper-title font_size_medium font_weight_bold">Preparing</div>
                <div class="primary-stepper-description color_toast font_size_medium">Your order is being prepared</div>
            </div>
        </div>
        <div class="primary-steppper-content">
            <div
                class="primary-stepper-circle w_3_rem h_3_rem background_color_disabled border_radius_senary color_white font_size_large font_weight_bold display_grid place_content_center">
                3
            </div>
            <div class="primary-stepper-text-container">
                <div class="primary-stepper-title font_size_medium font_weight_bold">On the way</div>
                <div class="primary-stepper-description color_toast font_size_medium">Your order is being shipped</div>
            </div>
        </div>
        <div class="primary-steppper-content">
            <div
                class="primary-stepper-circle w_3_rem h_3_rem background_color_disabled border_radius_senary color_white font_size_large font_weight_bold display_grid place_content_center">
                4
            </div>
            <div class="primary-stepper-text-container">
                <div class="primary-stepper-title font_size_medium font_weight_bold">Delivered</div>
                <div class="primary-stepper-description color_toast font_size_medium">Your order was delivered
                    successfully</div>
            </div>
        </div>
    </div>
</div>