<?php
include_once("../componentes/header.php")
?>

<main>
    <h2 class="letra1">Gracias por contactarnos!</h2>
    <ul>
<?php
    $nom;
    $mail;
    $documento;
    $nac;
    $info;
    $foto;

    if(isset($_POST["nom"])){
        $nom = $_POST["nom"];
        print "<p>Nos comunicaremos a la brevedad con vos, $nom</p><p>Informacion cargada:</p>";
        }

    if(isset($_POST["mail"])){
        $mail = $_POST["mail"];
        print "<li>Su mail es $mail</li>";
        }

    if(isset($_POST["documento"])){
        $documento = $_POST["documento"];
        print "<li>Su numero de documento es $documento</li>";
        }
        
    if(isset($_POST["nac"])){
        $nac = $_POST["nac"];
        print "<li>Su fecha de nacimiento es $nac</li>";
        }
        
    if(isset($_POST["info"])){
        $info = $_POST["info"];
        print "<li>Su mensaje fue: $info</li>";
        }

        if(isset($_FILES["foto"])){
            $foto = time().".jpg";
            move_uploaded_file($_FILES["foto"]["tmp_name"],"../archivos/$foto");
            print "<li>La imagen cargada por $nom es:</li> <img src=../archivos/$foto alt='Foto enviada por $nom'>";
        }

?>
</ul>
</main>
<?php
include_once("../componentes/footer.php")
?>

