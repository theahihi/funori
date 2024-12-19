<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<Style>
  /* Định dạng tổng quan */

.overview {
  display: flex; /* Chuyển từ grid sang flexbox */
  justify-content: center; /* Căn giữa các ô */
  gap: 10px; /* Khoảng cách giữa các ô */
  max-width: 100%; /* Độ rộng tối đa */
  margin: 0 auto; /* Căn giữa theo chiều ngang */
  height:300px;
}

/* Điều chỉnh chiều cao và nội dung các ô */
.overview-item {
  width: 300px; /* Chiều rộng cố định của ô */
  height: 150px; /* Chiều cao của mỗi ô */
  padding: 20px;
  background-color: #ecf0f1;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Điều chỉnh nội dung bên trong các ô */
.overview-item h3 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #2c3e50;
}

.overview-item p {
  font-size: 26px;
  font-weight: bold;
  color: #e74c3c;
}

.overview-item .label {
  font-size: 14px;
  color: #95a5a6;
}

.overview-item .value {
  font-size: 30px;
  font-weight: bold;
  color: #2c3e50;
}

/* Mobile responsive */
@media (max-width: 768px) {
  .overview {
    flex-direction: column; /* Xếp dọc khi màn hình nhỏ */
    gap: 20px; /* Giảm khoảng cách giữa các ô */
  }

  .overview-item {
    width: 90%; /* Điều chỉnh chiều rộng cho phù hợp */
    margin: 0 auto; /* Căn giữa các ô trên màn hình nhỏ */
  }
}


