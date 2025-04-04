<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["textarea"])) {
  $text = $_POST["textarea"];

  $pattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
  $matches = [];

  $emailCount = preg_match_all($pattern, $text, $matches);

  echo "<p>Количество email-адресов: " . $emailCount . "</p>";
}
