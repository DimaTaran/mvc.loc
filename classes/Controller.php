<?php

abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($action,$request)
    {
        $this->action = $action;
        $this->request = $request;
    }


    // при вызове для конкретного экзмепларя вместо {$this->action} конкретный запрос action из $_GET,
    // который определился при вызове createController() в определенном экзмепляре $controller класса HOME
    // для HOME это Index из homel.php $this->{$this->action}() = $controller->executeAction() or $controller->index()
    public function executeAction()
    {
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview)
    {
        $view = 'views/'. mb_strtolower(get_class($this)) . '/' . $this->action. '.php';
         if ($fullview){
            require('views/main.php');
        } else {
            require($view);
        }
        return;
    }
}