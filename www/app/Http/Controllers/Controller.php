<?php

namespace Creativolab\App\Http\Controllers;

use Creativolab\App\Http\Response;

class Controller {
    
    private Response $response;

    public function __construct()
    {
        $this->response = new Response();
    }   
    public function render(string $view, array $data = [])
    {
        $this->response->render($view, $data);
    }   
    public function renderWithErrors(string $view, array $data = [], array $errors = [])
    {
        $this->response->renderWithErrors($view, $data, $errors);
    }   
    public function post(string $param) 
    {
        if (!isset($_POST[$param])) {
            return null;
        }
        return $_POST[$param];
    }   
    public function get(string $param)
    {
        if (!isset($_GET[$param])) {
            return null;
        }
        return $_GET[$param];
    }   
}