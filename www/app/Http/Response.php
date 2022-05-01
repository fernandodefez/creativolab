<?php

namespace Creativolab\App\Http;

class Response {

    public function render(string $view, array $data = [])
    {
        $this->data = $data;
        include __DIR__ . '/../../resources/views/' . $view . '.php';
    }

    public function renderWithErrors(string $view, array $data = [], array $errors = [])
    {
        $this->data = $data;
        $this->errors = $errors;
        include __DIR__ . '/../../resources/views/' . $view . '.php';
    }

}