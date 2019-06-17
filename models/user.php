<?php

class UserModel extends Model
{


    public $ter2;

//    public function getData()
//    {
//        $this->query('SELECT ter_address FROM t_koatuu_tree LIMIT 1000');
////        var_dump($this);
//    }

    public function exist()
    {
//        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//        var_dump($email);
        $email =  $_SESSION['email'];

        $_SESSION =[];
//        unset($_COOKIE[session_name()]);
//        @session_destroy();
        $query_string = "SELECT * FROM user WHERE email='" . $email . "'";

//            var_dump(  $email, $query_string);
        $this->query($query_string);
//            $this->bind(':email', $post['email']);
        $rows = $this->single();
        return $rows;
    }

    public function Index()
    {
        $this->query('SELECT ter_address FROM t_koatuu_tree WHERE ter_level=1 LIMIT 100');

//        $this->ter2 = $this->query('SELECT ter_address FROM t_koatuu_tree WHERE ter_level=2 LIMIT 1000');
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//        var_dump( $post);
        if ($post['submit']) {
            $query_string = "SELECT * FROM user WHERE email='" . $post['email'] . "'";

//            var_dump( $post['email'], $query_string);
            $this->query($query_string);
//            $this->bind(':email', $post['email']);
            $rows = $this->single();
//           var_dump($rows); die;
            if($rows) {

//                if (isset($_SESSION['email'])) {
//                    $_SESSION['email'] = 0;
//                }
                global $email;
                $email = $post['email'];
                $_SESSION['email'] = $post['email'];
//var_dump($email);
                header('Location: ' . ROOT_URL . 'user/exist');
//                return;
            } else {
                // Insert into MySQL
                $this->query('INSERT INTO user (name, email, city, country, district) VALUES(:name, :email, :city, :country, :district )');
                $this->bind(':name', $post['name']);
                $this->bind(':email', $post['email']);
                $this->bind(':city', $post['city']);
                $this->bind(':country', $post['country']);
                $this->bind(':district', $post['district']);
//            $this->execute();
                // Redirect
                header('Location: ' . ROOT_URL);

            }
        }
        return $this;
    }


//    public function add()
//    {
//
//
//        // Sanitize POST
//        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//
//        if($post['submit']){
//            if($post['winename'] == '' || $post['buy_price'] == '' || $post['price'] == '' || $post['stock_leftovers'] == ''){
//                Messages::setMsg('Please Fill In All Fields', 'error');
//                return;
//            }
//            // Insert into MySQL
//            $this->query('INSERT INTO wine_name (winename, buy_price, price, stock_leftovers) VALUES(:winename, :buy_price, :price, :stock_leftovers)');
//            $this->bind(':winename', $post['winename']);
//            $this->bind(':buy_price', $post['buy_price']);
//            $this->bind(':price', $post['price']);
//            $this->bind(':stock_leftovers', $post['stock_leftovers']);
//            $this->execute();
//            // Verify
//            if($this->lastInsertId()){
//                // Redirect
//                header('Location: '.ROOT_URL.'shares');
//            }
//        }
//        return;
//    }

}