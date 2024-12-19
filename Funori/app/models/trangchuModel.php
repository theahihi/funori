<?php

require_once 'core/Model.php';
#require_once 'category.php';
#require_once '../../core/Model.php';
class trangchuModel extends Model {
    protected $table1 = 'phong'; // Tên bảng
    protected $table2 = 'loaisp';
    protected $table3 = 'sanpham';
    protected $tablebl = 'binhluan';
    // Lấy tất cả loại hàng
    public function getAll1() {
        $sql = "SELECT * FROM $this->table1";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getAll2() {
        $sql = "SELECT * FROM $this->table2";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getAll3_home() {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC LIMIT 3 ";
        $result=$this->con->query($sql);
        return $result;
    }  
    public function getAllproduct() {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;

    }  
    public function getAllproductpage($offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset ";
         $result=$this->con->query($sql);
         return $result;

    }  

    public function getproductphong($id) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maphong=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getproductphongpage($id,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maphong=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getnamephong($id){
        $sql = "SELECT * FROM $this->table1 WHERE maphong=$id";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getproductloai($id) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maloai=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;
    }  
    public function getproductloaipage($id,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE maloai=$id
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset";
         $result=$this->con->query($sql);
         return $result;
    }  

    public function getnameloai($id){
        $sql = "SELECT * FROM $this->table2 WHERE maloai=$id";
        $result=$this->con->query($sql);
        return $result;
    }
    public function getCountProductsByRoom($maphong) {
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maphong";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong'];  
    }
    public function getCountProductsByLoai($maloai) {
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maloai";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong'];  
    }
    
    public function getcountcmt(){
        $sql = "SELECT COUNT(masp) as soluong FROM sanpham WHERE maphong = $maloai";
        $result = $this->con->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['soluong']; 
    }
    public function tongsp(){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham ";
        $result = $this->con->query($sql);
        return $result;
    }
    public function tongsploai($id){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE maloai= $id ";
        $result = $this->con->query($sql);
        return $result;
    }
    public function tongspphong($id){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE maphong= $id ";
        $result = $this->con->query($sql);
        return $result;
    }
   
    public function getAllproduct_timkiem($nd) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE tensp LIKE '%$nd%'
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12";
         $result=$this->con->query($sql);
         return $result;

    }  
    
    public function getcountloai(){
        $sql="SELECT $this->table2.*,COUNT($this->table3.masp) AS total_sp
        FROM $this->table2 
        LEFT JOIN $this->table3 ON $this->table2.maloai = $this->table3.maloai
        GROUP BY $this->table2.maloai";
        $result=$this->con->query($sql);
        return $result;
    }



    public function getAllproduct_timkiempage($nd,$offset) {
        $sql = "SELECT $this->table3.*, 
        COUNT($this->tablebl.id) AS total_reviews
        FROM $this->table3
        LEFT JOIN $this->tablebl ON $this->table3.masp = $this->tablebl.masp
        WHERE tensp LIKE '%$nd%'
        GROUP BY $this->table3.masp
         ORDER BY $this->table3.masp DESC
         LIMIT 12 OFFSET $offset ";
         $result=$this->con->query($sql);
         return $result;

    }  
    public function  tensp($nd){
        $sql = "SELECT tensp,masp,anhhienthi1 FROM $this->table3 WHERE tensp LIKE '%$nd%' LIMIT 10 ";
        $result = $this->con->query($sql);
        return $result;
    }
     
    public function tongsptimkiem($nd){
        $sql = "SELECT COUNT(masp) as tongsp FROM sanpham WHERE tensp LIKE '%$nd%' ";
        $result = $this->con->query($sql);
        return $result;
    }
   

    
    

    
}
/*
$obj=new CategoryModel();
$loaihang=new Category('L02','sfdàds11111111111','mota');
echo $obj->update($loaihang);*/
?>
