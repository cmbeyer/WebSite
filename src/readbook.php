<?php
echo $_POST["book"];
?>
<!doctype html>
<html>
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="Script/turnjs4/lib/turn.min.js"></script>

    <style type="text/css">
        body{
            background:#ccc;
        }
        #book{
            width:1152px;
            height:752px;
        }
        #book .turn-page{
            background-color:#ccc;
            background-size:100% 100%;
        }
    </style>
</head>
<body>

<div id="book">
    <?php
    $directory = "/var/www/html/Media/Web Programming books/Books for Certs/".$_POST["book"];
echo $directory;
    // Open a directory, and read its contents
    if (is_dir($directory)){
        if ($opendirectory = opendir($directory)){
            while (($file = readdir($opendirectory)) !== false) {
                    echo '<div style="background-image:url('.$file.');"></div>>';
            }
            closedir($opendirectory);
        }
    }
    ?>
</div>


<script type="text/javascript">
    $(window).ready(function() {
        $('#magazine').turn({
            display: 'double',
            acceleration: true,
            gradients: !$.isTouch,
            elevation:50,
            when: {
                turned: function(e, page) {
                    /*console.log('Current view: ', $(this).turn('view'));*/
                }
            }
        });
    });


    $(window).bind('keydown', function(e){

        if (e.keyCode==37)
            $('#magazine').turn('previous');
        else if (e.keyCode==39)
            $('#magazine').turn('next');

    });
</script>

</body>
</html>
