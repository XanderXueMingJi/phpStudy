<?php
    // http://127.0.0.1:8081/phpStudy/1.php

    // echo 'hello', ' xmj'; //速度最快 支持多个输出
    // echo '<br/>';
    // print '<br/>'; // 支持一个输出
    // print 'work';
    // echo '<br/>';
    // var_dump('xmj'); //个人认为输出类似对象的值
    // echo '<br/>';
    // print_r('xmj'); // 较慢

    // echo '<br/>';

    // // 变量
    // $x = 5;
    // $y = 6;
    // $x = $x + $y;
    // echo $x;
    // echo '<br/>';

    // // 局部和全局作用域
    // $x = 15;


    // function test() {
    //     global $x;
    //     $y = 2;
    //     $x = $x * $y;
    //     echo $x; 
    // }
    // test();
    // echo '<br/>';
    // echo $x;





    // //Static作用域
    // // 当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。

    // // 要做到这一点，请在您第一次声明变量时使用 static 关键字：

    // function test() {
    //     static $x = 0;
    //     // $x = 0;
    //     echo '<br/>';
    //     echo $x;
    //     $x ++;
    // }

    // test();
    // test();
    // test();
    // test();
    // test();
    // test();



    // EOF(heredoc) 使用说明  最后的EOF要顶到最前面,不然会报错 感觉像react的模板输出
    $name = '哈哈哈哈';
    echo <<<EOF
        <h1>大写的标题</h1>
        <p>第一个段落 $name </p>
EOF;











?>    