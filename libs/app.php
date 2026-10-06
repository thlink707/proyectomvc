<?
class App {
    function _construct(){
    requiere_once 'controllers/error.php';

    //obtenemos la URL que viene en el navegador o si viene vacio
    $url = isset($_GET['url']) ? GET['url']: null;
    $url = rtrim($url, '/'); //quitamos los / al final de la cadena
    $url = explode('/', $url); //dividir url separada por /

    //Cuando se ingresa sin definir un controlador
        if (empty($url[0])){
            $archivoController = "controllers/main.php";
            requiere_once $archivoController;
            $controller = new Main();
            //Cargamos el modelo Main
            $controller -> loadModel('main');
            $controller -> render();
            return false;
        }
        $archivoController = 'controllers/'.$url[0].'.php';//el objeto principal
        if (file_exists($archivoController))
        {
            requiere_once $archivoController;
            //inicializa el controlador
            $controller = new $url[0];
            //cargamos el modelo
            $controller->loadModel($url[0]);
            //Declaramos l avariable para saber el num de parametros
            $nparam = sizeof($url);
            if($nparam>1)
            {
                if(nparam>2)
                {
                    $param = [];//arrelgo de parametros
                    for($i = 2; $i<$nparam; $i++)
                        array_push($param, $url[$i]);
                    $controller->{$url[1]}($param);
                }
                else
                {
                    $controller->{$url[1]}();
                }
            }
            else
            {
                $controller->render();
            }
        }
        else{
            //cargamos un controlador para el error
            $controller = new Errores();
        }
    }
    }
?>
