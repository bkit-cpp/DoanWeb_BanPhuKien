<?php 
$sql_ctsanpham="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.iddanhmuc AND
 tbl_sanpham.id_sanpham='$_GET[id]'LIMIT 50";
 $query_chitiet=mysqli_query($mysqli,$sql_ctsanpham);
?>        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <?php while($row_chitiet=mysqli_fetch_array($query_chitiet)){?>
                
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img src="<?php echo 'Admin/modules/quanlysanpham/uploads/'.$row_chitiet['hinhanh'] ?>" alt="Product Image">
                            
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                        <div class="slider-nav-img"><img src="img/1.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/2.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/3.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/4.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/5.jpg" alt="Product Image"></div>
                                        <div class="slider-nav-img"><img src="img/6.jpg" alt="Product Image"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-7">
                                    <form method="POST" action="Pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
                                    <div class="product-content">
                                        <div class="title"><h2><?php echo $row_chitiet['tensanpham'] ?></h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="danhmuc">
                                            <h5>Danh Mục:<?php echo $row_chitiet['tendanhmuc'] ?></h5>
                                        </div>
                                        <div class="MASP">
                                            <h5>Mã SP:<?php echo $row_chitiet['masp'] ?></h5>
                                        </div>
                                        <div class="price">
                                            <h4>Price: <?php echo number_format($row_chitiet['giasp'],0,',','.') ?></h4>
                                            
                                        </div>
                                        <!--
                                        <div class="quantity">
                                            <h4>Quantity:</h4>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="1">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                         -->
                                        <!-- <div class="p-size">
                                            <h4>Size:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">S</button>
                                                <button type="button" class="btn">M</button>
                                                <button type="button" class="btn">L</button>
                                                <button type="button" class="btn">XL</button>
                                            </div> 
                                        </div>
                                        <div class="p-color">
                                            <h4>Color:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn">White</button>
                                                <button type="button" class="btn">Black</button>
                                                <button type="button" class="btn">Blue</button>
                                            </div> 
                                        </div> -->
                                        <div class="action">
                                         <button class="btn" name="themgiohang" type="submit" >
                                         <i class="fa fa-shopping-cart"></i>Add to Cart</button>
                                            <button class="btn" name="themgiohang" type="submit" ><i class="fa fa-shopping-bag"></i>Buy Now</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    
                      <?php
                       } 
                      ?>
                       
                    </div>
                    
                         <!-- Side Bar Start -->
            <div class="col-lg-4 sidebar">
                <div class="sidebar-widget category">
                    <h2 class="title">Category</h2>
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-headphones" viewBox="0 0 20 20">
                                        <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5" />
                                    </svg>Tai Nghe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-phone" viewBox="0 0 20 20">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                    </svg>Ốp lưng điện thoại</a>
                            </li>
                        </ul>
                    </nav>
                </div>



                <div class="sidebar-widget tag">
                    <h2 class="title">Tags Cloud</h2>
                    <a href="#">Lorem ipsum</a>
                    <a href="#">Vivamus</a>
                    <a href="#">Phasellus</a>
                    <a href="#">pulvinar</a>
                    <a href="#">Curabitur</a>
                    <a href="#">Fusce</a>
                    <a href="#">Sem quis</a>
                    <a href="#">Mollis metus</a>
                    <a href="#">Sit amet</a>
                    <a href="#">Vel posuere</a>
                    <a href="#">orci luctus</a>
                    <a href="#">Nam lorem</a>
                </div>
            </div>
            <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
     
        
    
        
        <!-- Footer Bottom Start -->
    
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
