  <?php
    require_once ("Includes/simplecms-config.php");
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php");

		confirm_is_admin();

		$id = $_GET['id'];
		$result = mysqli_query($db,"DELETE FROM products WHERE id=$id");
		header("Location:deleteProduct.php");

	?>
  <?php include ("Includes/footer.php"); ?>
