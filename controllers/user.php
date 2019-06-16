<?php


class user extends Controller
{

    protected function Index()
    {
//        echo 'HOME/INDEX';
        $viewmodel = new UserModel();

        $this->ReturnView($viewmodel->Index(), true);
//        var_dump($_POST);

    }

//        protected function add()
//    {
//
//        $viewmodel = new UserModel();
//
//        $this->ReturnView($viewmodel->Index(), true);
//    }


}