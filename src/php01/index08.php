<!-- 配列と連想配列 -->

<!--①配列
例　array関数...配列を生成する -->
<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
//var_dump関数...与えられた変数の値を詳細に出力。 出力結果には、配列の要素数と各要素のデータ型、値、値の長さ（文字列の場合)

echo $people[0] . "<br />"; //Taroが出力
?>


<!-- ②連想配列 ...添字に文字列を用いた配列-->
 <?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);?>

<!-- 別の作成方法 []で指定-->
<?php
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];

echo "<br />" . $people['person1'] . "<br />" ;
?>


<!-- ③多次元配列 …配列の中に配列が入ってる状態-->
<?php
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[0]["last_name"] . "<br />";
?>

<!--④foreach 文  …配列の要素の数だけ処理が繰り返される-->
<!-- for文…繰り返す数をあらかじめ決めて処理
while 文…条件を指定し、その条件に合う間は処理-->

<?php
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}?>

<!-- +添字を取得する方法 -->
<?php
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}
//foreach で配列と値を引数として指定しますが、
// そのとき値をキー => 値
// (上の例だと$person => $name)の形
?>

<!-- 問1　foreach文と多次元配列で -->
<?php
$people = [
    [//0
        "name" => "Taro",
        "age" => "25",
        "gender" => "men"
        //['Taro', 25, 'men'], と添え字なしで指定可能
    ],
    [//1
        "name" => "Jiro",
        "age" => "20",
        "gender" => "men"
    ],
    [//2
        "name" => "hanako",
        "age" => "16",
        "gender" => "women"
    ],
];

//var_dump($people);

foreach ($people as $person) {
 echo $person["name"] . "(" . $person["age"] . "歳". $person["gender"] . ")" . "<br />";

 //['Taro', 25, 'men'], と添え字なしで指定した場合、
 //echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';　…[0 , 1 , 2]　で指定可能
}
?>

<!-- 問1　解答　-->
 <?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
?>