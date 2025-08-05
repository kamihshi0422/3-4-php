<!-- 問1 if-->


<!-- 問1　解答 -->
<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}
?>

<!-- 問２ if ~ else-->
<?php
$a = 7;

if ($a ===5) {
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}
?>

<!-- 問3 if ~ elseif ~ else -->
<?php
$a = 7;

if ($a === 5) {
echo "\$aは5です";
}elseif ($a === 7){
echo "\$aは7です";
}else{
echo "?\$aは5と7以外です"; 
}
?>

<!-- 問4　switch文 -->
<?php
$people = "Saburo";

switch ($people) {
    case "Taro":
    echo "太郎です";
    break;

    case "Jiro":
    echo "次郎です";
    break;

    case "Saburo":
    echo "三郎です";
    break;
}
?>

<!-- 問5　三項演算子 -->
<?php
$a = 7;

$b = ($a == 7) ? "TRUE" : "FALSE";
echo $b;
?>