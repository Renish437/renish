<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color:rgb(128, 121, 121);
        margin:auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's Learn about Php</h1>
        This is a container
        <p>Your party status is here</p>
        <?php
        $age=60;
        if($age<=18){
            echo "You can go the party";
        }
        else{
            echo "You cannot go the party";
        }
        //Arrays in php
        $langg=array("C","Python","Java","C++");
        // echo $langg[1];
        // echo count($langg);

        //Loops in php
        $a=4;
        while ($a <= 10) {
        echo "<br>The value of a is:",$a;
        ++$a;
        }

        //Iterating arrays in php using while loop
        $a=0;
        while ($a < count($langg)) {
        echo "<br>The value of languages is:";
        echo $langg[$a];
        $a++;
        }
//Do while
        $a=4;
        do {
        echo "<br>The value of a is:",$a;
        ++$a;
        } while ($a < 10);

        for ($a=1; $a<=10; $a++){
echo "<br>the value of a is;",$a;
        }
//for-each loop
        foreach($langg as $value){
            echo "<br>The value is from foreach loop:",$value;
        }

        function print5($varr,$varr1){
            echo "Hello",$varr,$varr1;
        }
        $arr=["Renish","Subu"];
        echo print5(45,43),$arr[1];

        function print45($num){
echo"<br>your number is:",$num;
        }
        print45(245);
        
    

        
        
        
        
        

        ?>
 
       
    </div>
</body>
</html>