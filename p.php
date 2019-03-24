<?php $que=mysqli_query($con,"select * from add_cat");
while($cate=mysqli_fetch_array($que)){
?>
<option value="<?php if( isset($cate['cat_id']))echo $cate['add_cat'];?>"><?php echo $cate['add_cat'];?>
	</option>
	<?php}?>