<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP Basics</title>
</head>

<body>
</body>
<?php
    
    //  This Is Single Line Comment Of PHP

    #   This Is Also A Single Line Comment

    /*  This Is
        Multiline 
        Comment 
        Of PHP  */
   
    echo "My Name Is KRISH and This Is How We Write In PHP Using echo Command<br><br>";
    
    /*  Variables And Datatypes */
    
    //  =>  here variables are case sensitive and rules are also like C
    //  =>  declaration of variables and initialization using $ sign
    //  =>  for declaration of variales PHP is like Python
    
    //  =>  Its Variable Declaration Is Like Python 
    //      because of Its Loosely Typed Language
    
    $integerVar = 10;
    $charVar = 'a';
    $floatVar = 0.001;      //  float or double as per value
    $stringVar = 'KRISH';   //  can write in single or double both
    $boolVar = true;
    $nullVar = null;

    //  operators remaining

    //  can also write in multiple line also
    echo "Integer : $integerVar <br>Character : $charVar <br>Float : $floatVar <br>
          String : $stringVar <br>  Boolean : $boolVar <br>  Null : $nullVar (Its Null Nothing)<br>";

    //  Some Cool Functions
          
    echo var_dump($floatVar) ," and Type ", gettype($floatVar) ," and Converted To Integer ", settype($floatVar,"integer");
          
    /*  Reached At Control Structure    */

    /*  
    Conditions And Actions  :
    Only If ...                 =>  Condition
    If ... Else                 =>  Condition  (Either)..  Or .. 
    If ... Else If ... Else     =>  Conditions
    Switch ...                  =>  Mathching Values ( And Assigning Cases )
    */
    
    //  Only If 
    
    echo "<br><br>";
    
    $age = 18;
    if($age <= 18){
        echo "Your Age Is Less Than or Equal To 18<br>";
    }
    
    //  If ... Else 
    
    $age++;
    if($age <= 18){
        echo "Your Age Is Less Than or Equal To 18<br>";
    }else{
        echo "Your Age Is Greater Than 18<br>";
    }
    
    //  If ... Else If ... Else
    
    if($age > 0 && $age<= 16){
        echo "You Are Student<br>";
    }elseif($age <= 30){
        echo  "Either You Are Studying In College Or Doing Job<br>";
    }elseif($age <= 50){
        echo  "You Are Doing Job<br>";
    }else{
        echo "How 's Your Retirement Life Is Going<br>";
    }

    echo "<br><br>";

    /*  
        Looping Structures and Actions :
            While ...           =>  Loop    ->  Entry Control Loop    
                                    (Only Condition)     - initialization and opeartions by own
                                    Do ... While ..     =>  Loop    ->  Exit Control Loop   
                                    (Executes Minimum One Time and then as per Condition)
                                    - initialization and opeartions by own
            For ...             =>  Loop    ->  With Initialization + Condition + Operations
            forEach             =>  Object / Array Loop     
                                    - foreach( $ object/array as $var){   operation   } 
            continue            =>  Actions  -> Skipping One Iteration
            break               =>  Actions  -> Breaking Whole Structure 
            goto                =>  Actions  -> Giving / Decsiding Direction Of Structure 
    */
                                    
    //  While Loop
    
    $i = 0;
    while($i < 5){
        echo $i , " ";
        $i++;
    }

    echo "Current Value Of i is $i<br><br>";

    //  Do - While Loop 

    do{
        echo $i,"   =>  It Is Non Five So Loop Will Not Work When Reach To 7 <br>";
        $i++;
    }while($i != 5 && $i < 7);

    echo "<br>";

    //  For Loop , Continue and Break + Goto 
    for($i=0;$i<10;$i++){
        if($i == 2){    continue;   }
        if($i == 8){    break;      }
        echo $i," ";
    }

    loop : 
        if($i <= 15){    
            echo $i,"   ";    
            $i++;   
            goto loop;
        }

    /*
    There are 4 Ways Of Implementing Array In PHP   
    =>  Also In PHP Array We can write Key in 
    integer , float , char , string etc ...
    */

    echo "<br><br>Arrays : <br><br>";
    
    /*  Method 1 :                  */
    $arr1 = array(1,2,3,4,5);    
    
    /*  Method 2 :                  */
    $arr2[] = 10;
    $arr2[] = 20;
    $arr2[] = 30;
    $arr2[] = 40;

    /*  Method 3 :                  */         
    $arr3[0] = 1;
    $arr3['A'] = 'A';
    $arr3[2] = 2;
    $arr3['Tata'] = 'C';

    /*  Method 4 :                  */                
    $arr4 = array( "KRISH" => 19 ,"SHAH" => 02); 

    print_r($arr1);     echo "<br><br>";
    print_r($arr2);     echo "<br><br>";
    print_r($arr3);     echo "<br><br>";
    print_r($arr4);     echo "<br><br>";

    global $X;
    $X = 9;

    {
        echo "Its Global $ X : " , $X;
        static $X = 10;
        echo "<br><br>Its Local / Static $ X : " , $X;
    }

    //  also below statement get style of h1 if given 
    echo "<h1>Below Is Information About PHP Using phpinfo()</h1>";
     
    define("CONST","KRISH");

    echo "<br>",constant("CONST"),"<br>";

    phpinfo();
                                    
?>
<?php

    echo "<br>This Is Second PHP Tag In Same Script File";

?>
</html>