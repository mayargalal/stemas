<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stema-Home</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/Color logo - no background.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
</head>

<body>

    <header>
    <nav class="navbar navbar-expand-lg ps-3 navbar-light fixed-top"
        style="background: linear-gradient(to right, #0EB0BA, #304BAB);">
        <div class="container-fluid">
            <a class="navbar-brand ms-5 ps-5" href=""><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA" width="100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-5 ps-5" id="navbarSupportedContent">
                <ul class="navbar-nav ms-5 ps-5 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Stem Cells</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Projects</a>
                    </li>
                    <li class="nav-item"> -->
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex hstack gap-2 me-5" role="loging">
                    <!-- <a class="btn ms-auto" href="signup.html" target="_blank">SignUp</a>
                    <div class="vr" style="color:white ;"></div> -->
                    <a class="btn" href="{{ route('login') }}" >LogIn</a>
                </form>
            </div>
        </div>
    </nav>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/s1.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/s1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/s1.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <section id="features">
        <div class="container">


            <div class="row">

                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-clock fa-3x"></i>
                    <h3>Diagnosing</h3>
                    <p>Every 14 minutes, someone is diagnosed with blood cancer or a related disorder </p>
                </div><!-- 1 -->
                <div class="col-lg-3 col-md-3 box ">
                    <i class=" fas fa-solid fa-bone fa-3x"></i>
                    <h3>Bone marrow</h3>
                    <p>Over 2,000 people in the UK are in need of a bone marrow or stem cell transplant every year

                    </p>
                </div><!-- 2 -->

                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-money-bill-wave fa-3x"></i>
                    <h3>Costs</h3>
                    <p>It costs about £40 to recruit each potential donor to the stem cell register

                    </p>
                </div><!-- 3 -->


            </div><!-- row -->
            <div class="row">

                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-user-check fa-3x"></i>
                    <h3>Responds</h3>
                    <p>50% of the patients respond to treatment with these cells. </p>
                </div><!-- 1 -->
                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-hand-holding-heart fa-3x"></i>
                    <h3>Donation</h3>
                    <p>Every day, at least five people start their search for a matching unrelated stem cell donor
                    </p>
                </div><!-- 2 -->

                <div class="col-lg-3 col-md-3 box ">
                    <i class="fas fa-users fa-3x"></i>

                    <h3>Conclusion</h3>
                    <p>75% of UK patients won’t find a matching donor in their families

                    </p>
                </div><!-- 3 -->


            </div><!-- row -->
        </div><!-- container -->
    </section><!-- features -->
    <!--  -->
    <section id="stem" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h3>What Are Stem Cells?</h3>
                    <p>Stem cells are special human cells that are able to develop into many different cell types. This
                        can range from muscle cells to brain cells. In some cases, they can also fix damaged tissues.
                        Researchers believe that stem cell-based therapies may one day be used to treat serious
                        illnesses such as paralysis and Alzheimer disease.
                    </p>

                    <h3>Types Of Stem Cells?</h3>
                    <p>Stem cells are divided into 2 main forms. They are embryonic stem cells and adult stem cells.
                        Embryonic stem cells. The embryonic stem cells used in research today come from unused embryos.
                        These result from an in vitro fertilization procedure. They are donated to science. These
                        embryonic stem cells are pluripotent. This means that they can turn into more than one type of
                        cell.
                        Adult stem cells. There are 2 types of adult stem cells. One type comes from fully developed
                        tissues such as the brain, skin, and bone marrow. There are only small numbers of stem cells in
                        these tissues. They are more likely to generate only certain types of cells. For example, a stem
                        cell that comes from the liver will only make more liver cells.
                        The second type is induced pluripotent stem cells. These are adult stem cells that have been
                        changed in a lab to be more like embryonic stem cells. Scientists first reported that human stem
                        cells could be changed in this way in 2006. Induced pluripotent stem cells don't seem to be
                        different from embryonic stem cells, but scientists have not yet found one that can develop
                        every kind of cell and tissue
                    </p>

                </div><!-- text -->

                <div class="col-md-4 stem">
                    <img src="{{ asset('assets/images/chemist-doctor-explaining-coworker-vaccine-development-dna-mutations-working-equipped-laboratory.jpg') }}" alt="search" >
                </div><!-- img -->

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- explorer details -->

    <footer class="footer  p-5" data-aos="fade-up"  style="background: #0EB0BA;">
        <section class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 pb-2 pr-3">
                    <a class="navbar-brand ms-5 ps-5" href="#"><img src="{{ asset('assets/images/White logo - no background.png') }}" alt="STEMA" width="100px"></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, quia?</p>


                </div><!-- 1footerfollow -->


                <div class="col-md-3 pb-1 col-sm-6 text-center footerpages">
                    <h6 class="footer-h6">Pages : </h6>
                    <ul>
                        <li><a href="home.html">Home </a></li>
                        <li><a href="indexAbout.html">About</a></li>

                        <li><a href="indexServices.html">Services</a></a></li>
                        <li><a href="#contact">Contact</a></a></li>
                    </ul>
                </div><!-- 2 -->

                <div class="col-md-3 pb-1 col-sm-6 Contact">
                    <h6 class="footer-h6" id="contact">Contact Us : </h6>
                    <div class="">
                        <p> <i class="fas fa-phone-alt p-1"></i> (406)555-0120</p>
                        <p> <i class="far fa-envelope p-1"></i> mangcoding123@gmail.com</p>
                        <p> <i class="fas fa-map-marker-alt p-1"></i> 2972 Westheimer Rd. Santa Ana, Illinois 85486</p>
                    </div>
                </div><!-- 3  -->

                <div class="col-md-3 col-sm-6 text-center footerfollow">
                    <h6 class="footer-h6">Follow Us : </h6>
                    <ul class="">
                        <li><a href="#"><i class="  fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="  fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="  fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="  fab fa-instagram"></i></a></li>
                    </ul>
                </div><!-- 4 -->

            </div><!-- row -->
        </section> <!-- container footer -->
    </footer>


    <script src="{{ asset('assets/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/JS/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('assets/JS/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
