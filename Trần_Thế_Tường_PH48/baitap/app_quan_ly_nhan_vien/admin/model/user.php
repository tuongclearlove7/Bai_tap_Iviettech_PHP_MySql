<?php

    class userDB{
        public static function  is_valid_admin_login($email, $password){
            $db = Database::getDB();
            $password = sha1($password);
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from users
                          where email=:email 
                                and 
                                password=:password
                ';
                $statement = $db->prepare($query);
                //Thực thi câu lệnh truy vấn
                $statement->bindValue(':email',$email);
                $statement->bindValue(':password',$password);
                $statement->execute();
                //Lấy tất cả dữ liệu ra mảng
                $result = $statement->fetchAll();
                $statement->closeCursor();
                if(count($result) > 0){
                    return true;
                }
                else{
                    return false;
                }
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }

       

    }











































?>