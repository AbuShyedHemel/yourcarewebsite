<?php

    $con = mysqli_connect("localhost","root","","docregdb");


    $name =$_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $conpassword = $_POST['conpass'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    

    if($password!=$conpassword)
    {
        echo "Password are not matched";
    }
    else
    {
        $password = md5($password);
        
    
        $sql ="INSERT INTO reg_form(UserName,Age,Email,Phone,Password,Gender,Address) values
        ('$name' , '$age' , '$email' ,'$phone' , '$password' , '$gender', '$address')";
        
        if(!mysqli_query($con,$sql))
        {
            echo "One Email Can Use One Time <br>";
        }else
        {
            echo "Successfully Creat";
        }
    
    }

?>