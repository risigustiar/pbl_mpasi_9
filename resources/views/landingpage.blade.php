<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing-page MPASI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <style>
            body, html {
                height: 100%;
                margin: 0;
                padding: 0;
            }
            .masthead {
                background-image: url('{{ asset("assets/img/1.png") }}'); /* Ganti dengan lokasi gambar yang sesuai */
                background-size: cover;
                background-position: center;
                color: white;
                text-align: center;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .masthead h1 {
                margin-bottom: 20px;
            }
            .card{
                background-color: #003b46;

            }
            .navbar-nav .nav-link {
                font-size: 22px; /* Adjust font size */
                color: #733cea; /* Set text color */
                transition: all 0.3s ease; /* Add smooth transition */
            }

            /* Hover effect for navbar links */
            .navbar-nav .nav-link:hover {
                color: #007bff; /* Change text color on hover */
            }

            /* Style for navbar brand */
            .navbar-brand {
                font-size: 24px; /* Adjust font size */
                color: #7827f3; /* Set text color */
            }

            /* Hover effect for navbar brand */
            .navbar-brand:hover {
                color: #007bff; /* Change text color on hover */
            }
            .navbar-blur {
                backdrop-filter: blur(10px); /* Adjust the blur intensity */
                background-color: rgba(0, 123, 255, 0.5); /* Adjust the blue color and opacity */
            }


        </style>

        </head>
        <body id="page-top">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-danger fixed-top py-3 bacground-blur" id="mainNav" >
                <div class="container px-4 px-lg-5">
                    <a class="navbar-brand text-dark" href="#page-top">BabyBit</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link text-dark" href="#about">Panduan MPASI</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="#portfolio">Anggota tim</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="#services">Tim</a></li>
                            <li class="nav-item"><a class="nav-link text-dark" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- masthead -->
            <header class="card">
                <div class="masthead">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                            <div class="col-lg-8 align-self-end">
                                <h1 class="text-black mb-5 font-weight-bold display-4">Selamat Datang Di Aplikasi MPASI BabyBit</h1>
                                <hr class="divider" />
                            </div>
                            <div class="col-lg-8 align-self-baseline">
                                <a class="btn btn-dark btn-xl " href="{{ route('login') }}">Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>




        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Panduan MPASI </h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Agar Pemberian MPASI Lebih Tepat Harap Lihat Panduan</p>
                        <a class="btn btn-light btn-xl" href="#services">Tim Aplikasi</a>
                        <div class="card g-lg-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/panduan1.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/panduan2.jpg') }}" alt="" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/1.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Analysis</div>
                                <div class="project-name">kila</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/2.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Analysis</div>
                                <div class="project-name">Muhammad Ramdhani</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/3.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Analysis</div>
                                <div class="project-name">Joy</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/4.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Desain</div>
                                <div class="project-name">hanif</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/5.png') }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">juan</div>
                                <div class="project-name">Font end</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.png') }}" title="Project Name">
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/6.png') }}" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Risi Gustiar</div>
                                <div class="project-name">Back end</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
                <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
