<?php
	print "i love you!";
	
		echo "<pre>";
	
	$a=array('aa','bbbb','cc');
	var_dump($a);
	
	echo "<pre>";
	
	$b = array(
     "foo"  =>  "bar" ,
     "bar"  =>  "foo" ,
     100    => - 100 ,
    - 100   =>  100 ,
);
 var_dump ( $b );
 
 echo "<pre>";
 $c  = array(
     1     =>  "a" ,
     "1"   =>  "b" ,
     1.5   =>  "c" ,
     true  =>  "qd" ,
);
 var_dump ( $c );

echo "<pre>";
 $d = array(
	"a",
	"b",
	6=>"c",
	"d"
 );
 
 var_dump($d);
 
 echo "<pre>";
 
 function  getArray () {
    return array( 1 ,  2 ,  3 );
}

 // on PHP 5.4
 $secondElement  =  getArray ()[ 1 ];

 // previously
 $tmp  =  getArray ();
 $secondElement  =  $tmp [ 1 ];

 // or
 list(,  $secondElement ) =  getArray ();

	var_dump($secondElement);
	
	
/////////////////////////////////////////////////////////	
 echo "<pre>";	
	// ����һ���򵥵�����
 $array  = array( 1 ,  2 ,  3 ,  4 ,  5 );
 print_r ( $array );

 // ����ɾ�����е�����Ԫ�أ����������鱾����:
 foreach ( $array  as  $i  =>  $value ) {
    unset( $array [ $i ]);
}
 print_r ( $array );

 // ���һ����Ԫ��ע���µļ����� 5���������������Ϊ�� 0��
 $array [] =  6 ;
 print_r ( $array );

 // ����������array_values 
 $array  =  array_values ( $array );
 $array [] =  7 ;
 print_r ( $array );
 
 /////////////////////////////////////////////////////////	
 
 $a  = array( 1  =>  'one' ,  2  =>  'two' ,  3  =>  'three' );
unset( $a [ 2 ]);
 /* will produce an array that would have been defined as
   $a = array(1 => 'one', 3 => 'three');
   and NOT
   $a = array(1 => 'one', 2 =>'three');
*/

print_r($a);

 $b  =  array_values ( $a );
 // Now $b is array(0 => 'one', 1 =>'three')
 print_r($b);



?>

