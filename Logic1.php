<?php

// if($_POST['name']=='Renish'){
//     if($_POST['age']== '20'){
//         echo "Sucessfully Login";
//     }
//     else{
//         echo "Wrong age";
//     }

// }
// else{
//     echo "Wrong name or Id";
// }



// $server= "localhost";
// $username= "root";
// $password= "";

// $con = mysqli_connect($server,$username,$password);

// if(!$con){
//     die("connection to thie database failed due to". mysqli_connect_error());


// }
//  else{
//     echo "Sucessfully connected with Database";
//  }
 $name=$_POST['name'];
 $gender=$_POST['gender'];
 $age=$_POST['age'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $other=$_POST['other'];

 $conn = new mysqli('localhost','root','','everesttrip');
 if($conn->connect_error){
    die('Connection Failed:'. $conn->connect_error);
 }
 else{
    $stmt =$conn->prepare("insert into everesttrip(name,gender,age,email,phone,other) 
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisis",$name, $gender, $age, $email, $phone, $other);
    $stmt->execute();
    echo "Registred Successfully...";
    $stmt->close();
    $conn->close();
    
 }






// $sql=INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ($name, $age, $gender, $email, $phone, $other, current_timestamp());
// echo $sql;


?>