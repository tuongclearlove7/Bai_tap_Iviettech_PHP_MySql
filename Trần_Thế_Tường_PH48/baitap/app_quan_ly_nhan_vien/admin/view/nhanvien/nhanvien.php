<?php require('./view/home/header.php');?>
    <div class="container">
       <h5>Mã nhân viên : <?php echo $nhanvien['manv']?></h5>    
       <h5>Tên nhân viên :<?php echo $nhanvien['tennv']?></h5> 
       <h5>Mã vị trí : <?php echo $nhanvien['mavt']?></h5>
       <h5>Mã phòng ban : <?php echo $nhanvien['mapb']?></h5>    
       <h5>Lương : <?php echo $nhanvien['luong']?></h5>
       <h5>Ngày vào làm : <?php echo $nhanvien['ngayvl']?></h5>        
    </div>
<?php require('./view/home/footer.php');?>