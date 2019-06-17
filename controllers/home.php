<?php


class Home extends Controller
{

    protected function Index()
    {
        try {
            $viewmodel = new HomeModel();
        } catch (PDOException $e) {
            echo "Невозможно установить соединение с базой данных";
        }


        $this->ReturnView($viewmodel->Index(), true);
    }
}