<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ST ALOYSIUS Gents Hostel</title>
   <!-- <link rel="stylesheet" href="notice.css">-->
	<link rel="stylesheet" href="css\bootstrap.css">	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
// Initialize images in an array
var picPaths = ['gents-hostel.jpg','hotel.jpg','image2.jpg','image3.jpg'];
// An index to track the contender image 
var imageIndex = 0;
var bannerImage; 

// An event callback for starting the interval
function startInterval() {
 setInterval(displayNextImage, 3000);
}

function displayNextImage() {
  bannerImage.src = picPaths[imageIndex];
  if(imageIndex === (picPaths.length-1)) {
    imageIndex = 0;
  }
  else {
    imageIndex = imageIndex + 1; // It can be replaced with imageIndex ++  
  }
}

window.onload=function() {
 bannerImage = document.getElementById('imgBanner');
 startInterval();
}
</script>
</head>
<body style="background-color: #0c2340">
<nav class="navbar1212">
        
    </nav>

<div class="container-fluid" style="background-color: cyan;">
    
    <div class="row" style="background-color: #0c2340; ">
       <div class="col-xs-9">
<!--<img style="height: 580px; width: 100%" src="gents-hostel.jpg">-->
                <!-- <img class="mw-100" src="gents-hostel.jpg">-->  
                <img id="imgBanner" src="" style="height: 700px; width: 100%" />  
        </div>

       
       <div class="col-xs-3">
        <div class="">
        <div class="column" style="background-color: #980f0f; height: 700px; margin-right: 0px">
                        <div class="row-xs-1"><!--<h4 style="color: white;  padding-left: 120px; padding-right: 50px;">
                            Notifications</h4>-->
                            <br>
                        </div>
                        <div class="row-xs-2">
                            <h3 style="color: white; background-color: #0c2340; padding-left: 115px; padding-right: 50px;"  class="rounded-pill"><a href='allnotice.php'  style="color: white; "> Notifications</a></h3>
                        </div>
                        <div class="row-xs-9">
                            <center>
                            <?php
                            include 'displayann.php';
                            ?>
                        </div>
        </div>
    </div>
       </div>
</div>
<!--
<div class="container-fluid" style="background-color: yellow;">
    <div class="row">
    <div class="col-10">main body<br>main body<br>main body<br>main body<br>main body<br>main body<br>
</div>
    <div class="col-2" style="height: 900">

        <table style="height: 900">
        <tr><th>Notice</th></tr>
        <tr><td style="height: 901">1</td></tr>
        </table>

    </div>
</div>
</div>
<!--
<table border="2" style="align">
    <tr><th>Notice</th></tr>
    <tr><td>asdasd</td></tr>
</table>
</table>

<table class="block logo">
    <colgroup>
        <col style="width:50%"/>
        <col style="width:50%"/>
    </colgroup>
    <tr>
        <td>something</td>
        <td>
            <table class="menu">
                <tr>

                   <td align="right">Item 1qwqweqweqweqweqweqwedadasdasdqwqweqweqweqweqweqwedadasdasd</td>
                    
                </tr>

            </table>

        </td>
<!-- 
<div class="container-fluid" style="background-color: yellow;">
    <div class="column">
    <div class="row-10">main body</div>
    <div class="row-2" style="height: 900">

        <table style="height: 900">
        <tr><th>Notice</th></tr>
        <tr><td style="height: 901">1</td></tr>
        </table>

    </div>
</div>
</div>


    </tr>

</table>
<tr style="background-color: blue"><td><marquee>Empower the youth and do something</marquee></td></tr>
-->
<script src="script1.js"></script>	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="js\bootstrap.js"></script>
</script> 
</body>
</html>