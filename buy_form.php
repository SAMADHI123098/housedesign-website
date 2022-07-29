<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $explanation = $_POST['explanation'];
      $services = $_POST['services'];
      $book = $_POST['book'];
      $complete = $_POST['complete'];

      $request = " insert into buy_form(name, email, phone, address, explanation, services, book, complete) values('$name','$email','$phone','$address','$explanation','$services','$book','$complete') ";
      mysqli_query($connection, $request);

      header('location:contact.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>