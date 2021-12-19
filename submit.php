<html>
<head>
<style type="text/css">
.info{
margin-left: 300px;
font-size: 20;

}

.submitted{
	margin-left: 2px;

}



</style>
<body>

<div class="info">
Thank You<br>

<?php 

 echo $_POST['title'].$_POST['firstname'].$_POST['lastname']."<br>";

 ?>



<div class="Submitted">

	You Have Submitted the Following Details: <br>

	Date of Birth : <?php echo $_POST['dateofbirth']."<br>";?>
	Telephone : <?php echo $_POST['phone']."<br>";?>
	File Upload : <?php echo $_POST['file']."<br>";?>
	Message : <?php echo $_POST['msg']."<br>";?>

</div>
</div>
</body>
</body>
</html>

