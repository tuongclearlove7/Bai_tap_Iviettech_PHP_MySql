<?php require('./view/home/header.php');?>
    <div class="container">
        <a class="btn btn-primary" href="?controller=vitriController&action=add_data" role="button">Thêm mới</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Mã vị trí</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Detail</th>
                        <th scope="col" colspan='2'>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $value):?>
                    <tr class="">
                        <td ><?php echo $value['mavt']?></td>
                        <td><?php echo $value['mota']?></td>
                       
                        <td><a href="?controller=vitriController&action=show_data&mavt=<?php echo $value['mavt']?>">
                        <button type="button" class="btn btn-primary">Show</button></a>
                        </td>
                        <td><a href="?controller=vitriController&action=edit&mavt=<?php echo $value['mavt']?>">
                                <button type="button" class="btn btn-dark">Edit</button>
                            </a></td>
                        <td><a href="?controller=vitriController&action=delete&mavt=<?php echo $value['mavt']?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a></td>
                    </tr>  
                    <?php endforeach;?>                  
                </tbody>
            </table>
        </div>        
    </div>
<?php require('./view/home/footer.php');?>