<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แบบฟอร์มแก้ไขข้อมูลลูกค้า</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/manu.css">
<style>

</style>
</head>

<body bgcolor="#CCFFFF">
<?php
		include("config.php");
		@$id = $_GET['id'];
		$queryEdit="select * from product
					where product_id ='$id'";
		mysqli_query($connect,"SET NAMES UTF8");
		$result =mysqli_query($connect,$queryEdit)
					or die(mysqli_error($connect));
		$fetch =mysqli_fetch_array($result);
		?>	<table  align="center">
    <td>  <?php include("manuadmin.php");?> </td></table>
	<form action="EditCustomer2.php" method="get">

<table align="center" width="100%">
<tr>


<td>
    <table width="100%" border="1">
  <tr>
  <td bgcolor="#33CCFF" width="140" align="center">รูปภาพ</td>
            <td bgcolor="#33CCFF" align="center" width="100" align="center">รหัสสินค้า
            <td bgcolor="#33CCFF" align="center" width="66" align="center"><p>ชื่อสินค้า
            </p>
            <td bgcolor="#33CCFF" align="center" width="107" align="center">ราคาต่อหน่วย</td>

            <td bgcolor="#33CCFF" align="center" width="106" align="center">หน่วยนับ</td>
            <td bgcolor="#33CCFF" align="center" width="106" align="center">จำนวนคงเหลือ</td>


  </tr>
  <tr>
    <td><center>

    
 <img src="img/<?php echo $fetch['img'];?>" width= 180px height= 180px/></center></p>
       </div>   </td>
      <td align="center"> 
    	<?php echo $fetch['product_id'];?></td>
    <td align="center"><?php echo $fetch['product_name'];?>
    </td>
    <td align="center">
    	<?php echo $fetch['price'];?>
    </td >
    <td align="center"><?php echo $fetch['unitofmeasure'];?>
    </td>

  
  <td align="center"><input name="total" type="text" 
    	value="<?php echo $fetch['total'];?>" />
    </td>
    
  </tr>
</table>
<table width="200" border="0" align="center">
    <tbody>
      <tr>
        <td align="center">

    <button name="submit" type="submit" class="btn btn-success">บันทึก</button> 
    
    <input name="id" type="hidden" value="<?php echo $fetch['product_id'];?>" >
    </tr>
    </table>

    
    
    </form>	
		
</body>
</html>