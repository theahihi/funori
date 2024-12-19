
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
          <a href="/funori/admin/quanlybanhang"><li ><i class="fa fa-home"></i> Tổng quan Funori</li></a>
          <a href="/funori/admin/listsp">  <li ><i class="fa-solid fa-box"></i>  Danh sách sản phẩm</li></a>
          <a href="/funori/admin/listkh"><li  ><i class="fa-solid fa-users"></i>Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/funori/admin/listtv"><li><i class="fa-solid fa-user"></i> Danh sách thành viên</li></a>
            <?php } ?>
         <a href="/funori/admin/dondathang"> <li class="active" ><i class="fa fa-tag"></i> Đơn đặt hàng</li></a>
          <a href="/funori/admin/danhgiakh"><li ><i class="fa-solid fa-comment"></i> Đánh giá của khách hàng</li></a>
        </ul>
      </div>

</style>
<div class="main-content">
    <div  class="tab-content active "> 
    

    



    
  </div>
</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/danhgia.css' ?>">

<script>



</script>
   

        