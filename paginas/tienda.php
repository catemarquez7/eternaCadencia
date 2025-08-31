<?php
include_once("../componentes/header.php")
?>

<main>
<section>
<div class="container-fluid">
        <h1 class="letra1 subtitulo">Tienda</h1>
        <div class="barra">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingrese el libro que desea buscar"
                    aria-label="Search">
                <button class="btn btn-outline-success blancoletra" id="rojoespecial">Buscar</button>
            </form>
        </div>

        <h2 class="letra1 minititulo">Los más vendidos</h2>
        <div class="row colorfondo2 caja ">
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro1.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h3 class="card-title letra1 libro">Teoria de la gravedad</h3>
                        <p class="card-text letra1">Por Leila Guerreiro</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra shop">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro2.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h3 class="card-title letra1 libro">Diario de un viaje por Tsugaru</h3>
                        <p class="card-text letra1">Por Osamu Dazai</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro3.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h3 class="card-title letra1 libro">Curso de literatura argentina</h3>
                        <p class="card-text letra1">Por Jorge Luis Borges</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro4.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h3 class="card-title letra1 libro">¿Y si nos replanteamos el canibalismo?</h3>
                        <p class="card-text letra1">Por Albert Pijuan</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="letra1 minititulo">Recomendaciones del mes</h3>

        <div class="row colorfondo2 caja">
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro5.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h4 class="card-title letra1 libro">Derecho de nacimiento</h4>
                        <p class="card-text letra1">Por Camila Baron.</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro6.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h4 class="card-title letra1 libro">Antes que nada</h4>
                        <p class="card-text letra1">Por Martín Caparrós</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra shop">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro7.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h4 class="card-title letra1 libro">Martha Argerich</h4>
                        <p class="card-text letra1">Por Oliver Bellamy</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra shop">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-3 separacion centrado">
                <div class="card producto">
                    <img src="../img/libro8.png" class="card-img-top" alt="Imagen del producto" width="200"
                        height="350">
                    <div class="card-body">
                        <h4 class="card-title letra1 libro">Asumir el caos</h4>
                        <p class="card-text letra1">Por Luis Felipe Noé.</p>
                        <a href="#" class="btn btn-primary colorboton blancoletra shop">Ver más</a>
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