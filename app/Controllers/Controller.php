<?php
session_start();

class Controller 
{
    public function model($model) {
        require_once '../app/Models/'.$model.'.php';
        
        return new $model();
    }

    public function view($view, $data = []) {
        if($view != 'login/index' && !isset($_SESSION['user'])) {
            $view = 'login/index';
        }
        
        require_once '../views/'.$view.'.php';
    }
}