<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Title of Website -->
    <title>I-plus &ndash; Coming Soon Landing Page</title>

    <meta name="description" content="I-plus - Freelancing social platform in Dubai" />
    <meta name="keywords"
        content="I-plus,i-plus,iplus,IPLUS,freelancing,dubai,make money, side hustle" />
    <meta name="author" content="Ahmed Saleh">

    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="css/icons/font-awesome.css">
    <link rel="stylesheet" href="css/icons/linea.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="css/plugins/loaders.min.css">
    <link rel="stylesheet" href="css/plugins/photoswipe.css">
    <link rel="stylesheet" href="css/icons/photoswipe/icons.css">


    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body data-spy="scroll" data-target=".scrollspy" class="bg-dark">

    <!-- Preloader  -->
    <div class="loader bg-dark">
        <div class="loader-inner ball-scale-ripple-multiple ball-scale-ripple-multiple-color">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- /End Preloader  -->


    <div id="page">

        <!-- ============================
     BG & Overlays
================================= -->

        <!-- Flat Surface Shader BG -->
        <div id="page-fss" class="section-overlay" data-ambient-color="#570087" data-diffuse-color="#e000ff"></div>
        <!-- /End Flat Surface Shader BG -->

        <!-- Overlay BG -->
        <div class="section-overlay bg-black overlay-opacity-2"></div>
        <!-- /End Overlay BG -->


        <!-- Modal -->
        <div id="modal-notify" class="modal fade modal-scale" tabindex="-1" role="dialog"
            aria-labelledby="meinModalLabel">

            <!-- .modal-dialog -->
            <div class="modal-dialog" role="document">
                <div>

                    <!-- .modal-content -->
                    <div class="modal-content text-center bg-dark text-light">
                        <button class="button-close" data-dismiss="modal" aria-label="Close"><i
                                class="icon icon-lg icon-arrows-remove"></i></button>


                        <!-- Headline -->
                        <div class="wrap-line border-dark">
                            <h3><span class="font-weight-200">Stay</span> Tuned</h3>
                        </div>
                        <!-- /End Headline -->

                        <!-- Description -->
                        <div class="p-t-b-15">
                            <p>We launch our new website soon.<br>
                                Please stay updated and follow.</p>
                        </div>
                        <!-- /End Description -->

                        <div class="p-t-b-30">

                            <!-- Newsletter Form:
             alternative newsletter form via email;
             write your email in newsletter-process.php and use:
             <form action="php/newsletter-process.php" id="newsletter-form" method="post"> insted of
             <form id="mc-form"> -->
                            <form action="{{ route('newsletter.subscribe') }}" id="subscribeForm" method="post">
                                @csrf
                                <!-- Input Group -->
                                <div class="input-group">
                                    <input type="email" id="newsletter-email" class="form-control form-control-light"
                                        name="email" placeholder="Enter your Email here...">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-color"><i
                                                class="icon icon-sm icon-arrows-slim-right-dashed"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /End Input Group -->

                                <!-- Message Alert -->
                                <div id="message-newsletter" class="message-wrapper text-white message">

                                    <span><i class="icon icon-sm icon-arrows-slim-right-dashed"></i><label
                                            class="message-text" for="email"></label></span>
                                </div>
                                <!-- /End Message Alert -->

                            </form>
                            <!-- /End Newsletter Form -->

                        </div>
                    </div>

                </div>
                <!-- /End .modal-content -->
            </div>
            <!-- /End .modal-dialog -->
        </div>
        <!-- /End Modal -->
        <div id="modal-success" class="modal fade modal-scale" tabindex="-1" role="dialog"
            aria-labelledby="meinModalLabel">

            <!-- .modal-dialog -->
            <div class="modal-dialog" role="document">
                <div>

                    <!-- .modal-content -->
                    <div class="modal-content text-center bg-success text-light">
                        <button class="button-close" data-dismiss="modal" aria-label="Close"><i
                                class="icon icon-lg icon-arrows-remove"></i></button>


                        <!-- Headline -->
                        <div class="wrap-line border-dark">
                            <h3><span class="font-weight-200">Thank</span> You</h3>
                        </div>
                        <!-- /End Headline -->

                        <!-- Description -->
                        <div class="p-t-b-15">
                            <p>You have successfully supscribed to our newsletter<br>
                                You'll be the first to know when we luanch.</p>
                        </div>
                        <!-- /End Description -->

                    </div>

                </div>
                <!-- /End .modal-content -->
            </div>
            <!-- /End .modal-dialog -->
        </div>

        <div id="modal-already" class="modal fade modal-scale" tabindex="-1" role="dialog"
            aria-labelledby="meinModalLabel">

            <!-- .modal-dialog -->
            <div class="modal-dialog" role="document">
                <div>

                    <!-- .modal-content -->
                    <div class="modal-content text-center bg-success text-light">
                        <button class="button-close" data-dismiss="modal" aria-label="Close"><i
                                class="icon icon-lg icon-arrows-remove"></i></button>


                        <!-- Headline -->
                        <div class="wrap-line border-dark">
                            <h3><span class="font-weight-200">Already</span> Subscriped!</h3>
                        </div>
                        <!-- /End Headline -->

                        <!-- Description -->
                        <div class="p-t-b-15">
                            <p>You have already subscribed for the newsletter<br>
                                We will be in touch soon.</p>
                            <p>If you would like to unsubscribe, <a href="#" id="unsubscribe">click here</a></p>
                        </div>
                        <!-- /End Description -->

                    </div>

                </div>
                <!-- /End .modal-content -->
            </div>
            <!-- /End .modal-dialog -->
        </div>
        <div id="modal-unsubscribed" class="modal fade modal-scale" tabindex="-1" role="dialog"
            aria-labelledby="meinModalLabel">

            <!-- .modal-dialog -->
            <div class="modal-dialog" role="document">
                <div>

                    <!-- .modal-content -->
                    <div class="modal-content text-center bg-success text-light">
                        <button class="button-close" data-dismiss="modal" aria-label="Close"><i
                                class="icon icon-lg icon-arrows-remove"></i></button>


                        <!-- Headline -->
                        <div class="wrap-line border-dark">
                            <h3><span class="font-weight-200">Successfully</span> Unubscriped!</h3>
                        </div>
                        <!-- /End Headline -->

                        <!-- Description -->
                        <div class="p-t-b-15">
                            <p>You have successfully unsubscribed from our mailing list<br>
                            </p>
                        </div>
                        <!-- /End Description -->

                    </div>

                </div>
                <!-- /End .modal-content -->
            </div>
            <!-- /End .modal-dialog -->
        </div>
        <div id="modal-msg-sent" class="modal fade modal-scale" tabindex="-1" role="dialog"
            aria-labelledby="meinModalLabel">

            <!-- .modal-dialog -->
            <div class="modal-dialog" role="document">
                <div>

                    <!-- .modal-content -->
                    <div class="modal-content text-center bg-success text-light">
                        <button class="button-close" data-dismiss="modal" aria-label="Close"><i
                                class="icon icon-lg icon-arrows-remove"></i></button>


                        <!-- Headline -->
                        <div class="wrap-line border-dark">
                            <h3><span class="font-weight-200">Message</span> Sent!</h3>
                        </div>
                        <!-- /End Headline -->

                        <!-- Description -->
                        <div class="p-t-b-15">
                            <p>Thank you for getting in touch with us! <br> 
                                We have received your message and will get back to you as soon as we can.
                            </p>
                        </div>
                        <!-- /End Description -->

                    </div>

                </div>
                <!-- /End .modal-content -->
            </div>
            <!-- /End .modal-dialog -->
        </div>
        <!-- ============================
       Header Navigation
  ================================= -->

        <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-white col-transform">
                            <div class="navbar-wrapper">

                                <!-- Navbar Button -->
                                <button class="navbar-button show-info" data-href="#content">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <!-- /End Navbar Button -->

                                <!-- Navbar Links -->
                                <div class="navbar-links scrollspy">
                                    <ul class="nav">
                                        <li><a class="smooth-scroll link-white" href="#about">About</a></li>
                                        <li><a class="smooth-scroll link-white" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- /End Navbar Links -->

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid">
            <div class="row">


                <!-- ============================
           Info
      ================================= -->

                <div id="info" class="col-md-12 text-white text-center page-info col-transform">
                    <div class="vert-middle">
                        <div class="reveal scale-out">

                            <!-- Logo -->
                            <div class="p-t-b-15">
                                <img src="images/iplus2.png" height="100" width="70" alt="">
                            </div>
                            <!-- /End Logo -->

                            <div class="p-t-b-15">
                                <!-- Headline & Description -->
                                <h2><span class="font-weight-200">We're launching soon</span><br>I-plus</h2>

                                <p>The #1 freelancing platform tailored only for Dubai and the people of Dubai<br>We're
                                    working hard to give you the best experience!<br>
                                </p>
                                <!-- /End Headline & Description -->
                            </div>
                            <!-- Arrow -->
                            <div class="p-t-b-20">
                                <i class="icon icon-sm icon-arrows-slim-down-dashed"></i>
                            </div>
                            <!-- /End Arrow -->

                            <!-- Buttons -->
                            <div class="p-t-b-15 btn-row">
                                <button class="btn btn-color" data-toggle="modal" data-target="#modal-notify"
                                    role="button">Notify me
                                </button>
                                <a class="btn btn-border-white show-info" role="button" data-href="#content">
                                    More info
                                </a>
                            </div>
                            <!-- /End Buttons -->

                            <!-- Social Media Links -->
                            <div class="p-t-b-30">
                                <p>
                                    <a href="https://www.facebook.com/profile.php?id=61556413058605"
                                        class="link-white"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.linkedin.com/company/101672617/" class="link-white"><i
                                            class="fa fa-linkedin"></i></a>
                                    <a href="https://www.instagram.com/iplus.app/" class="link-white"><i
                                            class="fa fa-instagram"></i></a>
                                </p>
                            </div>
                            <!-- Social Media Links -->

                        </div>
                    </div>
                </div>


                <!-- ============================
           Content
      ================================= -->

                <div id="content" class="page-content col-md-6 text-center bg-white-09">

                    <!-- ----------------------------
             About Section
        --------------------------------- -->

                    <section id="about" class="p-t-b-30">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <!-- Headline -->
                                <div class="wrap-line border-dark">
                                    <h3><span class="font-weight-200">About</span> Us</h3>
                                </div>
                                <!-- /End Headline -->

                                <!-- Description -->
                                <div class="p-t-b-15  text-grey">
                                    <p>Your gateway to endless freelance opportunities.</p>
                                </div>
                                <!-- /End Description -->

                                <!-- Social Media Links -->
                                <div class="p-t-b-15">
                                    <p>
                                        <a href="https://www.facebook.com/profile.php?id=61556413058605"
                                            target="_blank">
                                            <i class="fa fa-facebook"></i></a>
                                        <a href="https://www.linkedin.com/company/101672617/" target="_blank">
                                            <i class="fa fa-linedin"></i></a>
                                        <a href="https://www.instagram.com/iplus.app/" target="_blank">
                                            <i class="fa fa-instagram"></i></a>
                                    </p>
                                </div>
                                <!-- /End Social Media Links -->

                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="gallery row no-gutters p-t-b-30">

                            <!-- Image 1 -->
                            <figure class="col-xs-6 img-hover-effect">
                                <a href="images/about-image-5-lg.jpg" data-size="900x600">
                                    <img class="img-responsive" src="images/img1.png" alt="Image description" />
                                </a>

                                <span class="img-title">Side Hustle</span>
                                <span class="img-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore.</span>
                                <span class="img-overlay"></span>
                            </figure>
                            <!-- /End Image 1 -->

                            <!-- Image 2 -->
                            <figure class="col-xs-6 img-hover-effect">
                                <a href="images/about-image-6-lg.jpg" data-size="900x600">
                                    <img class="img-responsive" src="images/img2.png" alt="Image description" />
                                </a>

                                <span class="img-title">Make money</span>
                                <span class="img-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore.</span>
                                <span class="img-overlay"></span>
                            </figure>
                            <!-- /End Image 2 -->

                            <!-- Image 3 -->
                            <figure class="col-xs-6 img-hover-effect">
                                <a href="images/about-image-7-lg.jpg" data-size="900x600">
                                    <img class="img-responsive" src="images/img3.png" alt="Image description" />
                                </a>

                                <span class="img-title">Get Services done</span>
                                <span class="img-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore.</span>
                                <span class="img-overlay"></span>
                            </figure>
                            <!-- /End Image 3 -->

                            <!-- Image 4 -->
                            <figure class="col-xs-6 img-hover-effect">
                                <a href="images/about-image-8-lg.jpg" data-size="900x600">
                                    <img class="img-responsive" src="images/img4.png" alt="Image description" />
                                </a>
                                <span class="img-title">Dubai Freelancing</span>
                                <span class="img-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore.</span>
                                <span class="img-overlay"></span>
                            </figure>
                            <!-- /End Image 4 -->

                        </div>
                        <!-- /End Gallery -->

                    </section>


                    <!-- ----------------------------
             Contact Section
        --------------------------------- -->

                    <section id="contact" class="p-t-b-30">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">

                                <!-- Headline -->
                                <div class="wrap-line border-dark">
                                    <h3>Contact</h3>
                                </div>
                                <!-- /End Headline -->

                                <!-- Description -->
                                <div class="p-t-b-15  text-grey">
                                    <p>We launch I-plus soon.<br>
                                        Please stay updated and follow.</p>
                                </div>
                                <!-- /End Description -->

                                <!-- Contact Form -->
                                <form action="{{ route('contact.send') }}" id="contactForm" method="post">
                                    @csrf
                                    <input type="text" class="form-control form-control-custom" tabindex="-1"
                                        id="text-field" name="text-field">

                                    <!-- Input Name -->
                                    <div class="form-group" id="name-field">
                                        <label for="form-name" class="sr-only">Name</label>
                                        <input type="text" class="form-control form-control-dark" id="form-name"
                                            name="name" placeholder="Name">
                                    </div>
                                    <!-- /End Input Name -->

                                    <!-- Input Email -->
                                    <div class="form-group" id="email-field">
                                        <label for="form-email" class="sr-only">Email</label>
                                        <input type="email" class="form-control form-control-dark" id="form-email"
                                            name="email" placeholder="Email">
                                    </div>
                                    <!-- /End Input Email -->

                                    <!-- Input Message -->
                                    <div class="form-group" id="message-field">
                                        <label for="form-message" class="sr-only">Message</label>
                                        <textarea class="form-control form-control-dark" rows="1" id="form-message" name="message"
                                            placeholder="Message"></textarea>
                                    </div>
                                    <!-- /End Input Message -->

                                    <!-- Submit Button -->
                                    <div class="btn-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark" role="button">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /End Submit Button -->

                                </form>
                                <!-- /End Contact Form -->

                                <!-- Arrow -->
                                <div class="p-t-b-40">
                                    <i class="icon icon-sm icon-arrows-slim-down-dashed"></i>
                                </div>
                                <!-- /End Arrow -->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 p-t-b-5">

                                        <!-- Icon -->
                                        <div class="p-t-b-15">
                                            <i class="icon icon-lg icon-basic-geolocalize-01"></i>
                                        </div>
                                        <!-- /End Icon -->

                                        <!-- Address -->
                                        <div class="p-t-b-15">
                                            <h4>Address</h4>

                                            <p>Dubai<br>
                                                United Arab Emirates</p>
                                        </div>
                                        <!-- /End Address -->

                                    </div>



                                    <div class="col-sm-6  col-sm-offset-0 col-xs-6 col-xs-offset-3 p-t-b-5">

                                        <!-- Icon -->
                                        <div class="p-t-b-15">
                                            <i class="icon icon-lg icon-basic-mail-open"></i>
                                        </div>
                                        <!-- /End Icon -->

                                        <!-- Address -->
                                        <div class="p-t-b-15">
                                            <h4>Email</h4>

                                            <p><a href="mailto:">info@i-plus.co</a>
                                        </div>
                                        <!-- /End Address -->

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Alert -->
                        <div id="message-contact" class="message-wrapper text-white message">
                            <i class="icon icon-sm icon-arrows-slim-right-dashed"></i>
                            <span class="message-text"></span>
                        </div>
                        <!-- /End Contact Alert -->

                    </section>

                </div>
            </div>
        </div>

    </div>
    <!-- /#page -->
    <div id="photoswipe"></div>

    <!-- Scripts -->
    <script src="js/plugins/jquery1.11.2.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/scrollreveal.min.js"></script>
    <script src="js/plugins/contact-form.js"></script>
    <script src="js/plugins/newsletter-form.js"></script>
    <script src="js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="js/plugins/photoswipe/photoswipe.min.js"></script>
    <script src="js/plugins/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="js/plugins/jquery.countdown.min.js"></script>
    <script src="js/plugins/fss.min.js"></script>
    <script src="js/plugins/fss-animate.js"></script>
    <script src="js/plugins/prefixfree.min.js"></script>

    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $('#subscribeForm').on('submit', function(event) {
                event.preventDefault();
                var email = $('#newsletter-email').val();
                $.ajax({
                    url: "{{ route('newsletter.subscribe') }}",
                    method: 'POST',
                    data: {
                        email: email,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.message === 'Subscribed successfully!') {
                            $('#newsletter-email').val('');
                            $('#modal-notify').modal('hide');
                            $('#modal-success').modal('show');
                        }
                    },
                    error: function(response) {
                        if (response.status === 409) {
                            $('#modal-notify').modal('hide');
                            $('#modal-already').modal('show');
                        } else {
                            alert('Subscription failed: ' + response.responseJSON.error);
                        }
                    }
                });
            });

            $('#unsubscribe').on('click', function(event) {
                event.preventDefault();
                var email = $('#newsletter-email').val();
                $.ajax({
                    url: "{{ route('newsletter.unsubscribe') }}",
                    method: 'POST',
                    data: {
                        email: email,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.message === 'Unsubscribed successfully!') {
                            $('#newsletter-email').val('');
                            $('#modal-already').modal('hide');
                            $('#modal-unsubscribed').modal('show');
                        }
                    },
                    error: function(response) {
                        alert('Unsubscription failed: ' + response.responseJSON.error);
                    }
                });
            });
            $('#contactForm').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    url: "{{ route('contact.send') }}",
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#modal-msg-sent').modal('show');
                        $('#contactForm')[0].reset();
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        var errorMessage = '';
                        $.each(errors, function(key, value) {
                            errorMessage += value[0] + '<br>';
                        });
                        $('#contact-message').removeClass('alert-success').addClass(
                            'alert-danger').html(errorMessage).show();
                    }
                });
            });
        });
    </script>


</body>

</html>
