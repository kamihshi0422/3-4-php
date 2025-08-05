<!-- 問１ 算術演算子-->
<?php
$a = 15;
$b = 3;
$c = 10;
echo $a + $b;
echo "<br />";

echo $a - $b;
echo "<br />";

echo $a * $b;
echo "<br />";

echo $a / $b;
echo "<br />";

echo $a % $c;
echo "<br />";
?>
<!-- 正解 -->


<!-- 問２ 代入演算子と複合演算子-->
<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$answer1 = $a /= $d;
$answer2 = $b *= $d;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
?>

<!-- 問２　解答 -->
<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
// $aに$bを代入

$c += $d;
// $cに$C+$dを代入

echo $a;
echo "<br />";
echo $c;
echo "<br />";
?>

<!-- 問３ 比較演算子-->
<?php
$a = 20;
$b = 5;

echo $a > $b; 
?>

<!-- 問３　解答 -->
<?php
$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";
?>
<!-- 正しいと　１　が返ってくる -->

<!-- 問４　論理演算子 -->
<?php
$a = 20;
$b =5;

echo ($a > 10) and ($a < 30);
?>

<!-- 問４　解答 -->
<?php
$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";
?>

<!-- 問５　加算子と減算子 -->
<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;
echo "<br />";
?>
<!-- 正解 -->