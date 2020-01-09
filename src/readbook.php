<?php
echo $_POST["book"];
?>

<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="Script/turnjs4/extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="Script/turnjs4/extras/modernizr.2.5.3.min.js"></script>
</head>
<body>

<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			
    <?php
    $directory = "/var/www/html/Media/Web Programming books/Books for Certs/".$_POST["book"];
echo $directory;
    // Open a directory, and read its contents
    if (is_dir($directory)){
        if ($opendirectory = opendir($directory)){
            while (($file = readdir($opendirectory)) !== false) {
                if (strpos($file, '.jpeg') ==! false) {
                    include('pagestoread.php');
                }
            }
            closedir($opendirectory);
        }
    }
    ?>
		</div>
	</div>
</div>


<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

</script>

</body>
</html>
