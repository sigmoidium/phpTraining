    <?php
        require_once ("Includes/simplecms-config.php");
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");

		confirm_is_admin();

		if (!empty($_GET['cat'])) {
			$category = $_GET['cat'];
			$query = mysqli_query($db, "SELECT * FROM products WHERE category = '".$category."'");
				} else {
			$query = mysqli_query($db, "SELECT * FROM products");
		}

		if (!$query) {
        die('Database query failed: ' . $query->error);
    		}
     ?>

    <div id="container">
			<?php
				$row_count = mysqli_num_rows($query);
				if ($row_count == 0) {
					echo '<p style="color:red">There are no images uploaded for this category</p>';
				} elseif ($query) {
					while($products = mysqli_fetch_array($query)){
						$file = $products['image'];
						$product_name = $products['product'];
						$image_id = $products['id'];
						$price = $products['price'];
						$desc = $products['description'];
						echo '<div class="image_container">';
						echo '<a href="viewProduct.php?id=' . $image_id . '"><p><img src="Images/products/'.$file.'" alt="'.$product_name.'" height="250" /></p>';
						echo $product_name . "</a><br>$" . $price . "<br>" . $desc;
						echo '<br> <a href="deleteProcess.php?id='. $image_id . '" onclick="return confirm(\'Are you sure?\')">DELETE</a>';
						echo '</div>';
					 }
				 } else {
					 die('There was a problem with the query: ' .$query->error);
				 }
				 mysqli_free_result($query);
			?>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php
    include ("Includes/footer.php");
 ?>
