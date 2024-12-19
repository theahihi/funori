<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý bán hàng</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/headeradmin1.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.tiny.cloud/1/fu913pcqvkkjh88a0sbfv2ujw5rgt3bh3w46uhb7drzy233p/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.mytextarea',
        plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Dec 16, 2024:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      // Early access to document converters
      'importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),

      });
      
    </script>
    <style>

/* Header */
.header {
    background-color: #2c3e50; /* Màu nền */
    color: #ffffff; /* Màu chữ */
    padding: 10px 20px;
    display: flex;
    
    justify-content: space-between; /* Canh cách 2 bên */
    align-items: center; /* Căn giữa theo chiều dọc */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 0;
}

/* Logo và Tiêu đề */
.header-content {
    display: flex;
    align-items: center;
    gap: 15px;
}

.header-content img {
    width: 50px;
    height: 50px;
    border-radius: 50%; /* Bo tròn hình ảnh */
}

.header-content h1 {
    font-size: 24px;
    margin: 0;
    color: #ffffff;
    font-weight: bold;
}

/* Nút bên phải */
.header-actions {
    display: flex;
    gap: 10px; /* Khoảng cách giữa các nút */
}

.header-actions a {
    background-color:#16A085;
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 5px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 5px; /* Khoảng cách giữa icon và text */
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background 0.3s ease;
}

.header-actions a.dangxuat:hover {
    background-color:rgb(102, 245, 185);
}

.header-actions i {
    font-size: 18px; /* Kích thước icon */
}

.header-content .left h1 {
    font-size: 24px;
    margin: 0;
    color: #ffffff;
}

.header-content .header-actions {
    margin-left: 820px; /* Đảm bảo khoảng cách cố định giữa left và right */
    display: flex;
    gap: 15px; /* Khoảng cách giữa các nút */
}






    </style>
  </head>
  
  <body>
  <header class="header">
    <!-- Bên trái: Logo và Tiêu đề -->
    <div class="header-content">
       <div  style="display:flex" class="left">
          <img src="<?php echo WEBROOT . 'public/admin/Picture/quanly.png'; ?>" alt="Admin Image">
          <h1 style="margin-top:15px">Quản lý Funori: <?php if($_COOKIE['role']==2){echo "ADMIN";}else{echo "Thành viên";}?></h1>
       </div>
        <div class="header-actions right">
        <a >
            <i class="fa-solid fa-user"></i> Nguyễn Thị Thu
        </a>
        <a class="dangxuat" href="<?php echo WEBROOT . 'taikhoan/dangxuat' ?>">
            <i class="fa-solid fa-sign-out"></i> Đăng xuất
        </a>
       
    </div>
    </div>

   
</header>


    