<?php
//crear el array de idiomas permitidos
$idiomasPermitidos = ['es','ca'];

//obtener la pagina donde nos encontramos
$pagina = $_SERVER['PHP_SELF'];
//echo ($pagina);

//seleccionar idioma del navegador
$idiomaNavegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

//validar que el idioma del navegador este contemplado en el array
if(in_array($idiomaNavegador,$idiomasPermitidos)) {
    //Nos cojera el idioma que el navegador tiene asignado
    $idioma = $idiomaNavegador;

}

if(isset($_GET['idioma'])){
    //asegurar que el idioma existe
    if(in_array($_GET['idioma'],$idiomasPermitidos)) {

    $idioma = $_GET['idioma'];
    //guardar el idioma en una cookie
    setcookie('idioma',$idioma,time()+3600*24*365);
    }
}else{

    //comprobar si existe cookie de idioma
    if(isset($_COOKIE['idioma'])) {
        $idioma = $_COOKIE['idioma'];
    }
}

    //incorporar el fichero externo de variables
    include("contenido_$idioma.php");


    ?>