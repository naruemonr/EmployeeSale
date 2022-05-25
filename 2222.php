<?php session_start(); //ล็อกอินเข้ามาจะเป็นการเริ่ม?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/manu.css">
</head>

<body>

<table  align="center">
            <td>  <?php include("manuadmin.php");?> </td></table
            <?php
		include("config.php");@$id = $_GET['order_id'];
        $query4 = "SELECT slip FROM orders where order_id = '$id'";
        mysqli_query($connect,"SET NAMES UTF8");
		$query_result4 = mysqli_query($connect,$query4) 
						or die(mysqli_error($connect));
            $fetch5 =mysqli_fetch_array($query_result4);



        ?>
        
<table align="center" width="64%" border="0" cellspacing="3" cellpadding="1">
  <tr>


  </tr>
</table>
<?php 
		$today = date("Y-m-d H:i:s"); 
			?>
             <br><h3 align ="center" >หลักฐานการชำระเงิน </h3><br>  

<table align="center" width="64%" border="0" cellspacing="3" cellpadding="1">
<?php


$query = "select slip FROM orders where order_id = '$id'";
           
       mysqli_query($connect,"SET NAMES UTF8");
       $query_result = mysqli_query($connect,$query) 
                       or die(mysqli_error($connect));
                       
         while($fetch =mysqli_fetch_array($query_result))
			

		{
?>
  <tr>
  
    <td><center><img src="img/<?php echo $fetch5['slip'];?>" width="271" height="344" 
    /></center></td> 
    

  </tr>
 
        <?php } ?>
        
</table>
<table align="center">
<p>&nbsp;</p>
<tr>
        <td align="center">


    <a href="EMP_Confirm.php"
    button name="reset" type="reset"  class="btn btn-danger">ย้อนกลับ</button> 
</tr>
    </table>
<td align="center" colspan="7"><div align="center">
  <p>
</form>
</p>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>