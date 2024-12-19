<?php 
require_once 'core/Controller.php';

class trangchuController extends Controller {
    private $trangchuModel;
    public function __construct(){
        $this->trangchuModel = $this->model('trangchuModel');
    }
    public function home(){
       $phong = $this->trangchuModel->getAll1();
        $loaisp=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $sanphammoi=$this->trangchuModel->getAll3_home();
        $this->view('header');
       $this->view('trangchu/home',['phong'=>$phong,'loaisp'=>$loaisp,'sanphammoi'=>$sanphammoi]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    public function aboutus(){ 
        $loaisp2=$this->trangchuModel->getAll2();
        $this->view('header');
        $this->view('trangchu/aboutus');
        $this->view('footer',['loaisp' => $loaisp2]);

    }
    public function shop(){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $sanpham =$this->trangchuModel->getAllproduct();
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongsp();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }  
        $this->view('header');
        $trang="shop";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tongsp'=>$tongsp,'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);

    }
    public function shop_page($page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $sanpham =$this->trangchuModel->getAllproductpage($offset);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $tongsp =  $this->trangchuModel->tongsp();
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }  
  
        
        $this->view('header');
        $trang="shop";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tongsp'=>$tongsp, 'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);

    }

    


    public function loaisanpham($id){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenloai=$this->trangchuModel->getnameloai($id);
        $sanpham =$this->trangchuModel->getproductloai($id);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongsploai($id);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }

        $this->view('header');
        $trang="loaisp";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenloai'=> $tenloai,'tongsp'=>$tongsp, 'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    public function loaisanpham_page($id,$page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenloai=$this->trangchuModel->getnameloai($id);
        $sanpham =$this->trangchuModel->getproductloaipage($id,$offset);
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();
        $tongsp =  $this->trangchuModel->tongsploai($id);
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="loaisp";
        $this->view('trangchu/shop',['loaisp' =>$loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenloai'=> $tenloai,'tongsp'=>$tongsp, 'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);  
    }



    public function phong($id){
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenphong=$this->trangchuModel->getnamephong($id);
        $sanpham =$this->trangchuModel-> getproductphong($id); 
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $loaivasosp=$this->trangchuModel->getcountloai();

        $tongsp =  $this->trangchuModel->tongspphong($id);

       
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="phong";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenphong'=>$tenphong,'tongsp'=>$tongsp,'trang'=>$trang]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    public function phong_page($id,$page){
        $sosp=12;
        $offset = ($page - 1) * $sosp;
        $phong = $this->trangchuModel->getAll1();
        $loaisp1=$this->trangchuModel->getAll2();
        $loaisp2=$this->trangchuModel->getAll2();
        $tenphong=$this->trangchuModel->getnamephong($id);
        $sanpham =$this->trangchuModel-> getproductphongpage($id,$offset); 
        $sanphamoi= $this->trangchuModel->getAll3_home();
        $tongsp =  $this->trangchuModel->tongspphong($id);
        $loaivasosp=$this->trangchuModel->getcountloai();

       
        $phong_with_count = [];
        while ($row = mysqli_fetch_assoc($phong)) {
        $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
        $phong_with_count[] = $row;
    }
        $this->view('header');
        $trang="phong";
        $this->view('trangchu/shop',['loaisp' => $loaivasosp,'phong'=>$phong_with_count,'allsp'=>$sanpham,'spmoi'=>$sanphamoi,'tenphong'=>$tenphong,'tongsp'=>$tongsp,'trang'=>$trang,'tranghientai'=>$page]);
        $this->view('footer',['loaisp' => $loaisp2]);
    }
    
    public function xulytimkiem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nd'])) {
            $nd = $_POST['nd'];
            $nd = urldecode($nd);
            $nd = trim($nd);
            $nd = filter_var($nd, FILTER_SANITIZE_STRING);
            $encoded_nd = urlencode($nd);
           echo $encoded_nd ;
            header("Location: /Funori/trangchu/shop_timkiem/$encoded_nd");
            exit; 
        } 
    }
    
    public function goiytimkiem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nd'])) {
            $nd = $_POST['nd'];
            $result = $this->trangchuModel->tensp($nd);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                     <a href="/Funori/products/productdetail/' . htmlspecialchars($row['masp']) . '" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                    <div style="display: flex; align-items: center; margin-bottom: 10px;">
                        <img style="width: 70px; height: auto; margin-right: 10px;" src="' . WEBROOT . 'public/client/Picture/anhsanpham/' . htmlspecialchars($row['anhhienthi1']) . '" alt="Ảnh sản phẩm">
                        <span style="font-size: 16px; font-weight: bold;">' . htmlspecialchars($row['tensp']) . '</span>
                  </div>
                    </a>';
                       
                } } else {
                echo "<div>Không tìm thấy sản phẩm</div>";
            }
        } else {
            echo "<div>Dữ liệu không hợp lệ</div>";
        }
    }

    public function shop_timkiem($nd) {
        $nd = urldecode($nd);
        $nd = trim($nd);
        $nd = filter_var($nd, FILTER_SANITIZE_STRING);
        $phong = $this->trangchuModel->getAll1();
        $loaisp1 = $this->trangchuModel->getAll2();
        $loaisp2 = $this->trangchuModel->getAll2();
        $sanpham = $this->trangchuModel->getAllproduct_timkiem($nd);
        $sanphamoi = $this->trangchuModel->getAll3_home();
        $tongsp = $this->trangchuModel->tongsptimkiem($nd);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
       
    
        while ($row = mysqli_fetch_assoc($phong)) {
            $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
            $phong_with_count[] = $row;
        }
       
        $this->view('header');
        $trang = "timkiem";
        $this->view('trangchu/shop', [
            'loaisp' => $loaivasosp,
            'phong' => $phong_with_count,
            'allsp' => $sanpham,
            'spmoi' => $sanphamoi,
            'tongsp' => $tongsp,
            'trang' => $trang,
            'nd' => $nd
        ]);
        $this->view('footer', ['loaisp' => $loaisp2]); 
    }
    
    public function shop_timkiem_page($nd, $page) {
        $nd = urldecode($nd);
        $nd = trim($nd);
        $nd = filter_var($nd, FILTER_SANITIZE_STRING);
        
        $sosp = 12;
        $offset = ($page - 1) * $sosp;
    
        $phong = $this->trangchuModel->getAll1();
        $loaisp1 = $this->trangchuModel->getAll2();
        $loaisp2 = $this->trangchuModel->getAll2();
        $sanpham = $this->trangchuModel->getAllproduct_timkiempage($nd, $offset);
        $sanphamoi = $this->trangchuModel->getAll3_home();
        $tongsp = $this->trangchuModel->tongsptimkiem($nd);
        $loaivasosp=$this->trangchuModel->getcountloai();

        $phong_with_count = [];
       
    
        while ($row = mysqli_fetch_assoc($phong)) {
            $row['soluong'] = $this->trangchuModel->getCountProductsByRoom($row['maphong']);
            $phong_with_count[] = $row;
        }
       
        $this->view('header');
        $trang = "timkiem";
        $this->view('trangchu/shop', [
            'loaisp' =>$loaivasosp,
            'phong' => $phong_with_count,
            'allsp' => $sanpham,
            'spmoi' => $sanphamoi,
            'tongsp' => $tongsp,
            'trang' => $trang,
            'tranghientai' => $page,
            'nd' => $nd
        ]);
        $this->view('footer', ['loaisp' => $loaisp2]);
    }
    

    
}
?>