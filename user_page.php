<?php

$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <style>
       
       * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
       }

       body {
           font-family: Arial, sans-serif;
           background-color: #f3f3f3;
           color: #333;
           margin: 0;
           padding: 0;
       }

       .header {
           background-color: #5ac4ed; 
           color: #fff;
           padding: 15px 30px;
           display: flex;
           justify-content: space-between;
           align-items: center;
           position: fixed;
           width: 100%;
           top: 0;
           z-index: 1000;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
       }

       .header .logo {
           display: flex;
           align-items: center;
       }

       .header .logo img {
           width: 50px;
           height: 50px;
           margin-right: 15px;
           border-radius: 50%;
       }

       .header h1 {
           margin: 0;
           font-size: 24px;
           color: #fff;
       }

       .navigation {
           display: flex;
           align-items: center;
       }

       .header .nav {
           list-style: none;
           margin: 0;
           padding: 0;
           display: flex;
       }

       .header .nav li {
           margin-left: 20px;
       }

       .header .nav a {
           color: #fff;
           font-weight: bold;
           text-decoration: none;
           padding: 10px 15px;
           border-radius: 20px;
           transition: background-color 0.3s;
           background-color: #5ac4ed; 
       }

       .header .nav a:hover {
           background-color: #fff; 
           color: black;
       }

       .container {
           margin: 100px auto;
           padding: 20px;
           width: 90%;
           max-width: 800px;
           background-color: #fff;
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
           border-radius: 10px;
           text-align: center;
       }

       .container .content h3 {
           margin-bottom: 10px;
           font-size: 24px;
       }

       .container .content h1 {
           font-size: 28px;
           margin-bottom: 20px;
           color: red;
       }

       .container .content p {
           margin-bottom: 20px;
           font-size: 18px;
       }

       .container .content .buttons {
           display: flex;
           justify-content: center;
           gap: 10px;
           flex-wrap: wrap;
       }

       .container .content .btn {
           display: inline-block;
           padding: 10px 20px;
           background-color: #16ace8;
           color: #fff;
           text-decoration: none;
           border-radius: 5px;
           transition: background-color 0.3s;
       }

       .container .content .btn:hover {
           background-color:  #5ac4ed; 
       }
   </style>

   <script type="text/javascript">
       var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
       (function(){
       var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
       s1.async=true;
       s1.src='https://embed.tawk.to/6492f81d94cf5d49dc5f06a1/1h3f1idmn';
       s1.charset='UTF-8';
       s1.setAttribute('crossorigin','*');
       s0.parentNode.insertBefore(s1,s0);
       })();
   </script>
</head>

<body>
<header class="header">
    <div class="logo">
        <img src="websitelogo.png" alt="Online Education Logo">
        <h1>Online Education</h1>
    </div>
    <nav class="navigation">
        <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="login_form.php">Menu</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="teachers.html">Teachers</a></li>
            <li><a href="courses.html">Courses</a></li>
        </ul>
    </nav>
</header>

<div class="container">
   <div class="content">
      <h3>Hi, <span>User</span></h3>
      <h1>Welcome, <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>This is a user page</p>
      <div class="buttons">
          <a href="calculator.html" class="btn">Calculator</a>
          <a href="quizzgame.html" class="btn">QuizGame</a>
          <a href="library.html" class="btn">Library</a>
          <a href="noticesection.html" class="btn">Notice</a>
      </div>
   </div>
</div>

</body>
</html>
