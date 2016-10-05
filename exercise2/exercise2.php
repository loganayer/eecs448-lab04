<?php
$one = $_POST["1"];
$two = $_POST["2"];
$thr = $_POST["3"];
$fou = $_POST["4"];
$fiv = $_POST["5"];
$score = 0;
$percent = 0;

echo "<h4> Answers </h4>";
echo "What is the sum of 2 and 4? <br>";
echo "Your Answer: " . $one . "<br>";
echo "Correct Answer: 6 <br>";
if ($one == 6) {
    $score++;
}
echo "<br>";
echo "What is the sum of 3 and 5? <br>";
echo "Your Answer: " . $two . "<br>";
echo "Correct Answer: 8 <br>";
if ($two == 8) {
    $score++;
}
echo "<br>";
echo "What is the sum of 4 and 1? <br>";
echo "Your Answer: " . $thr . "<br>";
echo "Correct Answer: 5 <br>";
if ($thr == 5) {
    $score++;
}
echo "<br>";
echo "What is the sum of 7 and 2? <br>";
echo "Your Answer: " . $fou . "<br>";
echo "Correct Answer: 9 <br>";
if ($fou == 9) {
    $score++;
}
echo "<br>";
echo "What is the sum of 9 and 0? <br>";
echo "Your Answer: " . $fiv . "<br>";
echo "Correct Answer: 9 <br>";
if ($fiv == 9) {
    $score++;
}
$percent = ($score / 5) * 100;
echo "<br>";
echo "<br>";
echo "You answered " . $score . " questions correctly.<br>";
echo "You earned a " . $percent . "%.";
?>
