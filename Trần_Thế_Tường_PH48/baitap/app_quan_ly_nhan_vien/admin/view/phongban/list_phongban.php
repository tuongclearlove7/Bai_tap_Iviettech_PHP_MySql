<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=phongbanController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã phòng ban</th>
                        <th scope="col">Tên phòng ban</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col">View detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['mapb']?></td>
                        <td><?php echo $value['tenpb']?></td>
                        <td><?php echo $value['diachi']?></td>
                        <td><?php echo $value['ngayvl']?></td>
                        <td><a href="?controller=phongbanController&action=show_data&mapb=<?php echo $value['mapb']?>">
                                <button type="button" class="btn btn-primary">View</button></a></td>
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>