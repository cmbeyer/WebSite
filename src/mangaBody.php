<?php
?>
<button id="readNow"  manga="<?php echo $_POST['manga']?>" volume="<?php echo $VolumeFinal?>" comic_title="<?php echo $mangaName?>">
    <img src='http://69.114.34.40/Media/Manga/<?php echo $_POST['manga']."/".$VolumeFinal."/cover.jpg";?>' class='imgUrl'/>
    <br><?php echo $_POST['manga']." ".$VolumeFinal?>
</button>
