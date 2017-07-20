    <?php
        require_once ("Includes/simplecms-config.php");
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");

     ?>


    <div id="container">
		    <form action="index.html" method="post"><br>
		      Name: <br><input type="text" name="" value=""><br>
          Email: <br><input type="email" name="" value=""><br>
          Enquiry: <br><textarea name="name" rows="8" cols="80"></textarea><br>
          <input type="submit" name="" value="SUBMIT">
		    </form>
    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php
    include ("Includes/footer.php");
 ?>
