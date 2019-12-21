</div>
<script>
    function searchOpen() {
        var x = document.getElementById("search");
        if (x.className === "second") {
            if(document.getElementById("video")){
                document.getElementById("video").className = "second";
                document.getElementById("labelvideo").className = "";
            }
            x.className += " show";
        } else {
            x.className = "second";
        }
        var x = document.getElementById("labelsearch");
        if (x.className === "") {
            x.className += "active";
        } else {
            x.className = "";
        }
        if(document.getElementById("main-cont").className == "third-content"){
            document.getElementById("main-cont").className += " hide";
        }
        resetthird();
    }

    function bookOpen() {
        var x = document.getElementById("book");
        if (x.className === "second") {
            if(document.getElementById("video")){
                document.getElementById("video").className = "second";
                document.getElementById("labelvideo").className = "";
            }
            x.className += " show";
        } else {
            x.className = "second";
        }
        var x = document.getElementById("labelbook");
        if (x.className === "") {
            x.className += "active";
        } else {
            x.className = "";
        }
        if(document.getElementById("main-cont").className == "third-content"){
            document.getElementById("main-cont").className += " hide";
        }
        resetthird();
    }

    function openvideo() {
        var x = document.getElementById("video");
        if (x.className === "second") {
            if(document.getElementById("search")){
                document.getElementById("search").className = "second";
                document.getElementById("labelsearch").className = "";
            }
            x.className += " show";
        } else {
            x.className = "second";
        }
        var x = document.getElementById("labelvideo");
        if (x.className === "") {
            x.className += "active";
        } else {
            x.className = "";
        }
        if(document.getElementById("main-cont").className == "third-content"){
            document.getElementById("main-cont").className += " hide";
        }
        resetthird();
    }
    function resetthird() {
        if((document.getElementById("labelvideo").className == "") && (document.getElementById("labelsearch").className == "")&& (document.getElementById("labelbook").className == "")){
            document.getElementById("main-cont").className = "third-content";
        }
    }
    
    function close() {
        document.getElementById("main-cont").className = "third-content";
        document.getElementById("search").className = "second";
        document.getElementById("labelvideo").className = "";
        document.getElementById("labelsearch").className = "";
        document.getElementById("labelbook").className = "";
        document.getElementById("video").className = "second";
        document.getElementById("book").className = "second";


    }

</script>

<script>
    $("input").on("change", function() {
        this.setAttribute(
            "data-date",
            moment(this.value, "YYYY-MM-DD")
                .format( this.getAttribute("data-date-format") )
        )
    }).trigger("change")
</script>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>
</body>
