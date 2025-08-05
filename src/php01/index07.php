<!-- 関数 -->
                <!-- メモ -->
<!--
・関数を作るには
    「function 関数名(){ 処理 }」 
・作った関数を呼び出すときは、
    「 関数名()」-->
<!-- return　について-->
<!--
function hello(){
  return 'Hello, World';
}
hello();
→何も表示されません 

function hello(){
  return 'Hello, World';
}
echo hello();
→Hello, World が表示される　-->
<!-- 関数呼び出しだと表示されないが、echoだと代入されている。 -->
                <!-- メモ終 -->

<!--
function 関数名(引数){
処理内容
return 戻り値；
}
-->

<!-- 引数と戻り値あり -->
<?php
function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return; //戻り値なしなので省略可能
}

outputNumber(2);
?>
<!-- 関数で返す値がない時は、戻り値を指定する必要はありません。 -->


<!--引数と戻り値なし  -->
<?php
function outputHello()
{
  echo "Hello world";
  //return; //戻り値なしなので省略可能
}

outputHello(); 
// ①呼び出された関数 outputHello が Hello world と出力させる。
?>

<!-- 引数と戻り値あり -->
<?php
function text($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = text(2, 4);//変数を代入
echo $total;
?>



<!-- 問1 -->
<?php
function x($number1, $number2)
{
  $value = $number1 + $number2;
  return $value;
}

$total = x(2, 3);
echo "<br />" . "問1" . "<br />"; //改行
echo $total;
?>

<!-- 問1　解答 -->
<?php
function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total; 
?>


<!-- 問2 
 Q. 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。-->
<?php
function score($score1, $score2, $score3)
{
    $scoretotal = $score1 + $score2 + $score3;
    return $scoretotal;//いらない
}

$total = score(100 , 100 ,9);
// 　代入は最後

echo "<br />" . "問2" . "<br />";//改行
if($total >= 210 ){//210は含まないので　＞
    echo "「合格点は" . $total . "なので合格です」";
}else{
    echo "「合格点は" . $total . "なので不合格です」";
}
// ifも上の｛処理｝に入れる

?>

<!-- 問2　解答 -->
 <?php

function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です";
  } else {
    echo $total . "点なので不合格です";
  }
}
// 上の処理に代入
echo (exam(80, 60, 90));
?>

<?php
echo "<br />" ?>

<!-- 問３　 Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。-->

<!-- 三角形 triangle 底辺*高さ*0.5-->
<?php
function triangle_area($base, $height){
    return $base * $height *0.5; //  /2 でも良い
}

echo "<br />" . "問3" . "<br />";//改行
$area = triangle_area(2 ,3);
echo $area;
?>

<?php
echo "<br />" ?>
<!-- 四角形 quadrilateral　辺*辺-->
<?php
function quadrilateral_area($side1, $side2){
    return $side1 * $side2;
}

$area = quadrilateral_area(2, 2);
echo $area;
?>

<?php
echo "<br />" ?>
<!-- 台形 trapezoid（上辺＋下辺)*高さ*0.5-->
<?php
function trapezoid_area($upperbase, $lowerbase, $height){
    return ($upperbase + $lowerbase) *$height *0.5; // 　/2 でも良い
}

$area= trapezoid_area(2, 4, 3);
echo $area;
?>
<!-- returnで返しているため、$areaに代入せず、直接echoでいい -->
<?php
echo "<br />" ?>



<!-- 問3　解答 -->
 <?php

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
// \nはLinux/macOSの改行コード
echo getTrapezoidArea(4, 5, 4);
?>