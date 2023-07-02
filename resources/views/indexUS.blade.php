<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sotelo Tellez Transportation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/LogoSotelo.svg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/7303aec906.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- our project just needs Font Awesome Solid + Brands -->
    {{-- <link href="/fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
  <link href="/fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
  <link href="/fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet"> --}}


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css?family=B') }}" rel="stylesheet">

    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 d-none">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('indexUS') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h4 class="m-0 text-primary text-titulo"><img src="{{ asset('img/LogoSotelo.svg') }}" style="width: 50px;"
                    alt=""> Sotelo Tellez Transportation </h4>
            {{-- <h2 class="m-0 text-primary"><img src="{{ asset('img/LogoSotelo.svg') }}" style="width: 50px;" alt=""> <i class="fa fa-car me-3"></i>CarServ</h2> --}}
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#services" class="nav-item nav-link">Services</a>
                <a href="{{ route('indexES') }}" class="nav-item nav-link"><img src="{{ asset('img/MEXICO.png') }}" alt="ES" style="width: 20px;"></a>
                {{-- <a href="#services" class="nav-item nav-link"><img src="{{ asset('img/USA.png') }}" alt="EN" style="width: 20px; padding: 1px; margin: 1px;"></a> --}}
                {{-- <div class="nav-item dropdown d-none">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Technicians</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
                {{-- <a href="#contact" class="nav-item nav-link">Contact</a> --}}
            </div>
            <a href="#contact" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Contact, Get A Quote<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" id="home">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/pexels-markus-spiske-226460.jpg') }}" alt="Image"
                        style="max-height: 95vh;">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Truck Servicing
                                        //</h6>
                                    <h1  class="display-3 text-white mb-4 pb-3 animated slideInDown" ><i
                                            class="fas fa-truck-moving"></i> <i class="fad fa-truck-container"></i>
                                        Efficient Solutions for Construction Transport</h1>
                                    
                                        <!-- Escrito como codigo -->
                                    <div class="mb-4 pb-3 ">    
                                        <h3 class="typed-text-output d-inline texto_degradado_azul_rojo  animated slideInDown"></h3>
                                        <div class="typed-text d-none ">WELCOME, "SOTELO TELLEZ TRANSPORTATION" is here to help you., TRANSPORTATION AND TRUCK RENTAL SERVICE.</div>
                                        
                                    </div>
                                    <a href="#contact" class="btn btn-primary py-3 px-5 animated slideInDown">Contact<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="palladax col-lg-5 d-none d-lg-flex  wow zoomIn"
                                data-wow-delay="0.6s">
                                    <img class="img-fluid"
                                        src="{{ asset('img/2020_Freightliner_114SD_Dump_Truck.png') }}"
                                        alt=""
                                        id="CamionInicio">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash Service Center</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Quality Servicing</h5>
                            <p>Trucks in motion, with maintenance at every moment</p>
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Expert Workers</h5>
                            <p>Material transportation with skilled professionals. Trust in our expertise!</p>
                            {{-- <p>Transporte de materiales con expertos capacitados ¡Confía en nuestra experiencia!</p> --}}
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Reliable trucks, powered by consistent maintenance!</p>
                            {{-- <p>¡Camiones confiables, impulsados por un mantenimiento constante!</p> --}}
                            {{-- <a class="text-secondary border-bottom" href="">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100 wow zoomIn"
                        data-wow-delay="0.6s" src="{{ asset('img/Camion.jpg') }}"
                            style="object-fit: cover;" alt="">
                        {{-- <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary wow fadeInUp" data-wow-delay="0.5s">Sotelo Tellez transportation Corp, </span> Truck
                        rental for material transportation.</h1>
                    {{-- <h1 class="mb-4"><span class="text-primary">Sotelo Tellez transportation Corp,</span> Renta de camión para el transporte de materiales.</h1> --}}
                    <p class="mb-4">
                        We specialize in the transportation of construction materials and offer a wide range of
                        products, including sand, stone, gravel, and many others.
                        Our company is dedicated to providing reliable and high-quality transportation services, backed
                        by highly trained personnel.
                        Whether you need materials delivered to your construction site or you're looking to purchase
                        products for your projects, you can trust in our expertise and commitment.
                        Contact us today and discover how we can help you build with success!
                    </p>
                    {{-- <p class="mb-4">
                        Transportamos materiales de construcción y ofrecemos una amplia variedad de productos como arena, piedra, grava y muchos otros. 
                        Nuestra compañía está dedicada a brindar servicios de transporte confiables y de alta calidad, respaldados por personal altamente capacitado. 
                        Ya sea que necesites entregar materiales a tu obra o adquirir productos para tus proyectos, puedes confiar en nuestra experiencia y compromiso. 
                        ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a construir con éxito!
                    </p> --}}

                    
                    <div class="row g-4 mb-3 pb-3 d-none">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a> --}}
                </div>
                
                <div class="col-12">
                    <div class="py-5">
                        <h1 class="mb-4 wow fadeInUp" data-wow-delay="0.5s">Objective</h1>
                        {{-- <h1 class="text-white mb-4">Solicitar una cotización de servicio</h1> --}}
                        {{-- <p class="mb-0">
                            Nuestro objetivo principal es proporcionar a nuestros clientes un servicio de renta de
                            transporte de materiales y
                            venta de materiales de construcción que supere sus expectativas en términos de calidad,
                            confiabilidad y satisfacción del cliente.
                            Nos esforzamos por ser reconocidos como el referente en nuestra industria, ofreciendo una
                            amplia gama de productos y
                            servicios de alta calidad que se ajusten a las necesidades específicas de cada cliente.
                        </p> --}}
                        <p class="mb-0">
                            Our main objective is to provide our customers with the highest quality material transportation rental services and construction material sales. 
                            We strive to be recognized as leaders in the market, known for our professionalism, reliability, and excellent customer service.
                            <br>
                            We aim to establish long-lasting and mutually beneficial relationships with our customers by offering them personalized solutions tailored to their specific needs. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">

            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5" id="services">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-3">Explore Our Services</h1>
                <h5 class="text-uppercase mb-5">
                    RENT AND SERVICES ALL TEXAS
                    {{-- Renta y Servicios todo Texas --}}
                </h5>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            {{-- <i class="fa fa-car-side fa-2x me-3"></i> --}}
                            <i class="fa-solid fa-truck-front fa-2x me-3"></i>
                            <h4 class="m-0">Truck rental services.</h4>
                            {{-- <h4 class="m-0">Renta de camiones.</h4> --}}
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            {{-- <i class="fa fa-car fa-2x me-3"></i> --}}
                            <i class="fa-solid fa-handshake fa-2x me-3"></i>
                            <h4 class="m-0">Sale of construction materials.</h4>
                            {{-- <h4 class="m-0">Venta de materiales de construcción.</h4> --}}
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100 wow zoomIn"
                                        data-wow-delay="0.6s"
                                            src="{{ asset('img/pexels-cottonbro-studio-7564869.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3 wow fadeInUp" data-wow-delay="0.5s">Sotelo Tellez Services at your service.</h3>
                                    {{-- <h3 class="mb-3">Servicios Sotelo Tellez a tu servicio</h3> --}}
                                    <p class="mb-4">We offer a specialized truck rental service for the
                                        transportation of construction materials.
                                        Our trucks are designed to provide maximum efficiency and safety in the
                                        transport of all types of materials,
                                        from sand and stone to gravel and other essential products for your projects. We
                                        have modern and well-maintained trucks,
                                        operated by trained and experienced drivers in the transportation of
                                        construction materials.
                                        Whether you need to deliver materials to a developing construction site or
                                        supply your own project,
                                        our truck rental service is the reliable solution you need. We take pride in
                                        offering punctual, reliable,
                                        and high-quality service to ensure your materials reach their destination safely
                                        and efficiently.
                                        Trust us to meet your construction material transportation needs exceptionally.
                                    </p>
                                    {{-- <P class="mb-4">
                                        Ofrecemos un servicio de renta de camiones especializado en el transporte de materiales de construcción. 
                                        Nuestros camiones están diseñados para brindar la máxima eficiencia y seguridad en el traslado de todo tipo de materiales, 
                                        desde arena y piedra hasta grava y otros productos esenciales para tus proyectos. 
                                        Contamos con camiones modernos y bien mantenidos, operados por conductores capacitados y 
                                        experimentados en el transporte de materiales de construcción. Ya sea que necesites entregar 
                                        materiales en una obra en desarrollo o abastecer tu propio proyecto, nuestro servicio de renta de 
                                        camiones es la solución confiable que necesitas. Nos enorgullece ofrecer un servicio puntual, 
                                        confiable y de calidad, para que tus materiales lleguen a su destino de manera segura y eficiente. 
                                        Confía en nosotros para satisfacer tus necesidades de transporte de materiales de construcción de manera excepcional.
                                    </P> --}}
                                    <p><i class="fa fa-check text-success me-3 wow fadeInUp" data-wow-delay="0.5s"></i>Quality Servicing</p>
                                    <p><i class="fa fa-check text-success me-3 wow fadeInUp" data-wow-delay="0.5s"></i>Expert Workers</p>
                                    <p><i class="fa fa-check text-success me-3 wow fadeInUp" data-wow-delay="0.5s"></i>Modern Equipment</p>
                                    {{-- <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More<i class="fa fa-arrow-right ms-3"></i></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100 wow zoomIn"
                                        data-wow-delay="0.6s"
                                            src="{{ asset('img/agregados2.jpg') }}" style="object-fit: cover;"
                                            alt="">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <h3 class="mb-3 wow fadeInUp" data-wow-delay="0.5s">Sale of construction materials.</h3>
                                    <p class="mb-4">
                                        Discover our wide range of construction materials and enhance your project! At our company, 
                                        we offer sales services for materials such as sand, gravel, and various types of stone, with home delivery across Texas. 
                                        <br>
                                        Whether you're working on a large-scale construction project or a small DIY endeavor, 
                                        we are here to provide you with the materials you need conveniently and reliably. 
                                        <br>
                                        Contact us today to place your order and let our experts help you build your dreams with every delivery.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking  wow fadeInUp" data-wow-delay="0.1s" id="contact">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4 wow fadeInUp" data-wow-delay="0.5s">Requesting a Service Quote</h1>
                        {{-- <h1 class="text-white mb-4">Solicitar una cotización de servicio</h1> --}}
                        <p class="text-white mb-0 wow fadeInUp" data-wow-delay="0.5s">
                            Request Your Estimate!
                            {{-- ¡Contáctanos para solicitar un estimado! --}}

                            <br>
                            If you are looking for material transportation rental services or construction material
                            sales,
                            we are here to assist you. At Sotelo Tellez Transportation, we specialize in providing
                            reliable and efficient solutions for your construction needs.


                            {{-- Si estás buscando servicios de renta de transporte de materiales o venta de materiales de construcción, 
                            estaremos encantados de ayudarte. En Sotelo Tellez Transportation, nos especializamos en proporcionar soluciones confiables y 
                            eficientes para tus necesidades de construcción. --}}


                        </p>


                    </div>
                    <div class="w-100 g-5 row mt-2 text-white">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            
                            <h4 class="text-white mb-4">Address</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3 text-danger"></i>Heritage office suites, 1000 Heritage
                                Center Circle, Round Rock TX 78664</p>
        
                        </div>
        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="text-white mb-4">Contacts</h4>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3 text-danger"></i>+1 737-343-2462</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3 text-danger"></i>sotelotelleztransp@gmail.com</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h4 class="text-white mb-4">Opening Hours</h4>
                            <h6 class="text-white">Monday - Saturday:</h6>
                            <p class="mb-4">8:00 am - 17:00 pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4 text-uppercase wow fadeInUp" data-wow-delay="0.5s">Contact</h1>
                        <form action="{{ route('enviar-contactanos')}}" method="POST">
                            @csrf
                            <div class="row g-3">
                                
                                <div class="col-12">
                                    @if (session('success'))
                                        <div class="alert alert-success d-flex align-items-center" role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                            <div>
                                                {{session('success')}}
                                            </div>
                                          </div>
                                    @endif
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 d-none" name="PAGEES" placeholder="id"
                                        style="height: 55px;" value="1">
                                    <input type="text" class="form-control border-0" name="name" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" name="email" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" class="form-control border-0" name="phone" placeholder="Phone Number"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" name="subject" placeholder="Subject"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="message" placeholder="Description"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <section>
        <div class="w-100 row ">
            <div class="col-md-6 col-sm-12">
                <img class="img-fluid  wow zoomIn"
                data-wow-delay="0.6s" src="{{ asset('img/Dump-Trucks-Freightliner-108SD-26944308.jpg') }}"
                            style="object-fit: cover; width: 100%;" alt="">
            </div>
            <div class="col-md-6 col-sm-12 text-center mt-5 p-5 mr-5">
                <h1 class="mb-4"><span class="text-secondary wow fadeInUp" data-wow-delay="0.5s">"Building Success Together: Your Reliable Partner in Material Transportation and Cargo Truck Rental"</h1>
                    {{-- <h1 class="mb-4"><span class="text-secondary">"Truck rental for material transportatio"</h1> --}}
                {{-- <h1 class="mb-4"><span class="text-primary">Sotelo Tellez transportation Corp,</span> Renta de camión para el transporte de materiales.</h1> --}}
                
                <p class="mb-4 p-4 pt-5">
                    We invite you to take advantage of our services and experience excellence in material transportation! At our company, 
                    our trucks are specifically adapted for heavy loads, 
                    providing increased safety and efficiency on every journey. 
                    <br>
                    Our 2-axle trucks are the perfect solution for your transportation needs. 
                    <br>
                    Don't miss the opportunity to work with the best! Contact us today and discover how we can streamline your construction projects.
                </p>
                {{-- <p class="mb-4 p-4 pt-5">
                    ¡Te invitamos a aprovechar nuestros servicios y descubrir la excelencia en transporte de materiales! En nuestra empresa, 
                    nuestros camiones están especialmente adaptados para cargas pesadas, brindando mayor seguridad y eficiencia en cada trayecto. 
                    <br>
                    Nuestros camiones de 2 ejes son la solución perfecta para tus necesidades de transporte. 
                    <br>
                    ¡No pierdas la oportunidad de trabajar con los mejores! Contáctanos hoy mismo y descubre cómo podemos facilitar tus proyectos de construcción.
                </p> --}}
            </div>
        </div>

    </section>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Heritage office suites, 1000 Heritage
                        Center Circle, Round Rock TX 78664</p>

                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Contacts</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 737-343-2462</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sotelotelleztransp@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Saturday:</h6>
                    <p class="mb-4">8:00 am - 5:00 pm</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Sotelo Tellez Corporation Corp</a>, All Right
                        Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.facebook.com/MauPeser">Mauricio
                            Perez</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

<!-- SCRIPT -->
<script>
    window.onscroll = function(){

        var posicion = window.pageYOffset || document.documentElement.scrollTop;

        var elemento1 = document.getElementById("CamionInicio");
        var elemento2 = document.getElementById("muevete2");

        elemento1.style.left = posicion * -0.5 + "px";
        elemento2.style.top = posicion * 0.1 + "px";

    }
</script>

{{-- texto animado como comando --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('lib/typed/typed.min.js') }}"></script>
<script src="{{ asset('js/main-typed-text.js') }}"></script>

</html>
