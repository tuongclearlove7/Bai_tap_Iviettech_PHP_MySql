
<?php
include('./model/database.php');
include('./model/model_nhanvien.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_nhanvien';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_nhanvien':
        $data = nhanvienDB::getDataModel();
        include('./view/nhanvien/list_nhanvien.php');
        break;
    case 'show_data':
        $manv = filter_input(INPUT_GET,'manv');
        $nhanvien = nhanvienDB::get_data_by_id( $manv);
        include('./view/nhanvien/nhanvien.php');
        break;  
    case 'add_data':
        include('./view/nhanvien/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $nhanvien['manv'] = filter_input(INPUT_POST,'manv');
        $nhanvien['tennv'] = filter_input(INPUT_POST,'tennv');
        $nhanvien['mavt'] = filter_input(INPUT_POST,'mavt');
        $nhanvien['mapb'] = filter_input(INPUT_POST,'mapb');
        $nhanvien['luong'] = filter_input(INPUT_POST,'luong');
        $nhanvien['ngayvl'] = filter_input(INPUT_POST,'ngayvl');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        nhanvienDB::add_data($nhanvien);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = nhanvienDB::getDataModel();
        include('./view/nhanvien/list_nhanvien.php');
        break;
    case 'edit':
        $manv = filter_input(INPUT_GET,'manv');
        $nhanvien =  nhanvienDB::get_data_by_id( $manv);
        include('./view/nhanvien/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        //$data = nhanvienDB::getDataModel();
        $nhanvien['manv'] = filter_input(INPUT_POST,'manv');
        $nhanvien['tennv'] = filter_input(INPUT_POST,'tennv');
        $nhanvien['mavt'] = filter_input(INPUT_POST,'mavt');
        $nhanvien['mapb'] = filter_input(INPUT_POST,'mapb');
        $nhanvien['luong'] = filter_input(INPUT_POST,'luong');
        $nhanvien['ngayvl'] = filter_input(INPUT_POST,'ngayvl');
       
        nhanvienDB::update_data($nhanvien);
        $data = nhanvienDB::getDataModel();
        include('./view/nhanvien/list_nhanvien.php');
        break;
    case 'delete':
        $manv = filter_input(INPUT_GET,'manv');
        //Gọi hàm delete
        nhanvienDB::delete_data($manv);
        $data = nhanvienDB::getDataModel();
        include('./view/nhanvien/list_nhanvien.php');
        break;
   
    default:
        # code...
        break;
}




?>



