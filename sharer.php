<?php
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
$nbr=rand(0,1000);
$unencodedData=base64_decode($filteredData);
file_put_contents($nbr.'.jpg', $unencodedData);
?>


<!DOCTYPE html>
<html>
      

	<head>
    <title>Facebook Share Button - External Website</title>
    
	<style type="text/css">
	
	body { 
		background:#f5f5f5;
		font: 14px/150% 'century gothic',helvetica,arial;
		}
	
	#container {
		margin:5px auto;
		padding:25px;
		width:800px;
 		height:auto;
		border:1px solid #999;
		border-radius:8px; -moz-border-radius:8px; -webkit-border-radius:8px;
		background:#fff;
		}

#myimage
{

width:800px;
 height:400px;
}

	</style>


	</head>

<body>

	<div id="container">
	<center>
	<p>Share on Facebook </p>
	</center>




	<?php  
echo '<img src="'.$_POST['img_val'].'" id="myimage" />';


	?>
	<div id="fb-root"></div>
	
	<!-- USE 'Asynchronous Loading' version, for IE8 to work
	http://developers.facebook.com/docs/reference/javascript/FB.init/ -->
	
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId  : '818338964929328',
		  status : true, // check login status
		  cookie : true, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});
	  };
	
	  (function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
	
	<img id = "share_button" src = "share_button.png">
	
<?php

echo "
	<script type="."text/javascript".">
	$(document).ready(function(){
	$('#share_button').click(function(e){
	e.preventDefault();
	FB.ui(
	{
	method: 'feed',
	name: 'Whats Your fate ?',
	link: 'http://amluckytoday.olympe.in/1353',
	picture: 'http://amluckytoday.olympe.in/1353/".$nbr.".jpg',
	caption: 'AmluckyToday.tk',
	description: 'Do you feel lucky today ?',
	message: 'hello world from message'
	});
	});
	});
	</script>
	
		
	</div>";




?>
</body>
</html>






