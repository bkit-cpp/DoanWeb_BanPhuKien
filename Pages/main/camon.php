<?php
 $id_khachhang=$_SESSION['USERID'];
 $sql_lietkedsdonhang="SELECT * FROM tbl_cart, tbl_taikhoan, tbl_sanpham, tbl_cart_details WHERE tbl_cart.id_khachhang=tbl_taikhoan.USERID AND 
  tbl_cart.id_khachhang=$id_khachhang AND tbl_sanpham.id_sanpham=tbl_cart_details.id_sanpham  ORDER BY tbl_cart.code_cart LIMIT 50";
 $querry_lietkedonhang = mysqli_query($mysqli,$sql_lietkedsdonhang);
?>
<div class="container-fluid"> 
            <div class="row">
            <div class="col-md-10">
            <div class="cart-page">
                    <div class="cart-page-inner">
                            <div class="table-responsive">
            <p>Thanh Toán Thành Công ,Cảm ơn Quý Khách Đã Sử Dụng Dịch Vụ Của Chúng Tôi </p>

            <p style="font-size:20px;text-align:center; color:coral; font-weight:bold"> Đơn Hàng Đã Mua</p>
<table style=" margin: 20px auto;
    background: linear-gradient(45deg, #af9474, #c5c2a9);
	font-family: sans-serif;
	font-weight: 100;
    width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);">
<tr >
     <th>Id</th>
     <th>Mã Đơn Hàng</th>
     <th>Tên Khách Hàng</th>
     <th>Email</th>
     <th>Ngày Đặt Hàng</th>
     <th>Tình Trạng</th>
</tr>
<?php
$i=0;
while($row_dh=mysqli_fetch_array($querry_lietkedonhang)){
$i++;
?>
<tr style="	&:hover {
			background-color: rgba(247, 111, 14, 0.3);
		}">
<td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $i?></td>
   <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['code_cart']?></td>
         <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['tensanpham']?></td>
   <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['USERNAME']?></td>
  <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['EMAIL']?></td>
   <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['cart_date']?></td>
</tr>
<?php
}
?>
</table>
                            </div>
                            <?php
                            ?>
                    </div>
            </div>
            </div>
            </div>
</div>
