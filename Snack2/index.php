 <?php

$name = $_GET['name'];
var_dump($name);
echo '<br>';
$mail = $_GET['mail'];
var_dump($mail);
echo '<br>';
$age = $_GET['age'];
var_dump($age);
echo '<br>';

if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '.') && strpos($mail, '@') ) {
    echo 'Accesso riuscito';
} else {
    echo 'Accesso negato';
}

?> 
