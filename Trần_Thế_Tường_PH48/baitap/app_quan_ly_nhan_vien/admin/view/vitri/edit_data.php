<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <h3>Cập nhật phòng ban</h3>
                <div class="mb-3">
                <label for="" class="form-label">Mã vị trí</label>
                <input type="text" name="mavt" id="" value="<?php echo $vitri['mavt']?>" readonly class="form-control"  aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Mô tả</label>
                <input type="text" name="mota" value="<?php echo $vitri['mota']?>" id="" class="form-control" aria-describedby="helpId">              
                </div>
                
                <button type="submit" name="action" value="update_data" class="btn btn-primary">Update</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>