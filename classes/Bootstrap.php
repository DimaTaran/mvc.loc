<?php

class Bootstrap
{

    private $request;
    private $controller;
    private $action;


    public function __construct($request)
    {
        $this->request = $request;
            if ($this->request['controller'] == "") {
                $this->controller = 'home';
            } else {
                $this->controller = $this->request['controller'];
            }
                if ($this->request['action'] == "") {
                    $this->action = 'index';
                } else {
                    $this->action = $this->request['action'];
                }
//        echo $this->controller;
    }

    public function createController()
    {
//var_dump(class_exists('user'), $this->controller); die;

//        var_dump($this->request['controller']);
//        var_dump( class_exists($this->request['controller']));
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
//            var_dump($parents);
            if (in_array('Controller', $parents)) {

                if (method_exists($this->controller, $this->action)) {

                    return new $this->controller($this->action, $this->request);
                } else {
                    // Method Does Not Exist
                    echo '<h1>Method doesn\'t exist</h1>';
                    return;
                }
            } else {
                // Base Controller Does Not Exist
                echo '<h1>Base controller doesn\'t exist</h1>';
                return;
            }

        } else {
            // Controller Class Does Not Exist
            echo '<h1>Controller class doesn\'t exist</h1>';
            return;
        }
    }


}