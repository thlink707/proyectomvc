<?php
class View{
    function _construct()
    {
        echo '<p>Vista Base.<p>';
    }
    //Funcion para determinar q vista cargar
    function render ($nombre)
    {
        require 'views/'.$nombre.'.php';
    }
    }
?>
