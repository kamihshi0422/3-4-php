<!-- <7/24> -->
<!-- 問1　for文 -->
<!-- for ($a = 2; $a <= 10; $a**) {
    echo $a;
} -->

<!--　問1　解答 -->
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}
?>

<!-- 問2　while文 -->
<?php
$count = 1;

while ($count <= 20) {
    echo $count . '<br />';
    $count += 2;
}
?>

<!-- 問2　解答 -->
<?php
$count = 0;

while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}
?>

<?php
echo "<br />";
?>

<?php
$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}
?>

<?php
echo "<br />";
?>

<!-- 問3　while文　breakとcontinue -->

<!-- $count = 0;

while ($count <= 100) {
    if ($count == 6) {
        $count++;
        continue;
    }elseif ($count = 20) {
        break;
    }
    echo $count . '<br />';
    ++$count; -->

<!-- 問3　解答 -->
<?php
$count = 0;

while ($count <= 100) {
    //100まで
    if ($count === 20) {
        break;
    //20で終わる
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    //$countが3の倍数に等しく同じ型の時、$countに1を足しスキップする
    //基、3で割ったとき0の数
    }
    echo $count . '<br />';
    $count++;
}
?>

<!-- 問4　do...while文 -->
<!-- do{
// whileの条件式が真の時に実行
}while (条件式); -->

<?php
$num = 0;
do {
    echo "num = " . $num . "<br />";
    $num++;
} while ($num < 3);
?>

<!-- for ($i = 初期値; $i <= 回数; 増減式) {
処理
} -->
<!-- FizzBuzz問題 -->
<?php
for ($num = 1; $num <= 50; $num++) {
    if ($num % 3 === 0 and $num % 5 === 0) {
        // $num % 15 で良い
        echo "FizzBuzz" . "<br />";
        continue;
    }
    // 下記else if (習ってないです)
    if ($num % 3 === 0){
        echo "Fizz" . "<br />";
        continue;
    }
    if ($num % 5 === 0){
        echo "Buzz" . "<br />";
        continue;
    }else{
        echo $num . "<br />";
    }
}
?>

<!-- FizzBuzz問題 解答 -->
 <?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
?>

<!-- 7/26 -->
<?php
echo "<br />" ."問題 7/26" . "<br />"?>
<!-- 二重ループとは... forやwhileなどの処理の｛｝の内側でさらに繰り返し処理を記述 
 下記例-->

<!-- for ($i = 初期値; $i <= 回数; 増減式) {
処理} -->
 <?php
for($i = 1; $i < 3; $i++){
    for($j = 1; $j < 10; $j++){ //$iじゃなくて、$jであることに注意！
 
        echo $i;
        echo $j; //改行が無いと続けて表示されます。
        echo "<br>"; //改行
 
    }
 
}
?>

<!-- 二重ループ　使用　問題 -->
<?php
for($i = 1; $i < 6; $i++){
  for($j = 1; $j < 6; $j++){
    echo "●";
    //$jが5を超えるまで＝5回echo "●"を繰り返す
  }
  echo "<br />";
  //$jが5回繰り返したのち、$iが1回繰り返す
  // $iが5を超えるまで改行を繰り返す
}
?>

<!-- 外側 ( $i の方 ) のプログラムが 1 回繰り返されるごとに、内側のプログラム ( $j の方) が 5 回繰り返されます。

内側のプログラム ( $j の方) 単体では「＊＊＊＊＊」が表示されます。 -->