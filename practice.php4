<?php
//課題1
function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++) {
        $result = $i+$i;
}

return $result;
}

echo sum(100);

//課題１別回答
/*function product($max){
    $result=$max*2;
    {
        return $result;
    }
}
echo product(5);*/

//課題2
function f($a, $b){
    $result = $a+$b;
    
    return $result;
}
echo f($a=5,$b=8);

//課題3
function product($arr) {
    $total = 1;
    foreach($arr as $arr2){
        $total *= $arr2;
    }
    return $total;
}
echo product(array(1,3,5,7,9));

//課題4
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 rsort($arr);
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if ($max_number < $a){
     $max_number = $a;
 }
 }

 return $max_number;
 }
 echo max_array(array(13,34,35,57,96,12));
 
$string ='<li><a href="#">Home</a></li>';
 $result =strip_tags($string);
 echo $result;
 
 $date =array(12,43,21);
 array_push($date,7,55);
 print_r($date);
 
 $date2 = array("No1" => "B`z", "No2" => "Mr.Children", "No3" => "サザンオールスターズ");
 $Newdate2 = array("No2" => "AKB48", "No3" => "Mr.Children", "No4" => "サザンオールスターズ");
 $result = array_merge($date2,$Newdate2);
 print_r($result);
 
 $now = time();
 print $now;
 
 $timestamp = mktime(13,17,00,17,05,2020);
 print $timestamp;
 
 $timestamp = time() + (60*60*24)*7 ;
 $next_week = date('Y年m月d日H時i分s秒',$timestamp);
 print $next_week; 
 ?>