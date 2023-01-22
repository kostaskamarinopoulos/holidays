<?php
session_start();

class Controller 
{
    protected function model($model) {
        require_once '../app/Models/'.$model.'.php';
        
        return new $model();
    }

    protected function view($view, $data = []) {
        if($view != 'login/index' && !isset($_SESSION['user'])) {
            $view = 'login/index';
        }

        require_once '../views/'.$view.'.php';
    }
}