<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
registerUser($username, $email, $password);


function registerUser($username, $email, $password){}
   
    $info = [$username, $email, $password];

    $file = fopen("../storage/users.csv", "a+");
    while($data = fgetcsv($file)){
        // check if user exists
        if($data[1] == $email ){
            echo "user already exists";
            exit();
            
        }elseif($data[1] != $email){
            fputcsv($file, $info);
            echo "User Successfully Registered";
            exit();

      }else{
    echo "Registeration failed";
      }
    }
fclose($file);

