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
	
	echo "<pre> ����<pre>";
	
	$info  = array( 'coffee' ,  'brown' ,  'caffeine' );

 // �г����б���
 list( $drink ,  $color ,  $power ) =  $info ;
echo  " $drink  is  $color  and  $power  makes it special.\n" ;

 // �г����ǵ�����һ��
 list( $drink , ,  $power ) =  $info ;
echo  " $drink  has  $power .\n" ;

 // ����������������������
 list( , ,  $power ) =  $info ;
echo  "I need  $power !\n" ;

 // list() ���ܶ��ַ���������
 list( $bar ) =  "abcde" ;
 var_dump ( $bar );  // NULL

 ?> 