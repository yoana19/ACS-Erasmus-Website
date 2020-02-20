<?php
    require "header.php";
?>

<?php
if (isset($_GET['croatia'])) {

echo '
<center>
<img src="img/erasmus-interview.png" width = "1000px" height = "650px">
</center>
<center>
<audio controls>
  <source src="audio/croatia-interview1.wav" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<audio controls>
  <source src="audio/croatia-interview2.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio></center>';

} else if (isset($_GET['germany'])) {

echo '';

} else if (isset($_GET['austria'])) {

echo '<video src="img/aus-video.mp4" width = "100%" height = "975px" controls';

} else if (isset($_GET['greece'])) {

echo '<video src="img/greece-video.mp4" width = "100%" height = "900px" controls ';

} else if (isset($_GET['turkey'])) {

echo '';

}

else if (isset($_GET['bulgaria'])) {

echo '<br>
	  <center><iframe width=50% height="500px" src="https://www.youtube.com/embed/ryrRXbbfFgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
	  <br>
	  <center><img src="img/bg-img.jpg" width=55%/></center>';;
}
?>

<?php
    require "footer.php";
?>
