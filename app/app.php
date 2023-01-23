<?php

class App {

    protected $controller = 'login';

    protected $method = 'index';

    protected $params = array();

    public function __construct() {
        $url = $this->parseUrl();
        if(!isset($url)) {
            $url[0] = $this->controller;
        }

        $modelName = ucfirst($url[0]);
        $controllerType = ucfirst($url[0]).'Controller';

        if(file_exists('../app/Controllers/'.$controllerType.'.php')) {
            $this->controller = $controllerType;
            unset($url[0]);

            require_once '../app/Controllers/'.$this->controller.'.php';
        }

        $this->controller = new $this->controller($modelName);

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}