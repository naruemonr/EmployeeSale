<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
   <form> <td id="customer" colspan="2" scope="row">
	   <?php include("header.html");?></td> </form> 
  </tr>
</table>
  
<div id="myDIV" class="active">
<a href="">
 <button class="btn ">รายการสินค้า </button></a>
 <a href="">
  <button class="btn ">ตรวจสอบการสั่งซื้อ</button></a>
  <a href="">
  <button class="btn ">ชำระเงิน</button></a>
  <a href="">
  <button class="btn ">ออกจากระบบ</button></a>

</div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

</body>
</html>