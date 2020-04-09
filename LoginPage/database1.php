<?php
   $con = mysqli_connect("localhost","root","","docregdb");
   if(isset($_POST['email']))
   {
       $email = $_POST['email'];
       $password = $_POST['pass'];

       $password = md5($password);

       $sql = "SELECT * FROM reg_form WHERE Email='".$email."'AND Password ='".$password."'
       limit 1";

       $result = mysqli_query($con,$sql);

       if(mysqli_num_rows($result)==1){
            echo "You have Successfully Logged in";
            exit(); 
       }
       else
       {
           echo "You have Entered A Wrong Password Or Email";
           exit();
       }
   }
   
?>  