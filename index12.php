<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website to travel form</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anta&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
</head>
<body>
    <img class="bg" src="bgg1.jpg" alt="photo">
    <div class="container">
<h1>Welcome to Everest Trip Form</h1>
<p class="hello">Enter your details and submit this form to confirm your participation in the trip </p>
<p class="submitmsg">Thanks for submitting your form.We are happy to see you in the Everest trip.</p>
<form action="Logic1.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter your name">
<input type="text" name="age" id="age" placeholder="Enter your age">
<input type="text" name="gender" id="gender" placeholder="Enter your gender">

<input type="email" name="email"id="email" placeholder="Enter your email">
<input type="phone" name="phone"id="phone" placeholder="Enter your Phone number">
<textarea name="desc" id="desc" cols="30" rows="10"  placeholder="Enter any Information" ></textarea>
<button class="btn">Submit</button>
    
</form>



    </div>
    <script src="index1.js"></script>

     
</body>
</html>