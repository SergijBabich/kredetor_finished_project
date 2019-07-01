<?php
$Name =  strip_tags(trim($_POST ['Name']));
$mail =  strip_tags(trim($_POST ['mail']));
$phone =  strip_tags(trim($_POST ['phone']));
$Nie =  trim($_POST ['Nie']);
$error = 'Вы вваели не все данные, поэтому подобрали максимально лучшие предложения';
$Good = "На основании Вашей кредитной истории, Ваш подобрано максимально лучшие предложения";
 $error1;
if (mysqli_query($conn, $sql)) {
      echo "Операция прошла успешно, выполняется поиск лучшего предложения";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
