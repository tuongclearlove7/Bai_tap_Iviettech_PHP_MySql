<?php

    class vitriDB{

        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from vitri';
                $statement = $db->prepare($query);
                //Thực thi câu lệnh truy vấn
                $statement->execute();
                //Lấy tất cả dữ liệu ra mảng
                $result = $statement->fetchAll();
                $statement->closeCursor();
                return $result;
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }

        public static function get_data_by_id($mavt){
            $db = Database::getDB();
            try {
                $query = 'select * from vitri where mavt=:mavt';
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':mavt',$mavt);
                //Thực thi câu lệnh truy vấn
                $statement->execute();
                //Lấy một mẫu tin thoả mãn điều kiện truy vấn
                $result = $statement->fetch();
                $statement->closeCursor();
                return $result;
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }
    
        public static function add_data($vitri){
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "insert into vitri(mavt, mota)
                          values(:mavt, :mota)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':mavt',$vitri['mavt']);
                $statement->bindValue(':mota',$vitri['mota']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                //đóng truy vấn 
                $statement->closeCursor();        
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }
    
        // Hàm cập nhật 
        public static function update_data($vitri){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'update vitri
                          set mota = :mota
                          where mavt = :mavt';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':mavt',$vitri['mavt']);
                $statement->bindValue(':mota',$vitri['mota']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();  
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        
            }
        }
        //Hàm xoá 
        public static function delete_data($mavt){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'DELETE FROM vitri
                          WHERE mavt = :mavt;
                        ';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':mavt',$mavt);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;
            }
        }
    
      
    
    
    }




?>