<?php
$html = $_POST["html"];
$css = $_POST["css"];
$js = $_POST["js"];
$php = $_POST["php"];
$ship = $_POST["ship"];
$un = $_POST["un"];
$pw = $_POST["pa"];
$total = 0;

echo "<h4> Thanks for your purchase. </h4>";
echo "<body>";
echo "Thank you " . $un . ".<br>";
echo "Your password is " . $pw . ".<br>";
echo "You ordered: <br>";
echo $html . " HTML files.<br>";
$total = $total + ($html * 2);
echo $css . " CSS files.<br>";
$total = $total + ($css * 2);
echo $js . " JS files.<br>";
$total = $total + ($js * 4);
echo $php . " PHP files.<br>";
$total = $total + ($php * 5);
if ($ship == "over") {
	echo "Shipping method: Overnight<br>";
	$total = $total + (50);
} else if ($ship == "three") {
	echo "Shipping method: Three Day<br>";
	$total = $total + (5);
} else if ($ship == "seven") {
	echo "Shipping method: Seven Day<br>";
}
echo "Your total comes out to: " . $total . " dollars.";
echo "</body>";
?>
