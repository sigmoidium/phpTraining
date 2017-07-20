    <?php
        require_once ("Includes/simplecms-config.php");
        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");
     ?>

<body onLoad="displayBanner()">

    <div id="container">
		<div id="tagline">Big Mike's Electronics is a chain of retail electronics stores that caters to all of your electronic needs!</div>
		<div id="banner"><img src="Images/banner/1.jpg" name="RotateBanner" width="730" height="300"/></div>

    </div>

	</div> <!-- End of outer-wrapper which opens in header.php -->

</body>

<script>

	var banners = new Array( 'Images/banner/1.jpg'); 
	var currentBanner = 0;

	function displayBanner()	{
	if( document.images )	{
		currentBanner++;
		if( currentBanner == banners.length )	{
			currentBanner = 0;
		}
		document.RotateBanner.src = banners[ currentBanner ];
		setTimeout( "displayBanner()", 4000 )
	}
}
</script>

<?php
    include ("Includes/footer.php");
 ?>
