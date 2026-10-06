<?php
class Main extends Controller{
    function _construct()
    {
        parent::_construct();
        $this->view->mensaje2 = "";
    }
    function render()
    {
        $this->view->render('main');
    }
    }
?>
