<?php
$id_khachhang=$_SESSION['USERID'];
$sql_lietkedsdonhang="SELECT * FROM tbl_cart, tbl_taikhoan WHERE tbl_cart.id_khachhang=tbl_taikhoan.USERID AND 
 tbl_cart.id_khachhang=$id_khachhang ORDER BY tbl_cart.code_cart LIMIT 50";
$querry_lietkedonhang = mysqli_query($mysqli,$sql_lietkedsdonhang);
?>

<p style="font-size:20px;text-align:center; color:coral; font-weight:bold">Lịch Sử Đơn Hàng</p>
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
     <th>Quản lý</th>
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
   <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;">
     <?php
     if($row_dh['cart_status']==1)
     {
       echo '<a href="modules/quanlydonhang/xuly.php?code='.$row_dh['code_cart'].'">New bill</a>';
     }
      else{
       echo 'Seen';
      }
     ?>
    </td>
    <td>
        <a href="index.php?quanly=xemdonhang&code=<?php echo $row_dh['code_cart']?>">Xem Đơn Hàng</a>
    </td>
</tr>
<?php
}
?>
</table>
