<?php

// .引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($c){
    $d = $c * 2;
    
    return $d;
}

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function plus($a,$b){
    $p = $a + $b;
    
    return $p;
}


// 　参考）引数は下記のように指定すると、複数の仮引数を使うことができます

//  function add($a, $b){
//  //処理したい内容
//  }
 
 
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1, 3, 5 ,7, 9);

    $result = 1;
    
    function product($arr){
        for($i = 0; $i < count($arr); $i++ ){
            $result *= $arr[$i];
        }
        
        return $result;
    }



// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
//   $max_number = $arr[0];
//   foreach($arr as $a){
//     // ここで配列の中の1番大きい値を探したい
    
//   }
    $a = 0;

    for($i = 0; $i < count($arr); $i++ ){
        if ($a < $arr[$i]){
            $a = $arr[$i];
        }
    }
    
    return $a;

//   return $max_number;
}


// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

// strip_tags
// array_push
// array_merge
// time, mktime
// date


