<?php


class HomeModel extends Model
{
    public function Index()
    {

       $this->query('SHOW TABLES');
        $results = $this->resultSet();
//            var_dump( $results);die;
        if(count($results)>1) {
            $this->query('SELECT * FROM user');
            $rows = $this->resultSet();
            return $rows;
        } else {

            $qwery = '
        create table user
(id int auto_increment,
 email varchar(100) null,
 name varchar(255) null,
 city varchar(255) null,
 district varchar(255) null,
 country varchar(255) null,
     constraint user_pk
     primary key (id)
)';
         $this->query($qwery);
         $this->execute();
//        var_dump($result);die;
    }
    }

    public function registerUser()
    {
       return 111;
    }


    public function add(){
        // Sanitize POST
        return 111;
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
