<?php
$connection = mysqli_connect('localhost', 'root', '', 'db') or die(mysqli_error($connection));

if (isset($_POST['submit'])) 
{
    if (empty($_POST['login'])) 
    {
        $info_reg = 'Вы не ввели Логин';
    }          
    elseif (empty($_POST['email'])) 
    {
        $info_reg = 'Вы не ввели почту';
    }           
    elseif (empty($_POST['password'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }     
    elseif (empty($_POST['firstname'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }     
    elseif (empty($_POST['lastname'])) 
    {
        $info_reg = 'Вы не ввели пароль';
    }                      
    else 
    {
        $login = $_POST['login'];
        $email = $_POST['email'];               
        $password = $_POST['password'];
         $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];

  
        $query = "INSERT INTO `users` (login, email, password, firstname, lastname)
        VALUES ('$login', '$email', '$password', '$firstname', '$lastname')";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    
                    echo "<script>alert('Вы успешно зарегистрировались');
location.href='http://localhost/sas/index.php';</script>";

    }
}

$info_reg = isset($info_reg) ? $info_reg : NULL;
echo $info_reg;
?>