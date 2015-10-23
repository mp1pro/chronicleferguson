<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chronicle Ferguson</title>

    <link rel="icon" href="CF_Favicon_V2.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css">

    <link rel="shortcut icon" href="CF_Favicon_V2.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/1.0.18/firebase.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container-fluid top">
    <div class="top_menu row">
        <div class="col-sm-offset-1 col-sm-1 col-md-offset-1 col-md-1 img_div col-xs-4">
            <img src="img/ChronicleFerguson_logo_1.png" class="center-block brand_img" alt="Chronicle_Ferguson">
        </div>
        <div class="logo_label col-md-6 col-sm-8 col-xs-20 ">
            <div id="logo_label_vertical">
                CHRONICLE <span id="dots">::</span> FERGUSON
            </div>
        </div>
        <div class="menu_text col-md-offset-4 col-md-9 col-sm-8 col-sm-offset-2 hidden-xs">
            <div class="menu_middle">
                <a class="links yellow">BUY BOOK</a>
                <a class="links">VIEW GALLERY</a>
                <a href="http://fergusonbeauty.com/upload.html" class="links hidden-sm hidden-xs">UPLOAD PHOTO</a>
                <a class="links">MISSION</a>
            </div>
        </div>
        <div class="menu_text col-md-2 hidden-xs">
            <div class="menu_middle">
                <a href="http://www.facebook.com/chronicleferguson"><i class="fa fa-facebook fa-lg"></i></a>
                <a href="http://www.twitter.com/photosferguson"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="http://www.instagram.com/chronicleferguson"><i class="fa fa-instagram fa-lg"></i></a>
            </div>
        </div>
    </div>
    <div class="bottom_menu_row">
        <div class="menu_text col-md-offset-14">
            <div class="menu_middle hidden-sm hidden-xs ">
                <a href="support.html" class="links2">COMMUNITY</a>
                <a class="links2">MEDIA</a>
                <a class="links2">CONTACT US</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="top_upload col-md-24 margin-bottom">
    <div class="left_upload col-md-7 col-md-offset-1">
        <div class="left_gallery_middle">
            GALLERY
        </div>
    </div>
    <div class="right_upload col-md-16">
        <div class="right_upload_middle">

        </div>
    </div>
</div>
</div>
<?php
$dir="images/";
if ($opendir=opendir($dir));
{
    while (($file = readdir($opendir)) !== FALSE){
        if ($file!="."&&$file!="..")
            echo "<img class='col-md-6' src='$dir/$file'></br>";
    }
}
?>

</body>
</html>