
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
          <a href="/funori/admin/quanlybanhang"><li> <i class="fa fa-home"></i> Tổng quan Funori</li></a>
          <a href="/funori/admin/listsp">  <li ><i class="fa-solid fa-box"></i>  Danh sách sản phẩm</li></a>
          <a href="/funori/admin/listkh"><li class="active" ><i class="fa-solid fa-users"></i> Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
          <a href="/funori/admin/listtv"><li ><i class="fa-solid fa-user"></i> Danh sách thành viên</li></a>
          <?php } ?>
          <a href="/funori/admin/dondathang"> <li ><i class="fa fa-tag"></i> Đơn đặt hàng</li></a>
          <a href="/funori/admin/danhgiakh"><li ><i class="fa-solid fa-comment"></i> Đánh giá của khách hàng</li></a>
        </ul>
      </div>

<style>
    tr th {
    text-align: center; /* Căn giữa theo chiều ngang */
    vertical-align: middle; /* Căn giữa theo chiều dọc */
    padding: 10px; /* Tạo khoảng cách bên trong ô */
    font-weight: bold; /* In đậm chữ */
}
</style>
<div class="main-content">
    <div  class="tab-content active "> 
    

    <div class="containerdanhgia">
        <h1>Danh sách khách hàng đã đăng ký tài khoản</h1>
        <?php if(mysqLi_num_rows($taikhoan)>0){?>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>username</th>
                    <th>Họ tên</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                    <th <?php if($_SESSION['role']==2){?> 
                      colspan="2"  
                      <?php } ?>>Thao Tác</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $i=1;
               While($row=mysqLi_fetch_array($taikhoan)){ ?>
                <tr>
                <td><?php echo $i ?></td>
                 <td><?php echo $row['username']?></td>
                 <td><?php echo $row['hoten']?></td>
                 <td><?php echo $row['sdt']?></td>
                 <td><?php echo $row['email']?></td>
                 <td><?php
                 if($row['trangthai']==1){ ?>
                    <span style="color:green;"> Hoạt động </span>
                <?php } else{ ?>
                    <span style="color: red;"> Bị khoá </span>
                <?php  }
                 ?></td>
                 <?php if($row['trangthai']==1){?>
                 <td style=" text-align: center; "><a href="/funori/admin/khoatk/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn khoá tài khoản : <?php echo $row['username']; ?>')"><button><i class="fas fa-lock" style="color: white; cursor: pointer;"></button></a></td>
                 <?php } else{?>
                    <td style=" text-align: center; "><a href="/funori/admin/mokhoatk/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn mở khoá tài khoản : <?php echo $row['username']; ?>')"><button><i class="fas fa-lock-open" style="color: white; cursor: pointer;"></i></button></a></td>
                    <?php }?>
                  <?php if($_SESSION['role']==2){ ?>
                 <td style=" text-align: center; " ><a href="/funori/admin/capquyentv/<?php echo $row['id_taikhoan'];?>" onclick="return confirmCustom('Bạn có chắc chắn muốn cấp quyền thành viên cho tài khoản : <?php echo $row['username']; ?>')"><button>Cấp quyền tv</button></a></td>
                 <?php }?>
                 <td><?php echo $row['note']?></td>
                </tr>
                 
                <?php $i++;} ?>
               
            </tbody>
        </table>
        <?php } else{?>
           <br>
           <?php $row= mysqLi_fetch_array($tensp);           ?>
           <h1>Chưa có tài khoản nào</h1>
          <?php }?>
    </div>



    
  </div>
</div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/danhgia.css' ?>">

<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}


    document.addEventListener("DOMContentLoaded", function () {
        const productSelect = document.getElementById("productSelect");
        const filterButton = document.getElementById("filterButton");

        // Kiểm tra giá trị ban đầu
        filterButton.disabled = !productSelect.value;

        // Lắng nghe sự kiện thay đổi
        productSelect.addEventListener("change", function () {
            filterButton.disabled = !productSelect.value; // Vô hiệu nếu giá trị rỗng
        });
    });



</script>
   

        