<?php include 'header.php'; ?>

<div class="se-pre-con">
    <div class="progress-text">Reading 0/0 pages</div>
</div> <!-- loading spinner -->

<center>
    <fieldset>
        <legend>
            <button class="tab-button active" id="tab" tab="upload">Choose files from you computer</button>
            <button class="tab-button" id="tab" tab="internal">Open file stored in the server</button>
        </legend>
        <br>

        <div id="upload" class="option">
            <input type="file" name="fileup" id="fileup" accept=".cbr,.cbz,.cbt"><br>
            <i>(cbr,cbz,cbt files only)</i>
        </div>

        <div id="internal" class="option" style="display:none">
            <button id="readNow"  comic_title="Dragon Ball Super v01.cbr">
                <img src='http://69.114.34.40/Media/Manga/Dragon Ball Super/Vol 1/cover.jpg' class='imgUrl'/>
                <br>Dragon Ball Super
            </button>

            <button id="readNow" comic_title="zack_and_max.cbz">
                <img src='./comics/zack_and_max_thumb.jpg' class='imgUrl'/>
                <br>The Adventures of Zack &amp; Max
            </button>

            <button id="readNow" comic_title="comic_strip.cbz">
                <img src='./comics/comic_strip_thumb.jpg' class='imgUrl'/>
                <br>Alien Comic Strip
            </button>
        </div>
        <br>
    </fieldset>

    <br><br>

    <!-- output comics images here -->
    <div id="output"></div>

</center>

<!-- load all scripts -->
<script src="Script/assets/js/jquery-3.2.0.min.js"></script>
<script src="Script/assets/js/uncompress/uncompress.js"></script>
<script src="Script/assets/js/lightGallery/lightgallery-all.min.js"></script>
<script src="Script/assets/js/script.js"></script>

<?php include 'footer.php'; ?>
