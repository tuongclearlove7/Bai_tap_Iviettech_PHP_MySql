<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <label for="" class="form-label">Nhập mã nhân viên</label>
                <input type="text" name="manv" id="" class="form-control" placeholder="" aria-describedby="helpId">                
                <label for="" class="form-label">Nhập tên nhân viên</label>
                <input type="text" name="tennv" id="" class="form-control" placeholder="" aria-describedby="helpId">                      
                <label for="" class="form-label">Nhập mã vị trí</label>
                <input type="text" name="mavt" id="" class="form-control" placeholder="" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập mã phòng ban</label>
                <input type="text" name="mapb" id="" class="form-control" placeholder="" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập lương</label>
                <input type="text" name="luong" id="" class="form-control" placeholder="" aria-describedby="helpId">  
                <label for="" class="form-label">Nhập ngày vào làm</label>
                <input type="text" name="ngayvl" id="" class="form-control" placeholder="" aria-describedby="helpId">  
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>