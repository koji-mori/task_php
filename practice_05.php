<?php

// <!--$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、-->
$name = "koji";
if ($name == "koji"){
    echo "私は" ,$name , "です";
}else{
    // <!--もし違ったら「あなたの名前ではありません」と表示するように実装してください-->
    echo $name , "ではありません";
}

// <!--for文を使って、1から10000までの合計の値を表示してください-->

for ($i = 0; $i <= 1000; $i++){
    $total += $i;
}
echo $total;


// <!--$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください-->

$fruits = array("みかん", "ブドウ", "もも", "スイカ" , "りんご");

foreach($like as $fruits){
  echo "好きな食べ物は" . $fruits;
  echo "\n";
}


// <!--【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください-->

// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する

$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if ($i % 5 == 0){
    echo $i;
    }
}
