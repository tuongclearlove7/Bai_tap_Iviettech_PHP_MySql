<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <h3>Cập nhật phòng ban</h3>
                <div class="mb-3">
                <label for="" class="form-label">Mã phòng ban</label>
                <input type="text" name="mapb" id="" value="<?php echo $phongban['mapb']?>" readonly class="form-control"  aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Tên phòng ban</label>
                <input type="text" name="tenpb" value="<?php echo $phongban['tenpb']?>" id="" class="form-control" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" name="diachi" value="<?php echo $phongban['diachi']?>" id="" class="form-control" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Ngày vào làm</label>
                <input type="text" name="ngayvl" value="<?php echo $phongban['ngayvl']?>" id="" class="form-control"  aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>