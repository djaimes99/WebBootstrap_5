<?php

// Conecta a la base de datos  con usuario, contraseña y nombre de la BD
$servidor = "localhost";
$usuario = "root";
$contrasenia = "123456";
$nombreBaseDatos = "decohogarcontactos";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Decohogar & Inmobiliaria</title>
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
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.min.css">


</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <img class="img-fluid" src="assets/img/corazones.jpg" alt="..." width="20" height="19" /><a class="navbar-brand" href="#page-top">DecoHogar & Inmobiliaria</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#services">Servicios</a></li>
                            <li><a class="dropdown-item" href="#portfolio">Alquileres Disponibles</a></li>
                            <li><a class="dropdown-item" href="#portfolio2">Nuestros Logros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Aliados
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">NeónTecnology</a></li>
                            <li><a class="dropdown-item" href="/desarrollo_web/index.html">Desarrollo Web y Otros.</a></li>
                            <li><a class="dropdown-item" href="#">Criptomonedas y Minería.</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contáctanos</a></li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-white font-weight-bold">Decohogar & Inmobiliaria.</h2>
                    <h5 class="text-white font-weight-bold">Tu inmueble es nuestra prioridad, confía en los que saben..</h5>

                    <h6 class="text-white font-weight-bold">Juntos encontraremos el hogar de tus sueños..!!</h6>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">

                    <a class="btn btn-primary btn-xl" href="#about">Saber más..</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">¡Tenemos lo que necesitas!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Con mas de 30 años de experiencia en el ramo inmobiliario, remodelacióm, compra venta, somos una reconocida empresa en el ámbito inmobiliario, brindando a nuestros clientes las mas atractivas soluciones habitacionales!</p>
                    <a class="btn btn-light btn-xl" href="#services">COMENCEMOS!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">A su servicio</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-cash-coin fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ventas</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-house-door fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Alquiler</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-truck fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Remodelación</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-hand-thumbs-up fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Trabajamos con Seriedad y Responsabilidad</h3>
                        <p class="text-muted mb-0">Su satisfacción es nuestro compromiso!!</p>
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
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section bg-dark text-white" id="portfolio2">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carrusel/bello1.jpg" class="rounded mx-auto d-block" alt="..." width="1100" height="600">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Estructura y joyas Inmobiliarias!!</h5>
                        <p>Plaza Mayor, Catia la Mar Edo. La Guaira!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <<img src="assets/img/carrusel/bello2.jpg" class="rounded mx-auto d-block" alt="..." width="1100" height="600">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Estructura y joyas Inmobiliarias!!</h5>
                            <p>Plaza Mayor, Catia la Mar Edo. La Guaira!!</p>
                        </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrusel/bello3.jpg" class="rounded mx-auto d-block" alt="..." width="1100" height="600">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Estructura y joyas Inmobiliarias!!</h5>
                        <p>Plaza Mayor, Catia la Mar Edo. La Guaira!!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrusel/bello4.jpg" class="rounded mx-auto d-block" alt="..." width="1100" height="600">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Estructura y joyas Inmobiliarias!!</h5>
                        <p>Plaza Mayor, Catia la Mar Edo. La Guaira!!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">¡Déjanos tu información..</h2>
                    <hr class="divider" />
                    <h3>
                        <p class="text-muted mb-5">Y te contactaremos!</p>
                    </h3>
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
                    <form id="contactForm" class="needs-validation" novalidate>
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nombre</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Se necesita un Nombre!!</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="ap" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="ap">Apellido</label>
                            <div class="invalid-feedback" data-sb-feedback="ap:required">Se necesita un Apellido!!</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Correo</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un Correo!!.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email No Válido.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Numeros teléfonos</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Se necesita un número de contacto</div>
                        </div>
                        <!-- Message input-->
                        <label for="phone">¿Que estás buscando?</label>
                        <div class="form-floating mb-3">
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="0">
                                    <-- Seleccione -->
                                </option>
                                <option value="1">Alquilar</option>
                                <option value="2">Comprar</option>
                                <option value="3">Vender</option>
                                <option value="4">Permutar</option>

                            </select>

                            <div class="invalid-feedback" data-sb-feedback="tipo:required">Debe seleccionar una opción!!</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="zona" type="text" placeholder="Zona Interés" data-sb-validations="required" />
                            <label for="email">Zona(s) de Interés</label>
                            <div class="invalid-feedback" data-sb-feedback="zona:required">Ingrese Zona Interés</div>
                            <div class="invalid-feedback" data-sb-feedback="zona:text">Debe ingresar un a Zona</div>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="presu" type="text" placeholder="Presupuesto" data-sb-validations="required" />
                            <label for="email">¿Cual es tu Presupuesto?</label>
                            <div class="invalid-feedback" data-sb-feedback="zona:required">Ingrese..</div>
                            <div class="invalid-feedback" data-sb-feedback="zona:text">Debe ingresar Presupuesto</div>
                        </div>
                        <label for="phone">Tipo de Propiedad que Buscas</label>
                        <div class="form-floating mb-3">
                            <select name="tipo" id="tipo" class="form-control">
                                <option value="0">
                                    <-- Seleccione -->
                                </option>
                                <option value="1">Casa</option>
                                <option value="2">Apartamento</option>
                                <option value="3">Edificio</option>
                                <option value="4">Quinta</option>
                                <option value="5">Galpón</option>
                                <option value="6">Otros Inmuebles</option>
                            </select>

                            <div class="invalid-feedback" data-sb-feedback="tipo:required">Debe seleccionar una opción!!</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="caracteristica" type="text" placeholder="Caracteristicas" data-sb-validations="required" />
                            <label for="email">Caraterísticas Indispensables</label>
                            <div class="invalid-feedback" data-sb-feedback="zona:required">Ingrese caracteristicas primordiales del imnmueble</div>
                            <div class="invalid-feedback" data-sb-feedback="zona:text">Debe ingresar Características</div>
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
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div><b> Telf: 0426-2208294</b> </div>

                </div>

            </div>
            <br>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">

                    <div>
                        <h2><b> Siguenos..!!</b> </h2> <br>
                        <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&q=youtube"><i class="fab fa-youtube-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""><i class="fab fa-twitter fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""><i class="fab fa-facebook fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""><i class="fab fa-instagram-square fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""><i class="fab fa-telegram fa-3x"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2021 - Decohogar & Inmobiliaria.</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
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