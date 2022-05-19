<?php

/**
 * @author Fernando Defez <fernandodefez@outlook.com>
 */

namespace Creativolab\App\Http;

class Response {

    /**
     * This method performs the rendering of templates
     * 
     * @param string $view the template name placed within resources/views
     * @param array $data the data to be render withing the template
     */
    public function render(string $view, array $data = [])
    {
        $this->data = $data;
        include __DIR__ . '/../../resources/views/' . $view . '.php';
    }

    /**
     * This method performs the rendering of templates
     * 
     * @param string $view the template name placed within resources/views
     * @param array $data the data to be render withing the template
     */
    public function renderWithErrors(string $view, array $data = [], array $errors = [])
    {
        $this->data = $data;
        $this->errors = $errors;
        include __DIR__ . '/../../resources/views/' . $view . '.php';
    }
}