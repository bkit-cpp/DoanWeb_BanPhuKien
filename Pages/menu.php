<?php
 $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY iddanhmuc DESC";
 $querydanhmuc=mysqli_query($mysqli,$sql_danhmuc); 
?>
<div class="navbar-nav mr-auto">
                      
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="index.php?quanly=giohang" class="nav-item nav-link">Giỏ Hàng</a>
                            <a href="index.php?quanly=contact" class="nav-item nav-link">Hỏi Đáp Với AI</a>
                            <a href="index.php?quanly=tongsp" class="nav-item nav-link">Sản Phẩm </a>
                             <?php  if(isset($_SESSION['nameUser'])){ ?>
                            <a href="index.php?quanly=lichsudonhang" class="nav-item nav-link"> Lịch Sử Mua Hàng</a>
                            <a href="index.php?quanly=checkout" class="nav-item nav-link">Thanh Toán </a>    
                            <a href="index.php?quanly=yeuthich" class="nav-item nav-link">Yêu Thích</a>
                                
                            <?php }else{?>
                            <a href="Pages/register.php" class="nav-item nav-link"> Đăng Ký</a>
                            <?php } ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Danh Mục</a>
                                <div class="dropdown-menu">
                                   
                                    <?php 
                                    while($row_danhmuc = mysqli_fetch_array($querydanhmuc)){
                                    ?>
                                    <a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['iddanhmuc']?>" class="dropdown-item"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            
                          
                              
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <?php if(isset($_SESSION['nameUser'])):
                              ?>
                            <div class="nav-item dropdown">
                                <a href="../Pages/register.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Hello:<?php echo $_SESSION['EMAIL'];
                                ?></a>
                    
                                <div class="dropdown-menu">
                                    <a href="Pages/handleLogout.php" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                          
                            <?php else: ?>
                                <div class="nav-item dropdown">
                          <a href="http://localhost:8080/%C4%90%E1%BB%93%20%C3%81n%20Web2/Pages/login.php" class="dropdown-item">Login</a>
                                </div>
                        
                             </div>
                             
                        </div>
                        <?php endif; ?>