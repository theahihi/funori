<div class="wrapper-home-banner-servce" >
	<div class="container">
		<div class="flex_content services-pd site-animation">
			
			
			
			
			<div class="services">
				<div class="img-outer">
					<div class="service-img fade-box">
						<img loading="lazy" decoding="async" width="50" height="50" src="//theme.hstatic.net/200000065946/1001264503/14/vice_item_1_thumb.png?v=482" alt="Giao Hàng & Lắp Đặt">
					</div>
				</div>
				<div class="text">
					<div class="title">Giao Hàng & Lắp Đặt</div>
					<div class="desc">Miễn Phí</div>
				</div>
			</div>
			
			
			
			
			<div class="services">
				<div class="img-outer">
					<div class="service-img fade-box">
						<img loading="lazy" decoding="async" width="50" height="50" src="//theme.hstatic.net/200000065946/1001264503/14/vice_item_2_thumb.png?v=482" alt="Đổi Trả 1 - 1">
					</div>
				</div>
				<div class="text">
					<div class="title">Đổi Trả 1 - 1</div>
					<div class="desc">Miễn Phí</div>
				</div>
			</div>
			
			
			
			
			<div class="services">
				<div class="img-outer">
					<div class="service-img fade-box">
						<img loading="lazy" decoding="async" width="50" height="50" src="//theme.hstatic.net/200000065946/1001264503/14/vice_item_3_thumb.png?v=482" alt="Bảo Hành 2 Năm">
					</div>
				</div>
				<div class="text">
					<div class="title">Bảo Hành 2 Năm</div>
					<div class="desc">Miễn Phí</div>
				</div>
			</div>
			
			
			
			
			<div class="services">
				<div class="img-outer">
					<div class="service-img fade-box">
						<img loading="lazy" decoding="async" width="50" height="50" src="//theme.hstatic.net/200000065946/1001264503/14/vice_item_4_thumb.png?v=482" alt="Tư Vấn Thiết Kế">
					</div>
				</div>
				<div class="text">
					<div class="title">Tư Vấn Thiết Kế</div>
					<div class="desc">Miễn Phí</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="box-first-footer">
        <div class="contact">
            <h2>CONTACT US</h2>
            <div class="in">
                <div>Add :4 Copley Place, 7th Floor, Boston, MA 6</div>
                <div>Tell : 866.453.4748</div>
                <div>HR Fax: 810.222.5439</div>
                <div>sales@funorifurniture.com</div>
            </div>
        </div>
        <div class="contact">
            <h2>Loại sản phẩm</h2>
            <div class="in">
                <?php    
                while($row=mysqLi_fetch_array($loaisp)){  ?>
                <a href="<?php echo '/Funori/trangchu/loaisanpham/' . $row['maloai']; ?>">
                    <div>
                    <?php echo $row['tenloai']?>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
        
        <div class="contact">
            <h2>JOIN US</h2>
            <div class="in">
                <div style="margin-bottom: 25px;">Hãy đăng ký và trở thành thành viên của Funori
                    <br>
                    <a href="<?php echo WEBROOT . 'taikhoan/signup'?>"> Click tại đây để đăng ký tài khoản </a>
                </div>
                
                <div class="icon-contact">
                    <ul>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa-brands fa-behance"></i>
                            </a>
                        </li>                     
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box-second-footer">
        <div class="first-box">
            <div class="title">
                Copyright © 2022. All Right Reserved
            </div>
        </div>
        <div class="second-box">
            <div class="box-bank">
                <img src="Picture/payments-1.png" alt="">
            </div>
        </div>
    </div>
    <!-- <div style="margin-bottom: 600px;"></div> -->
</body>
</html>
<script src="https://kit.fontawesome.com/eda05fcf5c.js" crossorigin="anonymous"></script>
<script src="<?php echo WEBROOT . 'public/client/js/main1.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/client/js/productdetail4.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/client/js/giohang0tk1.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/client/js/giohangcotk1.js' ?>"></script>
<script src="<?php echo WEBROOT . 'public/client/js/ajaxthemgiohang.js' ?>"></script>

