<?php

namespace App\Http;

class Response
{
    protected $view;
    protected $variables;


    public function __construct($view, array $variables)
    {
        $this->view = $view;
        $this->variables = $variables;
    }


    public function getView()
    {
        return $this->view;
    }


    public function send()
    {
        $data = $this->variables;
        //$content = file_get_contents(viewPath($this->getView()));

        require viewPath($this->getView());
    }

}