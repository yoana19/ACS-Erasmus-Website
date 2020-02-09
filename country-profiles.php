<?php
    require "header.php";
?>

<?php
if (isset($_GET['croatia'])) {

echo '<center><iframe width = 40% height = 1000px src="https://docs.google.com/document/d/e/2PACX-1vRHpZUk-e6sm-qQvYJqpJQMFg678ZLk1wrhftXfWXapX1kOwXHd19uDqqLP5K7qzRdqLEOCIEJ09uiz/pub?embedded=true"></iframe></center>';

} else if (isset($_GET['germany'])) {

echo '';

} else if (isset($_GET['austria'])) {

echo '';

} else if (isset($_GET['greece'])) {

echo '<embed src="docs/greece-profiles.pdf" type="application/pdf" width="100%" height="1000px"/>';

} else if (isset($_GET['turkey'])) {

echo '';

}
else if (isset($_GET['bulgaria'])) {

echo '<center><iframe width = 40% height = 1000px src="https://docs.google.com/document/d/e/2PACX-1vR0X9WA1rW2j0w2TOiFW7sPm6y0DvYSDrux9Lop2TdVwcgbahQJwRnuRAfs6BxiW8meiLQi5rrRPyY7/pub?embedded=true"></iframe></center>';

}
?>

<?php
    require "footer.php";
?>
