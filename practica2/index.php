<?php
    require_once('bd/conexion.php');
    require_once('controlador/estudiante_controller.php');
    require_once('controlador/universidad_controller.php');
    require_once('controlador/carrera_controller.php');
    require_once('controlador/usuario_controller.php');

    $controller= new estudiante_controller();
    $controllerUniversidad = new universidad_controller();
    $controllerCarrera = new carrera_controller();
    $controllerUsuario = new usuario_controller();
    
    if(!empty($_REQUEST['universidad'])){
        $metodo=$_REQUEST['universidad'];
        if (method_exists($controllerUniversidad, $metodo)) {
            $controllerUniversidad->$metodo();
        }else{
            $controllerUniversidad->index();
        }
    }

    if(!empty($_REQUEST['carrera'])){
        $metodo=$_REQUEST['carrera'];
        if (method_exists($controllerCarrera, $metodo)) {
            $controllerCarrera->$metodo();
        }else{
            $controllerCarrera->index();
        }
    }

    if(!empty($_REQUEST['usuario'])){
        $metodo=$_REQUEST['usuario'];
        
        if (method_exists($controllerUsuario, $metodo)) {
            $controllerUsuario->$metodo();
        }/*else{
            $controllerUsuario->index();
        }*/
    }

    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }/*else{
        $controller->index();
    }*/





?>