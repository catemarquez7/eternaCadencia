<?php
include_once("../componentes/header.php")
?>

<main>
<h1 class="letra1 subtitulo">Conectá con nosotros!</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="colorfondo2 margen1 formulario">

                <form action="datos.php" method="POST" enctype="multipart/form-data" >
                <div>
                    <label for="nom">Nombre completo:</label>
                    <input type="text" name="nom" id="nom" placeholder="Ingrese su nombre" required>
                </div>
                <div>
                    <label for="mail">Correo:</label>
                    <input type="email" name="mail" id="mail" placeholder="Ingrese su correo" required>
                </div>
                <div>
                    <label for="documento">DNI:</label>
                    <input type="number" name="documento" id="documento" placeholder="Ingrese su dacumento" required>
                </div>
                <div>
                    <label for="nac">Fecha de nacimiento:</label>
                    <input type="date" name="nac" id="nac" required>
                </div>
                <div>
                    <label for="info">Envie su consulta:</label>
                    <textarea name="info" id="info" cols="50" rows="5"></textarea>
                </div>
                <div>
                    <label for="foto">Cargue su imagen</label>
                    <input type="file" id="foto" name="foto">
                </div>
                <div>
                    <input type="submit">
                </div>
                </form>
            </div>


            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div class="d-none d-lg-block centro ">
                        <div class="margen1 correccion">
                            <img src="../img/contacto.jpg" alt="Imagen del local" height="375" width="500">
                        </div>
                    </div>
                </div>
                <div class="row colorfondo3 pad">
                    <h2 class="letra1 subtitulo arreglo">Seguinos en las redes:</h2>
                    <div class="col-4 centro">
                        <a href="https://www.instagram.com/eternacadencia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                            target="_blank"><img src="../img/instagram.png" alt="Imagen de instagram" height="80"
                                width="80"></a>
                    </div>
                    <div class="col-4 centro">
                        <a href="#" target="_blank"><img src="../img/facebook.png" alt="Imagen de facebook" height="80"
                                width="80"></a>
                    </div>
                    <div class="col-4 centro">
                        <a href="https://x.com/eternacadencia" target="_blank"><img src="../img/twitter.png"
                                alt="Imagen de twitter" height="80" width="80"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
include_once("../componentes/footer.php")
?>