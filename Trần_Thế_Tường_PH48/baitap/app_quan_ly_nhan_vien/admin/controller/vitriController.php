
<?php
include('./model/database.php');
include('./model/Model_vitri.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_vitri';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_vitri':
        $data = vitriDB::getDataModel();
        include('./view/vitri/list_vitri.php');
        break;
    case 'show_data':
        $mavt = filter_input(INPUT_GET,'mavt');
        $vitri = vitriDB::get_data_by_id( $mavt);
        include('./view/vitri/vitri.php');
        break;  
    case 'add_data':
        include('./view/vitri/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $vitri['mavt'] = filter_input(INPUT_POST,'mavt');
        $vitri['mota'] = filter_input(INPUT_POST,'mota');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        vitriDB::add_data($vitri);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = vitriDB::getDataModel();
        include('./view/vitri/list_vitri.php');
        break;
    case 'edit':
        $mavt = filter_input(INPUT_GET,'mavt');
        $vitri =  vitriDB::get_data_by_id( $mavt);
        include('./view/vitri/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        $vitri['mavt'] = filter_input(INPUT_POST,'mavt');
        $vitri['mota'] = filter_input(INPUT_POST,'mota');
        //Gọi hàm cập nhật 
        vitriDB::update_data($vitri);
        $data = vitriDB::getDataModel();
        include('./view/vitri/list_vitri.php');
        break;
    case 'delete':
        $mavt = filter_input(INPUT_GET,'mavt');
        //Gọi hàm delete
        vitriDB::delete_data($mavt);
        $data = vitriDB::getDataModel();
        include('./view/vitri/list_vitri.php');
        break;
   
    default:
        # code...
        break;
}




?>



