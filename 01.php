<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แบบฟอร์มเพิ่มข้อมูลวัสดุ</title>

</head>

<body bgcolor="#CCFFFF" text="#000066"><table align="center" width="100%">
<tr>
<td colspan="2" scope="row">
    <?php include("manu.php"); include("config.php");?>
    

<td>


<div align="left">

<form action="001.php" method="POST"
enctype="multipart/form-data" name="addprd"
class="form-horizontal" id="addprd">


  
  <h2>รหัส
    <input type="text" name="product_id"
class="form-control" value="<?php
 $sql="SELECT MAX(product_id) FROM product";
		$query_result= mysqli_query($connect,$sql);
		$fetch999 = mysqli_fetch_array($query_result);
		
  echo "".$fetch999["MAX(product_id)"]+1; ?>" readonly="readonly"/>
  </h2>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
  <h2>ชื่อ
    <input type="text" name="product_name"
class="form-control" required placeholder="ชื่อวัสดุ"/>
  </h2>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
  <h2>&nbsp;</h2>
</div>
</div>
<div class="form-group">
<div class="col-sm-3">
<h2>ราคาต่อหน่วย
  <input type="number" name="price" 
class="form-control" required placeholder="ราคาต่อหน่วย"/>
</h2>
<h2>หน่วยนับ
  <input type="text" name="unitofmeasure" 
class="form-control" required placeholder="หน่วยนับ"/>
</h2>
<p><br>
</p>
</div></div>
<div>
  <h2>จำนวนคงเหลือ
  <input type="number" name="total" 
class="form-control" required placeholder="จำนวนคงเหลือ"/>
</h2>
<p><br>
</p>
</div></div>
  <div align="left" class="col-sm-12">
<button type="submit" class="btn btn-primary"
name="btnadd">
<h2>+เพิ่มสินค้า</h2>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div></td></tr></table>


</body>
</html>