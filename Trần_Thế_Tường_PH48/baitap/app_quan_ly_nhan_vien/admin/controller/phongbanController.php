
<?php
include('./model/database.php');
include('./model/Model_phongban.php');

//Lấy action từ phía người dùng
$action = filter_input(INPUT_POST,'action');
if(empty($action)){
    $action = filter_input(INPUT_GET,'action');
    if(empty($action)){
        $action = 'list_phongban';
    }
}
//Thực hiện điều hướng 
switch ($action) {
    case 'list_phongban':
        $data = phongbanDB::getDataModel();
        include('./view/phongban/list_phongban.php');
        break;
    case 'show_data':
        $mapb = filter_input(INPUT_GET,'mapb');
        $phongban = phongbanDB::get_data_by_id( $mapb);
        include('./view/phongban/phongban.php');
        break;  
    case 'add_data':
        include('./view/phongban/add_data.php');
        break;  
    case 'save_data':
        //Lấy thông tin từ form nhập liệu của người dùng
        $phongban['mapb'] = filter_input(INPUT_POST,'mapb');
        $phongban['tenpb'] = filter_input(INPUT_POST,'tenpb');
        $phongban['diachi'] = filter_input(INPUT_POST,'diachi');
        $phongban['ngayvl'] = filter_input(INPUT_POST,'ngayvl');
        //Gọi hàm  để thêm thể loại vào bảng csdl
        phongbanDB::add_data($phongban);

        //Lấy dữ liệu từ bảng và in ra màn hình
        $data = phongbanDB::getDataModel();
        include('./view/phongban/list_phongban.php');
        break;
    case 'edit':
        $mapb = filter_input(INPUT_GET,'mapb');
        $phongban =  phongbanDB::get_data_by_id( $mapb);
        include('./view/phongban/edit_data.php');
        break;
    case 'update_data':
        //Lấy tất cả dữ liệu từ form edit
        $phongban['mapb'] = filter_input(INPUT_POST,'mapb');
        $phongban['tenpb'] = filter_input(INPUT_POST,'tenpb');
        $phongban['diachi'] = filter_input(INPUT_POST,'diachi');
        $phongban['ngayvl'] = filter_input(INPUT_POST,'ngayvl');
        //Gọi hàm cập nhật 
        phongbanDB::update_data($phongban);
        $data = phongbanDB::getDataModel();
        include('./view/phongban/list_phongban.php');
        break;
    case 'delete':
        $mapb = filter_input(INPUT_GET,'mapb');
        //Gọi hàm delete
        phongbanDB::delete_data($mapb);
        $data = phongbanDB::getDataModel();
        include('./view/phongban/list_phongban.php');
        break;
   
    default:
        # code...
        break;
}




?>



