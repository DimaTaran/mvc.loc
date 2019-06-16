<?php

class UserModel extends Model
{
    public function Index()
    {

        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//        var_dump($post);
        if ($post['submit']) {
            // Insert into MySQL
            $this->query('INSERT INTO user (name, email, city, country, district) VALUES(:name, :email, :city, :country, :district )');
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':city', $post['city']);
            $this->bind(':country', $post['country']);
            $this->bind(':district', $post['district']);
            $this->execute();
            // Redirect
             header('Location: '.ROOT_URL);
        }
        return;

    }

    public function add()
    {


        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){
            if($post['winename'] == '' || $post['buy_price'] == '' || $post['price'] == '' || $post['stock_leftovers'] == ''){
                Messages::setMsg('Please Fill In All Fields', 'error');
                return;
            }
            // Insert into MySQL
            $this->query('INSERT INTO wine_name (winename, buy_price, price, stock_leftovers) VALUES(:winename, :buy_price, :price, :stock_leftovers)');
            $this->bind(':winename', $post['winename']);
            $this->bind(':buy_price', $post['buy_price']);
            $this->bind(':price', $post['price']);
            $this->bind(':stock_leftovers', $post['stock_leftovers']);
            $this->execute();
            // Verify
            if($this->lastInsertId()){
                // Redirect
                header('Location: '.ROOT_URL.'shares');
            }
        }
        return;
    }

}