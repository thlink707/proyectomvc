<?php
class Errores extends Controller{

    function _construct()
    {
        parent::_construct();
        $this->view->mensaje = "Error al cargar el recurso X.";
        $this->view->render('error');
    }
    }
?>
