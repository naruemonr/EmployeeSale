<?php session_start(); //ล็อกอินเข้ามาจะเป็นการเริ่ม?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/manu.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
<body>
<?php

include("config.php");

$queryEdit=  "SELECT * from product,orders,orders_detail,employee,department where orders.order_id = orders_detail.order_id 
AND employee.emp_id = orders.emp_id
AND employee.dep_id = department.dep_id AND product.product_id = orders_detail.product_id AND status = 2";
$result =mysqli_query($connect,$queryEdit)
   or die(mysqli_error($connect));
$fetch =mysqli_fetch_array($result);

$queryEdit2="select * from orders,employee,department 
where department.dep_id = employee.dep_id AND orders.emp_id =employee.emp_id
";
mysqli_query($connect,"SET NAMES UTF8");
$result2 =mysqli_query($connect,$queryEdit2)
   or die(mysqli_error($connect));
$fetch2 =mysqli_fetch_array($result2);
	
	$queryEdit22="select MAX(time_id) from time 
";
mysqli_query($connect,"SET NAMES UTF8");
$result22 =mysqli_query($connect,$queryEdit22)
   or die(mysqli_error($connect));
$fetch22 =mysqli_fetch_array($result22);

?>			<table  align="center">
<td>  <?php include("Manuadmin.php");?> </td></table>



<td align="light"><p><a href="EMP_Payment.php">
  <input name="submit" 
  class="button button5" type="submit" value="ย้อนกลับ"  />
</a>
</td>
    <td align="light"><a href="print1529.php"><input name="submit" 
    class="button button4"  type="submit" value="สั่งพิมพ์"  /></a></td>
<div align="center" class="textbox2">
  <div align="center" class="textbox2">
    <h2>บริษัท โดลไทยแลนด์ จำกัด</h2>

    <p><strong>รายการสั่งซื้อสินค้ารอบที่<?php echo $fetch22['MAX(time_id)'];?></strong></p>
  </div>
</div>
<td><center>
</center>
</p>



<table align="center" width="66%" border="1" cellspacing="3" cellpadding="1">
<tr>

<th width="14%"> <center>เลขที่ใบสั่งซื้อ</th>
<th width="20%"> <center>วันที่สั่งซื้อ</th>
<th width="20%"> <center>ชื่อผู้สั่ง</th>
<th width="8%"> <center>แผนก</th>
  <th width="10%"> <center>รหัสสินค้า</th>
  <th width="10%"> <center>ชื่อสินค้า</th>
  <th width="14%"> <center>ราคาต่อหน่วย</th>

  <th width="15%"> <center>จำนวน</th>

  
</tr>
<?php
$query1 = "SELECT * from product,orders,orders_detail,employee,department where orders.order_id = orders_detail.order_id 
AND employee.emp_id = orders.emp_id
AND employee.dep_id = department.dep_id
AND product.product_id = orders_detail.product_id AND 
status = 2";

mysqli_query($connect,"SET NAMES UTF8");
$query_result1 = mysqli_query($connect,$query1) 
    or die(mysqli_error($connect));
    
  while($fetch1 =mysqli_fetch_array($query_result1))
{
?>
    <tr>
<td width="14%"> <center><?php echo $fetch1['order_id'];?></td>
<td width="20%"> <center><?php echo $fetch1['dateorder'];?>    &nbsp;&nbsp;<?php echo $fetch1['time'];?></td>
<td width="20%"> <center><?php echo $fetch1['name'];?>    &nbsp;&nbsp;<?php echo $fetch1['lastname'];?></td>
<td width="8%"> <center><?php echo $fetch1['dep_name'];?></td>
<td width="10%"> <center><?php echo $fetch1['product_id'];?></td>
<td width="10%"> <center><?php echo $fetch1['product_name'];?></td>

<td width="14%"> <center><?php echo $fetch1['price'];?></td>

<td width="15%"> <center><?php echo $fetch1['Qty'];?></td>



  
</tr>
<?php
}
?>

</table>


<table width="200" border="0" align="center">
  <tbody>
  <div align="center" class="col-sm-8 info">



</form>
</div>
<br><br>

  &nbsp;&nbsp;

</body>