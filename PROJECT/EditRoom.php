<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/RoomsController.php';
require_once 'Controller/CatController.php';
$id = $_GET["id"];
$c = getRoom($id);
$cat = getProducts();
//require_once 'Controller/CategoryController.php';
//$cat = getallcategory();
?>

<html>
<body>
<h1 style="color:blue" align ="center">Welcome Admin</h1>
<form action="" method="post">
<h2 style="color:red" align ="center">Update Rooms:</h2>
<span> <?php echo $err_db; ?></span>
<table style="border-color:green; width:40%; height:50%;" align="center" border="4">
<?php echo $err_db; ?>
<tr><td align="right"><b>Room No:</b></td>
<td>&nbsp;<input type="text" name = "room_no" value = "<?php echo $c["room_no"]; ?>"><?php echo $err_room_no; ?> </td></tr>
<td align="right"><b>Category:</b></td>
<td>&nbsp;<select name="c_id" >
<option value='".$c["id"]."'>Choose</option>
<?php
foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}
?>
</select></td><tr>

<td>&nbsp;<input type="submit" name ="edit_room" value="Update" ></td></tr>
</table>
</body>
</html>