<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=nhanvienController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã nhân viên</th>
                        <th scope="col">Tên nhân viên</th>
                        <th scope="col">Mã vị trí</th>
                        <th scope="col">Mã phòng ban</th>
                        <th scope="col">Lương</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col">View detail</th>
                        <th scope="col" colspan='2'>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['manv']?></td>
                        <td><?php echo $value['tennv']?></td>
                        <td><?php echo $value['mavt']?></td>
                        <td><?php echo $value['mapb']?></td>
                        <td><?php echo $value['luong']?></td>
                        <td><?php echo $value['ngayvl']?></td>
                        <td><a href="?controller=nhanvienController&action=show_data&manv=<?php echo $value['manv']?>">
                                <button type="button" class="btn btn-primary">View</button></a></td>
                        <td><a href="?controller=nhanvienController&action=edit&manv=<?php echo $value['manv']?>">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a></td>
                        <td><a href="?controller=nhanvienController&action=delete&manv=<?php echo $value['manv']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td>
                    </tr>  
                    <?php endforeach;?>                 
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>