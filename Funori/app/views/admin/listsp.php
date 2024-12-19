
<div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
      <h2>Danh sách quản lý</h2>
      <ul class="listtab">
        <a href="/funori/admin/quanlybanhang"><li> <i class="fa fa-home"></i> Tổng quan Funori</li></a>
          <a href="/funori/admin/listsp"><li class="active"><i class="fa-solid fa-box"></i>  Danh sách sản phẩm</li></a>
          <a href="/funori/admin/listkh"><li ><i class="fa-solid fa-users"></i> Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/funori/admin/listtv"><li  ><i class="fa-solid fa-user"></i> Danh sách thành viên</li></a>
          <?php } ?>
          <a href="/funori/admin/dondathang"> <li  ><i class="fa fa-tag"></i> Đơn đặt hàng</li></a>
          <a href="/funori/admin/danhgiakh"><li  ><i class="fa-solid fa-comment"></i> Đánh giá của khách hàng</li></a>
          
        </ul>
      </div>


<div class="main-content">
    <div  class="tab-content active "> 


    <h1>Danh Sách Sản Phẩm</h1>
    <a href="/funori/admin/themsp"><button>Thêm sản phẩm mới</button></a>
    <table class="product-table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Mã sản phẩm</th>
          <th>Tên Sản Phẩm</th>
          <th>Ảnh</th>
          <th>Giá</th>
          <th>Số Lượng tồn</th>
          <th>Số lượng đã bán</th>
          <th>Thao Tác</th>
        </tr>
      </thead>
      <tbody>
      <?php 
$i = 1; 
while ($rowsp = mysqli_fetch_array($sanpham)) { 
    $soluongban = 0; 
    mysqli_data_seek($slban, 0); 
    while ($rowslban = mysqli_fetch_array($slban)) {
        if ($rowsp['masp'] == $rowslban['masp']) {
            $soluongban = $rowslban['soluongban'];
            break;
        }
    }
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $rowsp['masp']; ?></td>
        <td><?php echo $rowsp['tensp']; ?></td>
        <td><img src="<?php echo WEBROOT . 'public/client/Picture/anhsanpham/' . $rowsp['anhhienthi1']; ?>" alt="Ảnh sản phẩm"></td>
        <td><?php echo number_format($rowsp['dongia'], 0, '', ','); ?>₫</td>
        <td><?php echo $rowsp['soluong']; ?></td>
        <td><?php echo $soluongban; ?></td> 
        <td>
            <a href="/funori/admin/editsp/<?php echo $rowsp['masp']; ?>"><button class="btn edit"><i class="fas fa-edit" style="color: white; cursor: pointer;"></i></button></a>
            <a href="/funori/admin/xoasp/<?php echo $rowsp['masp']; ?>" onclick="return confirmCustom('Bạn có chắc chắn muốn xoá sản phẩm  <?php echo $rowsp['tensp']; ?>')"><button class="btn delete"><i class="fas fa-trash" style="color: white; cursor: pointer;"></i></button></a>
        </td>
    </tr>
    <?php 
    $i++; 
}
?>

      </tbody>
    </table>
  </div>
</div>
        <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/listsp.css' ?>">

<?php 

if (isset($_SESSION['thongbaothem'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaothem'] . "');
          }
        </script>";
  unset($_SESSION['thongbaothem']);
}
if (isset($_SESSION['thongbaoxoa'])) {
  echo "<script>
          window.onload = function() {
            alert('" . $_SESSION['thongbaoxoa'] . "');
          }
        </script>";
  unset($_SESSION['thongbaoxoa']);
}

?>
<script>
  function confirmCustom(message) {
    const isConfirmed = window.confirm(message);
    return isConfirmed;
}
</script>


        