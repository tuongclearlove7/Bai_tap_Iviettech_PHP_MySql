<?php

$invalid = "";
    class nhanvienDB{

        public static function  getDataModel(){
            $db = Database::getDB();
            try {
                //thực hiện câu lệnh truy vấn
                $query = 'select * from nhanvien';
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

        public static function get_data_by_id($manv){
            $db = Database::getDB();
            try {
                $query = 'select * from nhanvien where manv=:manv';
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':manv',$manv);
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
    
        public static function add_data($nhanvien){
            global $invalid;
            $db = Database::getDB();
            try {
                //câu lệnh truy vấn
                $query = "INSERT INTO nhanvien(manv, tennv, mavt, mapb, luong, ngayvl)
                          values(:manv, :tennv, :mavt, :mapb, :luong, :ngayvl)";
                $statement = $db->prepare($query);
                //Gán tham số cho câu lệnh truy vấn
                $statement->bindValue(':manv',$nhanvien['manv']);
                $statement->bindValue(':tennv',$nhanvien['tennv']);
                $statement->bindValue(':mavt',$nhanvien['mavt']);
                $statement->bindValue(':mapb',$nhanvien['mapb']);
                $statement->bindValue(':luong',$nhanvien['luong']);
                $statement->bindValue(':ngayvl',$nhanvien['ngayvl']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();  
                $statement->closeCursor();        
            } catch (PDOException $e) {
                $error_message = $e->getMessage();     
                $invalid = "<p style='color:red;'>".$error_message."</p>";
                include('./view/nhanvien/edit_data.php');  
            }
        }
    
        // Hàm cập nhật 
        public static function update_data($nhanvien){
            global $invalid;
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'update nhanvien
                          set tennv = :tennv,
                              mavt = :mavt,
                              mapb = :mapb,
                              luong = :luong,
                              ngayvl = :ngayvl
                          where manv = :manv';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':manv',$nhanvien['manv']);
                $statement->bindValue(':tennv',$nhanvien['tennv']);
                $statement->bindValue(':mavt',$nhanvien['mavt']);
                $statement->bindValue(':mapb',$nhanvien['mapb']);
                $statement->bindValue(':luong',$nhanvien['luong']);
                $statement->bindValue(':ngayvl',$nhanvien['ngayvl']);
                $statement->bindValue(':mapb', $nhanvien['mapb']);
                //Thực thi câu lệnh truy vấn
                $statement->execute();  
                //đóng truy vấn 
                $statement->closeCursor();          
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                $invalid = "<p style='color:red;'>".$error_message."</p>";
                include('./view/nhanvien/edit_data.php');
            }
        }
        //Hàm xoá 
        public static function delete_data($manv){
            $db = Database::getDB();
            try {
                //Chuẩn bị câu lệnh truy vấn
                $query = 'delete from nhanvien
                          where manv = :manv';
                $statement = $db->prepare($query);
                //Gán tham số
                $statement->bindValue(':manv',$manv);
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