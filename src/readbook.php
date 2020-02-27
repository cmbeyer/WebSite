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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.turnjs.com/lib/turn.min.js"></script>
</head>
<body>

<!--<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
		-->
   <?php
    $directory = "/var/www/html/Media/Web Programming books/Books for Certs/".$_POST["book"];
echo $directory;
    // Open a directory, and read its contents
    if (is_dir($directory)){
        if ($opendirectory = opendir($directory)){
            while (($file = readdir($opendirectory)) !== false) {
                if (strpos($file, '.jpeg') ==! false) {
                    //include('pagestoread.php');
                    echo $file;
                }

            }
            closedir($opendirectory);
        }
    }
    ?>


	<!--	</div>
	</div>
</div>--->

<div id="flipbook">
    <div class="hard"> Turn.js </div>
    <div class="hard"></div>
    <div> Page 1 </div>
    <div> Page 2 </div>
    <div> Page 3 </div>
    <div> Page 4 </div>
    <div class="hard"></div>
    <div class="hard"></div>
</div>



    <script type="text/javascript">
        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });
</script>

</body>
</html>
