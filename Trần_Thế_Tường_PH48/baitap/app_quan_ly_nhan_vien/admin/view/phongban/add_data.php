<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                <label for="" class="form-label">Nhập phòng ban</label>
                <input type="text" name="mapb" id="" class="form-control" placeholder="" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập tên phòng ban</label>
                <input type="text" name="tenpb" id="" class="form-control" placeholder="" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập địa chỉ</label>
                <input type="text" name="diachi" id="" class="form-control" placeholder="" aria-describedby="helpId">              
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập ngày vào làm</label>
                <input type="text" name="ngayvl" id="" class="form-control" placeholder="" aria-describedby="helpId">              
                </div>
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>