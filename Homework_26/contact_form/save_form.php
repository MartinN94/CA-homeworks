<?php 

if (isset($_POST['button'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        $userData = $_POST['name'].'|'.$_POST['email'].'|'.$_POST['message']."\n";
        $userFile = 'user_data.txt';
        file_put_contents($userFile, $userData, FILE_APPEND);
        $userMessage = 'Dear '.$_POST['name'].', your data is succesfuly processed on our server. You will be contacted later on: '.$_POST['email'].'!';
        echo '<h3>'.$userMessage.'</h3>';

    }else {
        echo '<script> alert("Please fill all forms!")</script>';
    }
}
