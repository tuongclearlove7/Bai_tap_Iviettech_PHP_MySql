<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <h3>Cập nhật thể loại</h3>
                <div class="mb-3">
                <label for="" class="form-label">Mã nhân viên</label>
                <input type="text" name="manv" id="" value="<?php echo $nhanvien['manv']?>" readonly class="form-control"  aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Tên nhân viên</label>
                <input type="text" name="tennv" value="<?php echo $nhanvien['tennv']?>" id="" class="form-control"  aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Mã vị trí</label>
                <input type="text" name="mavt" value="<?php echo $nhanvien['mavt']?>" id="" class="form-control" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Mã phòng ban</label>
                <input type="text" name="mapb" value="<?php echo $nhanvien['mapb']?>" id="" class="form-control"  aria-describedby="helpId">              
                <?php echo$invalid; ?>   
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Lương</label>
                <input type="text" name="luong" value="<?php echo $nhanvien['luong']?>" id="" class="form-control"  aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Ngày vào làm</label>
                <input type="text" name="ngayvl" value="<?php echo $nhanvien['ngayvl']?>" id="" class="form-control"  aria-describedby="helpId">              
                </div>
                
            </div>

                </div>
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>