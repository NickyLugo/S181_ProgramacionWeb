<footer class="footer-position">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baD1411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <footer class="bg-dark text-white pt-4 pb-3">
        <div class="container text-left text-md-left"> <!-- Aquí justificamos el contenido de cada div en el footer -->
            <div class="row text-left text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning"> Nombre de la empresa </h5>
                    <p>7th Byte Library, Inc. es la mayor librería de México.​ 
                        Opera principalmente a través de la cadena Seven Byte Booksellers, 
                        con sede central en el bajío, Querétaro.</p>
                </div>
                
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Productos</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Aprendiendo </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Creatividad </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Inteligencia </a>
                        </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 text-left">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links útiles</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Tu cuenta </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Tarifa de envío </a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Ayuda </a>
                        </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-left">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
                        <p>
                        <i class="fas fa-home mr-3"></i>  Querétaro México, 76246
                        </p>
                        <p>
                        <i class="fas fa-envelope mr-3"></i>  seventhbyte@gmail.com
                        </p>
                        <p>
                        <i class="fas fa-phone mr-3"></i>  +52 442-669-9032
                        </p>
                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <p> Copyright © 2023 All rights reserved by: 
                        <a href="" style="text-decoration:none;">
                            <strong class="text-warning"> 7th byte library </strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="datetime text-light d-flex">
                        <p class="text-center">Hoy es: {{ $now->format('d-m-Y') }}</p>       
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btb-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btb-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btb-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btb-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btb-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</footer>