.container2 {
        max-width: 1100px;
        margin: 0 auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top:-134px
    }
    .container2  h1 {
        text-align: center;
        color: #333;
    }
    canvas {
        margin-top: 20px;
    }
    .filter {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    .filter select {
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button[type="submit"] {
    background-color:#16A085; /* Màu nền xanh */
    color: #fff; /* Màu chữ trắng */
    border: none; /* Loại bỏ đường viền */
    padding: 10px 20px; /* Kích thước nút */
    font-size: 16px; /* Cỡ chữ */
    font-weight: bold; /* Chữ đậm */
    border-radius: 5px; /* Bo tròn góc */
    cursor: pointer; /* Con trỏ thành bàn tay khi hover */
    transition: background-color 0.3s ease, transform 0.2s ease; /* Hiệu ứng chuyển màu và chuyển động */
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2); /* Hiệu ứng đổ bóng */
}

/* Hiệu ứng khi hover */
button[type="submit"]:hover {
    background-color:rgb(118, 235, 182); /* Màu nền xanh đậm hơn */
    transform: translateY(-2px); /* Hiệu ứng nâng nút lên */
}

/* Hiệu ứng khi nhấn (active) */
button[type="submit"]:active {
    background-color: #1f618d; /* Màu nền xanh tối */
    transform: translateY(1px); /* Nhấn nút xuống */
}







</Style>

    <div class="container">
      <!-- Sidebar -->
      <div class="sidebar">
        <h2>Danh sách quản lý</h2>
        <ul class="listtab">
          <a href="/funori/admin/quanlybanhang"><li class="active"><i class="fa fa-home"></i> Tổng quan Funori</li></a>
          <a href="/funori/admin/listsp"><li><i class="fa-solid fa-box"></i>  Danh sách sản phẩm</li></a>
          <a href="/funori/admin/listkh"><li ><i class="fa-solid fa-users"></i> Danh sách khách hàng</li></a>
          <?php if($_SESSION['role']==2){?>
            <a href="/funori/admin/listtv"><li ><i class="fa-solid fa-user"></i> Danh sách thành viên</li></a>
            <?php } ?>
            <a href="/funori/admin/dondathang"> <li  ><i class="fa fa-tag"></i> Đơn đặt hàng</li></a>
            <a href="/funori/admin/danhgiakh"><li ><i class="fa-solid fa-comment"></i> Đánh giá của khách hàng</li></a>
          
        </ul>
      </div>

<div class="main-content">
      
          <div id="tongquanbanhang" class="tab-content active">
            
  <div class="container">
        <div >
          <div class="overview">
            <div class="overview-item">
              <h3>Sản Phẩm Còn Tồn</h3>
              <?php $row1=mysqLi_fetch_array($tongsp)?>
              <p class="value"><?php echo $row1['tongsl'] ; ?></p>
            </div>
            <div class="overview-item">
              <h3>Sản Phẩm Đã Bán</h3>
              <?php $row1=mysqLi_fetch_array($tongslban)?>
              <p class="value"><?php echo $row1['tongslban'] ; ?></p>
            </div>
            <div class="overview-item">
              <h3>Tổng Doanh Thu</h3>
              <?php $row1=mysqLi_fetch_array($doanhthu1)?>
              <p class="value"><?php echo number_format($row1['tong_giatri'], 0, '', ','); ?>₫</p>
            </div>
            <div class="overview-item">
              <h3>Khách Hàng Đăng Ký</h3>
              <?php $row1=mysqLi_fetch_array($tongkh)?>
              <p class="value"><?php echo $row1['tongtk'] ; ?></p>
            </div>
         </div>
         <div class="container2" >
        <div class="filter">
        <h1>Doanh Thu theo tháng</h1>
            <form  style="margin-left:300px"id="filterForm">
                <select id="monthFilter" name="month">
                    <option value="">-- Chọn tháng --</option>
                    <option value="2024-01">Tháng 1</option>
                    <option value="2024-02">Tháng 2</option>
                    <option value="2024-03">Tháng 3</option>
                    <option value="2024-04">Tháng 4</option>
                    <option value="2024-05">Tháng 5</option>
                    <option value="2024-06">Tháng 6</option>
                    <option value="2024-07">Tháng 7</option>
                    <option value="2024-08">Tháng 8</option>
                    <option value="2024-09">Tháng 9</option>
                    <option value="2024-10">Tháng 10</option>
                    <option value="2024-11">Tháng 11</option>
                    <option value="2024-12">Tháng 12</option>
                    <!-- Add more months as needed -->
                </select>
                <button type="submit">Lọc</button>
            </form>
        </div>
        <canvas id="doanhThuChart"></canvas>
    </div>
        
        
        </div>
     </div>
        </div>

 
    

       
  </div>

</div>



    
  </body>
</html>
<script>
 document.addEventListener("DOMContentLoaded", function () {
    const chartContainer = document.getElementById('doanhThuChart');
    const totalRevenueDisplay = document.createElement('h2'); // Tạo thẻ hiển thị tổng doanh thu
    totalRevenueDisplay.style.textAlign = 'center';
    totalRevenueDisplay.style.marginTop = '10px';
    totalRevenueDisplay.style.color = '#2c3e50';
    document.querySelector('.container2').appendChild(totalRevenueDisplay);

    let myChart;

    function updateChart(data, month) {
        const labels = data.map(item => item.ngay);
        const revenueData = data.map(item => parseFloat(item.doanhthu)); // Chuyển doanh thu sang số

        // Tính tổng doanh thu
        const totalRevenue = revenueData.reduce((acc, value) => acc + value, 0);

        // Destroy existing chart if it exists
        if (myChart) {
            myChart.destroy();
        }

        // Tạo biểu đồ mới
        const ctx = chartContainer.getContext('2d');
        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Doanh thu theo ngày',
                    data: revenueData,
                    backgroundColor: '#16A085',
                    borderColor: '#16A085',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: true }
                },
                scales: {
                    x: { title: { display: true, text: 'Ngày' } },
                    y: { title: { display: true, text: 'Doanh thu (VNĐ)' }, beginAtZero: true }
                }
            }
        });

        // Hiển thị tổng doanh thu nếu có giá trị tháng
        if (month && totalRevenue > 0) {
            totalRevenueDisplay.innerText = `Tổng doanh thu tháng: ${new Intl.NumberFormat().format(totalRevenue)} VNĐ`;
        } else {
            totalRevenueDisplay.innerText = ""; // Xóa thông tin nếu không có tháng chọn
        }
    }

    // Fetch dữ liệu qua POST
    function fetchData(month) {
        const formData = new FormData();
        formData.append('month', month);

        fetch('/Funori/admin/getDoanhThuJSON', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(result => {
                console.log("Dữ liệu nhận được:", result);
                updateChart(result, month); // Truyền dữ liệu và tháng vào hàm updateChart
            })
            .catch(error => console.error('Lỗi khi lấy dữ liệu:', error));
    }

    // Load dữ liệu ban đầu
    fetchData('');

    // Lọc dữ liệu theo tháng khi submit form
    document.getElementById('filterForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Ngăn reload trang
        const selectedMonth = document.getElementById('monthFilter').value;
        fetchData(selectedMonth);
    });
});


</script>