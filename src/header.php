<html>
    <?php 
    setcookie('cross-site-cookie', 'name', ['samesite' => 'None', 'secure' => true]);
    ?>
<meta name="google-signin-client_id" content="754876204432-p5lef84ku4uqqeftv5m3649h7u029qfb.apps.googleusercontent.com">
<head>
    <title>Welcome Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link rel="stylesheet" type="text/css" href="CSS/bettingHome.css">
    <link rel="stylesheet" type="text/css" href="CSS/RegisterUser.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CSS/menu.css">
    <!--Test-->


    <!--Test-->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="images/logolion.png" type="image/gif" sizes="64x64">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->

    <style>
        button {
            margin: 1em;
            width: 10em;
            height: 2em;
        }

        .options {
            margin: 1em;
        }

        .autoadvance-group label {
            margin: 10px;
        }
    </style>


    <style>
        @media screen and (max-width: 750px) {
            .second {
                display: none;
                width: 70%;
            }

            .third-content {
                margin-left: 110px;
            }
        }
    </style>
    
<script>
//some default pre init
var PB = PB || {};PB.q = PB.q || [];PB.events = PB.events || [];

//********** Update these fields ********
//PushBots ApplicationId (required)
PB.app_id = "5e0f695c977e3a6f8024f6a2";
//Your domain name, must be HTTPS or localhost  (required)
PB.domain = "localhost";
//Update and uncomment it if you are using custom safari certificate for your app
//PB.safari_push_id = "web.com.pushbots.main";
//****************************************

PB.logging_enabled = true;
PB.auto_subscribe = true;

//Custom worker and manifest URL
//PB.worker_url = PB.domain + "/pushbots-worker.js";
//PB.manifest_url = PB.domain + "/pushbots-push-manifest.json";

//Welcome notification message
PB.welcome = {title:"Welcome ",message:"Thanks for subscribing!", url :PB.domain};

function sendNotification(){
      PB.register();
      PB.q.push(["sendNotification", {title:"Hey ",message:"Why not?", url :"https://atomictechnologies.tech"}]);
}

</script>

<script src="//cdn.pushbots.com/js/sdk.min.js" type="text/javascript" onload="PB.init()" async></script>
    
    
    
</head>
<?php
session_start();
?>
<body>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="https://codepen.io/darrylhuffman/pen/eevREZ.js"></script>


</div><nav class="main-menu">



    <div>
        <a class="logo" href="http://startific.com">
        </a>
    </div>
    <div class="settings"></div>
    <div class="scrollbar" id="style-1">
        <ul>
            <li>
                <a href="index.php">
                    <i class="fa fa-home fa-lg"></i>
                    <span class="nav-text">Home</span>
                </a>
            </li>

            <li>
                <a href="login.php">
                    <i class="fa fa-user fa-lg"></i>
                    <span class="nav-text">Login</span>
                </a>
            </li>


            <li>
                <a href="">
                    <i class="fa fa-envelope-o fa-lg"></i>
                    <span class="nav-text">Contact</span>
                </a>
            </li>

            <li>
                <a href="http://startific.com">
                    <i class="fa fa-heart-o fa-lg"></i>

                    <span class="share">


<div class="addthis_default_style addthis_32x32_style">

<div style="position:absolute;
margin-left: 56px;top:3px;">




 <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/facebook-icon.png" width="30px" height="30px"></a>

   <a href="https://twitter.com/share" target="_blank" class="share-popup"><img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/512/Twitter_alt.png" width="30px" height="30px"></a>




<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=_URL_&title=_TITLE_
" target="_blank" class="share-popup"><img src="http://icons.iconarchive.com/icons/danleech/simple/512/google-plus-icon.png" width="30px" height="30px"></a>



</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4ff17589278d8b3a"></script>





                        </span>
                    <span class="twitter"></span>
                    <span class="google"></span>
                    <span class="fb-like">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2Fstartific&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>

                        </span>
                    <span class="nav-text">
                        </span>

                </a>

            </li>




            </li>
            <li class="darkerlishadow">
                <a href="http://startific.com">
                    <i class="fa fa-clock-o fa-lg"></i>
                    <span class="nav-text">News</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-desktop fa-lg"></i>
                    <span class="nav-text">Technology</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-plane fa-lg"></i>
                    <span class="nav-text">Travel</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-text">Shopping</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-microphone fa-lg"></i>
                    <span class="nav-text">Film & Music</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-flask fa-lg"></i>
                    <span class="nav-text">Web Tools</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-picture-o fa-lg"></i>
                    <span class="nav-text">Art & Design</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="folderchk.php">
                    <i class="fa fa-align-left fa-lg"></i>
                    <span class="nav-text">Books and Magazines
</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-gamepad fa-lg"></i>
                    <span class="nav-text">Games</span>
                </a>
            </li>

            <li class="darkerli">
                <a href="http://startific.com">
                    <i class="fa fa-glass fa-lg"></i>
                    <span class="nav-text">Life & Style
</span>
                </a>
            </li>

            <li class="darkerlishadowdown">
                <a href="http://startific.com">
                    <i class="fa fa-rocket fa-lg"></i>
                    <span class="nav-text">Fun</span>
                </a>
            </li>


        </ul>


        <li>

            <a href="http://startific.com">
                <i class="fa fa-question-circle fa-lg"></i>
                <span class="nav-text">Help</span>
            </a>
        </li>


        <ul class="logout">
            <li>
                <a href="http://startific.com">
                    <i class="fa fa-lightbulb-o fa-lg"></i>
                    <span class="nav-text">
                            BLOG
                        </span>

                </a>
            </li>
        </ul>
</nav>

