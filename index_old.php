<?php
session_start(); 
?>
<!doctype html>
<html>
  <head>
    <title>What's Your Fate</title>
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=yes">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/html2canvas.min.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!--style !-->
<link rel="stylesheet" href="style.css"> 

<header>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a class="navbar-brand " id="mm" href="/1353">LuckyToday</a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="/1353">Home</a></li>
                    <li><a href="#about">About</a></li>
                </ul>


                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>











                </form>



            </div>
            </div>
</div>




       </nav>
 </header>











<!-- end Navbar menu !-->









  <body>



  <?php
$luck=rand(0,10);
$health=rand(60,99);
$car=array("Acura","BMW","Alfa Romeo","Bugatti","Jaguar","Volvo","Chevrolet","Bentley","Kia","Bianchi");
$prof=array("Doctor","Professors","Pharmacists","Engineer","Judge","Aircraft pilot","Astronomer","Bentley","developer","Physiciste");

$age=rand(20,35);
$kids=rand(1,10);




   if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container-fluid" >


  

<?php //echo  $_SESSION['FBID']; ?>

<?php //echo $_SESSION['FULLNAME']; ?>

<?php //echo $_SESSION['EMAIL'];





$img = file_get_contents('https://graph.facebook.com/'.$_SESSION['FBID'].'/picture?type=large');
$file = dirname(__file__).'/avatar/'.$_SESSION['FBID'].'.jpg';
file_put_contents($file, $img);




 ?>


<!-- Render your page inside of this div. -->
<div class="row col-md-12">
<div class="col-md-6">
 
<input type="submit" value="share on facebook" class="btn btn-primary btn-block" onclick="capture();" />

</div>
<div class="col-md-6 "></div>


</div>

<div class="col-md-6" id="target">
     <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">What's Your Fate</h3>
        </div>
        <div class="panel-body"  >
           <img src="image/vide.jpg" class="img-responsive">

          </div>
     </div>
<img src="avatar/<?php echo $_SESSION['FBID']; ?>.jpg" class="img-thumbnail" id="myimage">




<?php echo '<h3 id="myname">'.$_SESSION['USERNAME'].'</h3>' ; ?>

<div id="myfate">

<h3>You w'll have: <?php echo $kids;  ?> children</h3>
    <h3>Health : <?php echo $health; ?>  %</h3>
    <h3>Car: <?php echo $car[$luck];  ?></h3>
<h3>Profession: <?php echo $prof[$luck];  ?></h3>
<h3>Married at: <?php echo $age; ?></h3>
</div>

<h3 id="fateof">Fate of <?php echo $_SESSION['FULLNAME'];  ?></h3>
<h3 id="underpic"><?php echo $_SESSION['FULLNAME'];  ?></h3>
     </div><!-- .col-md-6 !-->


<div class="col-md-6">
<div id="fb-root"></div>
<div class="fb-follow" data-href="https://www.facebook.com/ibs.dev" data-layout="standard" data-show-faces="true"></div>
<div class="fb-page" data-href="https://www.facebook.com/luckyGamesToday" data-width="2000" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/luckyGamesToday"><a href="https://www.facebook.com/luckyGamesToday">Amluckytoday</a></blockquote></div></div>

<div class="fb-comments" data-href="http://amluckytoday.olympe.in/1353/" data-numposts="5"></div>




</div>



                   

<form method="POST" enctype="multipart/form-data" action="sharer.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />

</form>




                        




</div>
<!-- End class="container-fluid" !-->




    <?php else: ?>    


     <!-- Before login --> 
<div class="container-fluid">

<div class="col-md-6">

     <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">What's Your Fate</h3>
        </div>
        <div class="panel-body">
               
           <img src="image/k.jpg" class="img-responsive">

     <center>
<a href="fbconfig.php" class="btn btn-primary btn-lg" id="btn" role="button">Login with facebook</a>


</center>


          </div>
     </div>
     </div>

<div class="col-md-6">
<div id="fb-root"></div>
<div class="fb-like" data-href="http://amluckytoday.olympe.in/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>


<div class="fb-page" data-href="https://www.facebook.com/luckyGamesToday" data-width="2000" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/luckyGamesToday"><a href="https://www.facebook.com/luckyGamesToday">Amluckytoday</a></blockquote></div></div>

<div class="fb-comments" data-href="http://amluckytoday.olympe.in/1353/" data-numposts="5"></div>




</div>





    </div>
      </div>
    <?php endif ?>

















<div class="footer">
<nav class="navbar-costum navbar-inverse navbar-fixed-bottom" role="navigation">
    <div class="container">
  <ul class="nav navbar-nav">
    <li >
      <a href="#">2015</a>
    </li>
    <li>
      <a href="#">amLuckyToday.tk</a>
    </li>
  </ul>


        <ul class="nav navbar-nav navbar-right">

            <li>
            <a href="#">@iheb ben salem</a>

            </li>



        </ul>




    </div>
</nav>




</div>









  </body>
</html>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript">
  function capture() {
    $('#target').html2canvas({
      onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
        $('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
        document.getElementById("myForm").submit();
      }
    });
  }
</script>


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=818338964929328";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


 <script type="text/javascript" src="html2canvas.js"></script>
    <script type="text/javascript">
        html2canvas(document.getElementById("target")).then(function(canvas) {
            //document.body.appendChild(canvas);
var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");  // here is the most important part because if you dont replace you will get a DOM 18 exception.
window.location.href=image; // it will save locally

//$('#img_val').val(image);
                //Submit the form manually
				//document.getElementById("myForm").submit();

        });
    </script>
