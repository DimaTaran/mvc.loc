<?php


class user extends Controller
{

    protected function Index()
    {
//        echo 'HOME/INDEX';
//        $pdo->query('SELECT ter_address FROM t_koatuu_tree LIMIT 500');
//        $com  = $this->resultSet();
//        $this->query('SELECT ter_address FROM t_koatuu_tree LIMIT 500');
//        $com  = $this->resultSet();
//        $com  = $this->single();
        $viewmodel = new UserModel();
//        var_dump($viewmodel->Index());
//        $viewmodel->query('SELECT ter_address FROM t_koatuu_tree LIMIT 10');
//        $com  = $viewmodel->resultSet();
//        var_dump($com);
        $this->ReturnView($viewmodel->Index(), true);
    }

        protected function exist()
    {
//        echo 'User/Exist';
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->Exist(), true);
    }


}