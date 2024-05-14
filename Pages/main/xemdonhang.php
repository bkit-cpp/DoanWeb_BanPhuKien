<?php
$code=$_GET['code'];
$sql_lietke_dh="SELECT * FROM tbl_cart_details, tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham 
AND tbl_cart_details.code_cart='$_GET[code]' ORDER BY tbl_cart_details.id_sanpham DESC";
$querry_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<p style="font-size:20px;text-align:center; color:coral; font-weight:bold">Chi Tiết Đơn Hàng</p>
<table style=" margin: 20px auto;
    background: linear-gradient(45deg, #af9474, #c5c2a9);
	font-family: sans-serif;
	font-weight: 100;
    width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);">
<tr>
     <th>Id</th>
     <th>Mã Đơn Hàng</th>
     <th>Tên Sản Phẩm</th>
     <th>Số Lượng</th>
     <th>Đơn Giá</th>
     <th>Thành Tiền</th>
</tr>
<?php
$i=0;
$tongtien=0;
while($row_dh=mysqli_fetch_array($querry_lietke_dh)){
$i++;
$thanhtien=  $row_dh['giasp']* $row_dh['soluong'];
$tongtien+=$thanhtien;
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
	color: #fff;"><?php echo $row_dh['soluong']?></td>
    <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['giasp']?></td>
    <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;"><?php echo $row_dh['giasp']* $row_dh['soluong']?></td>   
    <td style="   min-width: 40px;
    text-align: center;
    padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;">
       Tổng tiền:<?php echo $tongtien ?>
    </td>
</tr>
<?php
}
?>
</table>
