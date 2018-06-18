<?php
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text = $_POST["text"];
  $email = $_POST["email"];
  
  $name = htmlspecialchars($name);
  $text = htmlspecialchars($text);
  $email = htmlspecialchars($email);
  $mysqli = new mysqli("localhost", "root", "", "db");// Вот тут базу переделать возможно надо будет
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text`, `email`) VALUES ('$name', '$page_id', '$text', '$email')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>