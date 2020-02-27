<?php include 'header.php'; ?>
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.turnjs.com/lib/turn.min.js"></script>
</head>
<body>

<!--<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">

   <?php
    $directory = "/var/www/html/Media/Web Programming books/Books for Certs/".$_POST["book"];
    $directory2="http://69.114.34.40/Media/Web Programming books/Books for Certs/".$_POST["book"];
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
	</div>
	</div>
</div>--->

<div id="flipbook">
    <div class="hard"> Turn.js </div>
    <div class="hard"></div>
    <?php
    $directory = "/var/www/html/Media/Web Programming books/Books for Certs/".$_POST["book"];
    $directory2="http://69.114.34.40/Media/Web Programming books/Books for Certs/".$_POST["book"];
    // Open a directory, and read its contents
    if (is_dir($directory)){ //Adjust this code to use scandir instead of opendir.  Scandir can sort by name, opendir cannot.
        $bookarray = scandir($directory,0);
                foreach($bookarray as $pageIMG) {
                    echo '<div>' . $directory2 . '/' . $pageIMG . '</div>';
                }
    }
    ?>
    <div class="hard"></div>
    <div class="hard"></div>
</div>
<!--<img src="<?php echo $directory2."/page_1.jpeg";?>"> </img>-->


<script type="text/javascript">
        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });
</script>

<?php include 'footer.php'; ?>
