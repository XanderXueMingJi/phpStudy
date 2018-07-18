<?php
// // 数据类型
// // String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。

// $arr = array('one', 'two', 'thr');
// print_r($arr); // Array ( [0] => one [1] => two [2] => thr )
// echo '<br/>';
// var_dump($arr); //array(3) { [0]=> string(3) "one" [1]=> string(3) "two" [2]=> string(3) "thr" }

// var_dump(null);

// $obj = {  // 有问题!!!
//     name: 'xmj',
//     age: 29
// };
// var_dump($obj);


// // 常量 变量前没有$
// // 有三个参数: 1. name：必选参数，常量名称，即标志符。  2.value：必选参数，常量的值。  3.可选参数 默认是false大小写敏感, 而true大小写不敏感
// define('XMJ', '活着, 相遇, 奋斗, 传奇', true);
// echo XMJ;
// echo '<br/>';
// echo xmj;


// 字符串变量
$t1 = 'hello';
$t2 = 'world';
$t3 = $t1.' '.$t2;
echo $t3;
echo '<br/>';
echo strlen($t3); // 字符串的长度
echo '<br/>';
echo strpos($t3, 'wor'); // 找到对应的位置 6
echo '<br/>';
//中文  一个中文占 3 个字符数所以也要进行改变
$s1 = '小米椒很好吃';
echo mb_strlen($s1); // 6
echo '<br/>';
echo mb_strpos($s1, '很'); 



















?>