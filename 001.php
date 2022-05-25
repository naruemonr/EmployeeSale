<?php

include("config.php");
@$product_id = $_POST['product_id'];//รับชื่อไฟล์จากฟอร์ม
@$product_name=$_POST['product_name'];
@$total = $_POST['total'];
@$price = $_POST['price'];
@$unitofmeasure = $_POST['unitofmeasure'];



$sql="insert into product(product_id,product_name,price,unitofmeasure,total)
            VALUES('$product_id','$product_name','$price','$unitofmeasure','$total')";
            mysqli_query($connect,"SET NAMES UTF8");
            $resultsql = mysqli_query($connect,$sql)
                    or die(mysqli_error($connect));

			if($result){
				echo"<script type='text/javascript'>";
				echo"alert('เพิ่มวัสดุเรียบร้อย');";
				echo"window.location='ListRecord2.php';";
				echo"</script>";
			}
			else{
				echo"<script type='text/javascript'>";
				echo"alert('เพิ่มวัสดุไม่ได้');";
				echo"window.location='add_product.php';";
				echo"</script>";
			}

?>
