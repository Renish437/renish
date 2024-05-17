<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website<br>
        <?php

        echo "Hello World this is printed using php";
echo define("PI",3.143);
        //Secret algorithm
        // 
        $var=34;
        $var1=45;
        echo $var;
        echo $var1;

        Echo $var +$var1;

        // Operators in php
        // Arithemetic Operators
        echo "The value of var +var1 is", $var + $var1;
        echo "<br>";
        echo "The value of var +var1 is", $var - $var1;
        echo "<br>";
        echo "The value of var +var1 is", $var * $var1;
        echo "<br>";
        echo "The value of var +var1 is", $var / $var1;
        echo "<br>";
        // Asssinment Operators 
        $newVar =$var;
        // $newVar+=1;
        // $newVar-=1;
        $newVar*=2;
        $newVar/=2;
        echo "The new variable is ", $newVar;

        // Comparision Operators 
        echo "<h1>Comparision Operators</h1>";
        echo "The value ot 1==4 is" ," "  , var_dump(1==4); 
        echo "<br>";
        echo "The value ot 1!=4 is"," ", var_dump(1!=4);
        echo "<br>";
        echo "The value ot 1>=4 is"," ", var_dump(1>=4);
        echo "<br>";
        echo "The value ot 1<=4 is"," ", var_dump(1<=4);
        echo "<br>";
        
        // Increament/Decrement Operators
        echo "<h1>Increamnet Decreament Operators</h1>";
        echo $var++;
         echo  $var--;
        // echo ++$var;
        // echo  --$var;
        // echo "var=",$var;
        
        // Logical Operators
        // And(&&)
        // Or(||)
        // xOR
        // Not(!)

     $hiVar= (true && false);
        echo var_dump($hiVar);

     $var2=(true || true );
     echo var_dump($var2);


        ?>
         <?php
        // Data types in php
        // 1. String 
        echo "<h1>DataTypes</h1>";
$var ="This is a string";
echo var_dump($var);
echo "<br>";
$var=68;
echo var_dump($var);
echo "<br>";
$var=65.9;
echo "",($var);
echo "<br>";
$var= false || false;
echo var_dump($var);
echo PI;

        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array 
        // 6. Object

        
        
        ?> 
       
    </div>
</body>
</html>