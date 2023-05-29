<?php

    class phongbanDB{
        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from phongban';
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

        public static function get_data_by_id($mapb){
            $db = Database::getDB();
            try {
                $query = 'select * from phongban where mapb=:mapb';
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':mapb',$mapb);
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
    
        public static function add_data($phongban){
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "INSERT INTO phongban(mapb, tenpb, diachi, ngayvl)
                          values(:mapb, :tenpb, :diachi, :ngayvl)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':mapb',$phongban['mapb']);
                $statement->bindValue(':tenpb',$phongban['tenpb']);
                $statement->bindValue(':diachi',$phongban['diachi']);
                $statement->bindValue(':ngayvl',$phongban['ngayvl']);
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
        public static function update_data($phongban){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'update phongban
                          set 
                          tenpb = :tenpb,
                          diachi = :diachi,
                          ngayvl = :ngayvl
                          where mapb = :mapb';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':mapb',$phongban['mapb']);
                $statement->bindValue(':tenpb',$phongban['tenpb']);
                $statement->bindValue(':diachi',$phongban['diachi']);
                $statement->bindValue(':ngayvl',$phongban['ngayvl']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();    
                $statement->closeCursor();         
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo $error_message;        }
        }
        //Hàm xoá 
        public static function delete_data($mapb){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'delete from phongban
                          where mapb = :mapb';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':mapb',$mapb);
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