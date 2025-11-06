<?php

class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Kiểm tra controller
        if (isset($url[0]) && file_exists('controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require_once 'controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Kiểm tra method
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Lấy tham số
        $this->params = $url ? array_values($url) : [];

        // Gọi method với tham số
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
         return [];
    }
}