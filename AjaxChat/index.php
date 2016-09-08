<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

//require 'core/classes/Core.php';
//require 'core/classes/Chat.php';
//
//$chat = new Chat();
//$chat->throwMessage(1, 'This is a test message!');

//echo '<pre>', print_r($chat->fetchMessages(), true), '</pre>';
?>

<!DOCTYPE html>
<html>
    <head>
      <title>AJAX chat</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="chat">
            <div class="messages"></div>
            <textarea class="entry" placeholder="Type here and hit Return. Use Shift + Return for a new line"></textarea>
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/chat.js"></script>
    </body>
</html>