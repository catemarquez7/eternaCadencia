<?php
include_once("../componentes/header.php")
?>

<main>
<section>
        <!--CARROUSEL-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/carrousel1.png" class="d-block w-100" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/carrousel2.png" class="d-block w-100" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/carrousel3.png" class="d-block w-100" alt="Imagen 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</section>
        <!--SECCION-->
    <section>
        <div class="colorfondo2 pad">
            <h1 class="letra1 subtitulo">Los más vendidos!</h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 separacion centrado">
                        <div class="card producto">
                            <img src="../img/libro1.png" class="card-img-top" alt="Imagen libro" width="200" height="350">
                            <div class="card-body">
                                <h2 class="card-title letra1 libro">Teoria de la gravedad</h2>
                                <p class="card-text letra1">Por Leila Guerriero.</p><br>
                                <a href="#" class="btn btn-primary colorboton">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 separacion centrado">
                        <div class="card producto">
                            <img src="../img/libro2.png" class="card-img-top" alt="Imagen libro" width="200" height="350">
                            <div class="card-body">
                                <h2 class="card-title letra1 libro">Diario de un viaje por Tsugaru</h2>
                                <p class="card-text letra1">Por Ozamu Dazai</p>
                                <a href="#" class="btn btn-primary colorboton">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 separacion centrado">
                        <div class="card producto">
                            <img src="../img/libro3.png" class="card-img-top" alt="Imagen libro" width="200" height="350">
                            <div class="card-body">
                                <h2 class="card-title letra1 libro">Curso de literatura argentina</h2>
                                <p class="card-text letra1">Por Jorge Luis Borges</p>
                                <a href="#" class="btn btn-primary colorboton">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-lg-block col-lg-3 col-sm-12 separacion">
                        <div class="card mb-3 margen2">
                            <div class="row g-0">
                                    <div class="card-body">
                                        <h2 class="card-title letra1">Sobre nosotros</h2>
                                        <p class="card-text letra1">Fundada en 2008, en Buenos Aires. Remodelada para
                                            alojar mas de 40.000 titulos, con un catalogo exquisito de clasicos y
                                            novedades.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once("../componentes/footer.php")
?>