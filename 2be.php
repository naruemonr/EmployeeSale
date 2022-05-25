<?php session_start();?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/manu.css">
<script>
function chk_pic(){
var file=document.form1.filAlbumShot.value;
var patt=/(.gif|.jpg|.png)/;
var result=patt.test(file);
return result;
}
</script>
</head>

<body>

<?php

  include("config.php");
  @$id = $_GET['order_id'];@$user= $_SESSION['ses_username'];
  $queryEdit="select max(order_id) from orders ";
  mysqli_query($connect,"SET NAMES UTF8");
  $result =mysqli_query($connect,$queryEdit)
     or die(mysqli_error($connect));
  $fetch =mysqli_fetch_array($result);

  $queryEdit2="select * from orders,orders_detail,employee,department 
  where department.dep_id = employee.dep_id 
  AND orders.emp_id =employee.emp_id 
  AND orders.order_id = orders_detail.order_id ";
  mysqli_query($connect,"SET NAMES UTF8");
  $result2 =mysqli_query($connect,$queryEdit2)
     or die(mysqli_error($connect));
  $fetch2 =mysqli_fetch_array($result2);


  $query8 = "SELECT * FROM admin,employee,department,orders where admin.username='$user' AND department.dep_id = employee.dep_id 
  AND orders.emp_id =employee.emp_id 
";
  mysqli_query($connect,"SET NAMES UTF8");
  $query_result8 = mysqli_query($connect,$query8)or die(mysqli_error($connect));;
    $fetch8 = mysqli_fetch_array($query_result8);?>

 


<div align="center" class="textbox2"><h1>ชำระเงิน</h1></div>
<td><center>
</center>
</p>



<table align="center" width="64%" border="0" cellspacing="3" cellpadding="1">
  <tr>
    <th> เลขที่ใบสั่งซื้อ</th>
    <td> <?php echo $fetch['max(order_id)'];?></td>
    <th> วันเวลาที่สั่งซื้อ</th>
    <td> <?php echo "".$fetch8['dateorder']; echo"&nbsp;".$fetch8['time']; 
?></td> 

  <tr>
    <th> ชื่อผู้สั่งซื้อ</th>
    <td> <?php  echo "<br>".$fetch8['name'] ;?> <?php echo "".$fetch8['lastname']; ?> </td>
    <th> แผนก</th>
    <td> <?php echo $fetch8['dep_name'];?></td>
  </tr>
</table>
<table align="center" width="64%" border="1" cellspacing="3" cellpadding="1">
  <tr>

   
    <td> <center>รหัสสินค้า</td>
    <td> <center>ชื่อสินค้า</td>

    <td> <center>ราคาต่อหน่วย</td>
    <td> <center>หน่วยนับ</td>
    <td> <center>จำนวนที่สั่งซื้อ</td>
   
    
  </tr>
  
<?php
@$id=$_GET["order_id"];
 $query = "SELECT * from orders where order_id = '$id' ";
 
  mysqli_query($connect,"SET NAMES UTF8");
  $query_result = mysqli_query($connect,$query) 
      or die(mysqli_error($connect));
      
    while($fetch =mysqli_fetch_array($query_result))
  {
?>
<table  align="center"width="64%" border="0" cellspacing="3" cellpadding="1">
<tr>

<td> <center><?php echo $fetch['product_id'];?></td>
<td> <center><?php echo $fetch['product_name'];?></td>

<td> <center><?php echo $fetch['price'];?></td>
<td> <center><?php echo $fetch['product_name'];?></td>
<td> <center><?php echo $fetch['Qty'];?></td>



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