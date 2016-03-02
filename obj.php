<?php
	class A {
		function funA() {
			echo "hahhaha  class";
		}
		
	}
	
	$a = new A();
	$a->funA();
	
	echo "<pre>";
	
	$tem = get_class_vars("A");
	var_dump($tem);
	
	echo "<pre>";
	
	$tem1 = class_exists("A");
	echo $tem1;
	
	echo "<pre>";
	
	$tem2 = get_class_methods("A");
	var_dump($tem2);
	
	echo "<pre> 换行<pre>";
	
	$info  = array( 'coffee' ,  'brown' ,  'caffeine' );

 // 列出所有变量
 list( $drink ,  $color ,  $power ) =  $info ;
echo  " $drink  is  $color  and  $power  makes it special.\n" ;

 // 列出他们的其中一个
 list( $drink , ,  $power ) =  $info ;
echo  " $drink  has  $power .\n" ;

 // 或者让我们跳到仅第三个
 list( , ,  $power ) =  $info ;
echo  "I need  $power !\n" ;

 // list() 不能对字符串起作用
 list( $bar ) =  "abcde" ;
 var_dump ( $bar );  // NULL

 ?> 