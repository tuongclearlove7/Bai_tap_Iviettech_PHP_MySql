<?php require('./view/home/header.php');?>
    <div class="container">
         <div class="container">
            <form action="" method="POST">
                <div class="mb-3">
                <label for="" class="form-label">Nhập Mã vị trí</label>
                <input type="text" name="mavt" id="" class="form-control" placeholder="" aria-describedby="helpId">                
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Nhập Mô tả</label>
                <input type="text" name="mota" id="" class="form-control" placeholder="" aria-describedby="helpId">              
                </div>
              
                <button type="submit" name="action" value="save_data" class="btn btn-primary">ADD</button>
            </form>
         </div>
    </div>
<?php require('./view/home/footer.php');?>