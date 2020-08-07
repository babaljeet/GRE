<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/brands.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jscript/all.min.js"></script>
    <script src="jscript/fontawesome.min.js"></script>

    <title>G.R.Engineers</title>
</head>

<body>
    <div class="logo">
    <h2 data-aos="fade-up" data-aos-duration="1500"><span><img src="/images/GRLogo.jpg"></span></h2>
    </div>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-button" style="color: whitesmoke">Menu</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/aboutus.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/productcatalogue.html">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projectcatalogue.html">Our Projects</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/contactsales.html">Contact Us</a>
                </li>
        </div>
    </nav>





<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "sales@grengineers.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;
?>


<?php
if (isset ($_POST['submit']))
{
    if(mail($mailTo, $subject, $txt, $headers))
    {
        echo "Thank You ! for mail us... we will get back to you";
    }
    else
    {
        echo "Failed to send an E-Mail !";
    }
    header("Location: /contactsales.html");
}
?>


  <!-- page divider -->
  <hr class="featurette-divider">

<!-- Footer Links -->
<section class="footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a><span style="color: whitesmoke;"><b>Contact Us</b></span></a><br>

                <hr class="rounded">
                <h6>G.R. ENGINEERS PVT. LTD.</h6>
                </p>
                <p>
                <h6><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>&#160Plot No 496, Road No 4, KWC, Steel Market</h6>
                </p>
                <p>
                <h6>Kalamboli, Navi Mumbai, Maharashtra&#160 -&#160 410218, India</h6>
                </p>
                <hr class="dashed">

                <p>
                    <span style="color: whitesmoke;"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>&#160Mandeep Singh Rhal &#160&#160 <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>&#160Randeep Singh Rhal</span>
                </p>
                <p><span style="color: whitesmoke;"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-phone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>&#160+91 88287 51309 &#160&#160 <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-phone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>&#160+91 70210 44679</span></p>
            </div>
            <div class="col-md-4">
                <a><span style="color: whitesmoke;"><b>Quick Links</b></span></a>

                <hr class="rounded">
                <p>
                    <span style="color: whitesmoke;"><a href="/index.html" class="badge badge-light">Home</a></span>
                </p>
                <p>
                    <span style="color: whitesmoke;"><a href="/aboutus.html" class="badge badge-light">About Us</a></span>
                </p>
                <p>
                    <span style="color: whitesmoke;"><a href="/productcatalogue.html"
                            class="badge badge-light">Products</a></span>
                </p>
                <p>
                        <span style="color: whitesmoke;"><a href="/projectcatalogue.html" class="badge badge-light">Projects</a></span>
                    </p>
                <p>
                    <span style="color: whitesmoke;"><a href="/contactsales.html" class="badge badge-light">Contact
                            Us</a></span>
                </p>
                <p>
                    <span style="color: whitesmoke;"><a href="#" class="badge badge-light">Back To Top</a></span>
                </p><br>
            </div>
            <div class="col-md-4">
                <a><span style="color: whitesmoke;"><b>Our Location On Map</b></span></a>

                <hr class="rounded">
                <p><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.883742320052!2d73.10790243199467!3d19.029964797846898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e93ad6e15a9f%3A0x6cd7bba3cb8ab984!2s496%2C%204%2F1%2C%20Sector%20AWC%2C%20Kalamboli%2C%20Panvel%2C%20Navi%20Mumbai%2C%20Maharashtra%20410218!5e0!3m2!1sen!2sin!4v1596547493422!5m2!1sen!2sin"
                            width="250" height="250" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe></p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="container-footer">
        <footer>
            <p><span style="color: whitesmoke;">© 2020 G.R.Engineers pvt ltd, All rights reserved.</span>
            </p>
            <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
        </footer>
    </div>
</section>

<!-- Social Links -->
<div class="social-icon">
    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>&#160&#160
    <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>&#160&#160
    <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>

</html>