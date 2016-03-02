<?php
 // Show all errors
 error_reporting ( E_ALL );

 $arr  = array( 'fruit'  =>  'apple' ,  'veggie'  =>  'carrot' );

 // Correct
 print  $arr [ 'fruit' ];   // apple
 print  $arr [ 'veggie' ];  // carrot

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
// 
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
 print  $arr [ fruit ];     // apple

// This defines a constant to demonstrate what's going on.  The value 'veggie'
// is assigned to a constant named fruit.
 define ( 'fruit' ,  'veggie' );

 // Notice the difference now
 print  $arr [ 'fruit' ];   // apple
 print  $arr [ fruit ];     // carrot

// The following is okay, as it's inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
 print  "Hello  $arr [ fruit ] " ;       // Hello apple

// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
 print  "Hello  { $arr [ fruit ]} " ;     // Hello carrot
 print  "Hello  { $arr [ 'fruit' ]} " ;   // Hello apple

// This will not work, and will result in a parse error, such as:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// This of course applies to using superglobals in strings as well
 print  "Hello  $arr [ 'fruit']" ;
print  "Hello  $_GET [ 'foo']" ;

 // Concatenation is another option
 print  "Hello "  .  $arr [ 'fruit' ];  // Hello apple
 
 echo "<pre>";
 
 class  A  {
    private  $A ;  // This will become '\0A\0A'
 }

class  B  extends  A  {
    private  $A ;  // This will become '\0B\0A'
     public  $AA ;  // This will become 'AA'
 }

 var_dump ((array) new  B ());
 
 
  echo "<pre>";
  
  
  $a = array("red", "blue", "green");
  foreach($a as $a) {
	  print("do you like $a?\n");
  }
  
  
  $handle  =  opendir ( '.' );
while ( false  !== ( $file  =  readdir ( $handle ))) {
     $files [] =  $file ;
}
 closedir ( $handle ); 

  
 sort ( $files );
 print_r ( $files );
 
 
 $arr1  = array( 2 ,  3 );
 $arr2  =  $arr1 ;
 $arr2 [] =  4 ;  // $arr2 is changed,
             // $arr1 is still array(2, 3)
             
 $arr3  = & $arr1 ;
 $arr3 [] =  4 ;  // now $arr1 and $arr3 are the same
 
 
 print_r($arr1);
 print_r($arr2);
 print_r($arr3);
 
 
 ?> 