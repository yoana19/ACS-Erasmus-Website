<?php
    require "header.php";
?>

<?php
if (isset($_GET['croatia'])) {

echo '<embed src="presentations/croatia-presentation2.pdf" type="application/pdf" width="100%" height="1000px" />
	  <embed src="presentations/croatia-presentation.pdf" type="application/pdf" width="100%" height="1000px" />';

} else if (isset($_GET['germany'])) {

echo '<embed src="presentations/germany-presentation4.pdf" type="application/pdf" width="100%" height="1000px" />
	  <embed src="presentations/germany-presentation3.pdf" type="application/pdf" width="100%" height="1000px" />
	  <embed src="presentations/germany-presentation2.pdf" type="application/pdf" width="100%" height="850px" />
      <embed src="presentations/germany-presentation.pdf" type="application/pdf" width="100%" height="1000px" />';

} else if (isset($_GET['austria'])) {

echo '<embed src="presentations/austria-presentation.pdf" type="application/pdf" width="100%" height="1000px" />';

} else if (isset($_GET['greece'])) {

echo '<embed src="presentations/greece-presentation3.pdf" type="application/pdf" width="100%" height="1000px" />
	  <embed src="presentations/greece-presentation.pdf" type="application/pdf" width="100%" height="1000px" />
      <embed src="presentations/greece-presentation2.pdf" type="application/pdf" width="100%" height="1000px" />';

} else if (isset($_GET['turkey'])) {

echo '<embed src="presentations/turkey-presentation2.pdf" type="application/pdf" width="100%" height="1000px" />
	  <embed src="presentations/turkey-presentation.pdf" type="application/pdf" width="100%" height="1000px" />';
}
else if (isset($_GET['bulgaria'])) {

echo '<iframe src="https://prezi.com/p/iagicvssnxrl/embed/" id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" allow="autoplay; fullscreen" height="900px" width="100%"></iframe>
<iframe width=100% height=900px src="https://prezi.com/p/0nvvgeijf4m8/embed" webkitallowfullscreen="1" mozallowfullscreen="1" allowfullscreen="1"></iframe>';

}
?>

<?php
    require "footer.php";
?>
