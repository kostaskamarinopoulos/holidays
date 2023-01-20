<?php

class App {

    protected $controller = 'login';

    protected $method = 'index';

    protected $params = array();

    public function __construct() {
        $url = $this->parseUrl();
        $modelName = ucfirst($url[0]);
        $controllerType = ucfirst($url[0]).'Controller';
        //  print_r($url);

        if(file_exists('../app/Controllers/'.$controllerType.'.php')) {
            // print_r($controllerType);
            $this->controller = $controllerType;
            // echo $controllerType;
            unset($url[0]);

            require_once '../app/Controllers/'.$this->controller.'.php';
        }

        // print_r($url);
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
        // echo $_GET['url'];
        if($_GET['url']) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}