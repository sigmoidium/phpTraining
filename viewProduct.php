    <?php
        require_once ("Includes/simplecms-config.php");
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");

		$id = $_GET['id'];
		$query = mysqli_query($db, "SELECT * FROM products WHERE id = '".$id."'");

		if (!$query) {
        die('Database query failed: ' . $query->error);
    }
     ?>

    <div id="container">
		<?php
			$products = mysqli_fetch_array($query);
			$file = $products['image'];
			$product_name = $products['product'];
			$image_id = $products['id'];
			$price = $products['price'];
			$desc = $products['description'];

			echo '<div class="image_container">';
			echo '<p><img src="Images/products/'.$file.'" alt="'.$product_name.'" height="250" /></p>';
			echo $product_name . "</a><br>$" . $price . "<br>" . $desc;
			echo '</div>';
		?>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php
    include ("Includes/footer.php");
 ?>
