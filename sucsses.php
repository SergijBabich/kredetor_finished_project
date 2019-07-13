

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<style media="screen">
  .red1{
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 18px;
        -webkit-box-sizing: border-box;
    background-color: #3dcc61;
    padding: 5px;
    color: red;
  }
</style>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="leads.css">
  </head>
  <body >
    <div class="background">
  <header>

    <div class="logo">
      <a href = "creditor.php" class = "graficlogo" >
              <img src="images\logo3.png" class="logo_main" alt="">
    </a>
      <h1 class="textstle">  Кредиты онлайн на карту</h1>

    </div>
    <nav>
      <div class="topnav" id="myTopnav">
        <a href="creditor.php">ГЛАВНАЯ</a>
      <a href="immercompany.html">КОМПАНИИ</a>
      <a href="company.html">СОТРУДНИЧЕСТВО</a>
      <a href="calc.html">КАЛЬКУЛЯТОР</a>
      <a href="company.html">О НАС</a>
      <a href="leads.php" id="inn">ПРОВЕРКА КИ</a>
        <a id="menu" href="#" class="icon">&#9776;</a>

      </div>
    </nav>

</header>
<form method="post">
  <div class="text_name" id="Er">
  <span > </span>
  Исходя из заполненых полей, была проанализирована ваша Кредитная история и найдено найлучшие предложения
  </div>

</fonm>
<div class="container_reconect">
  <div class="advanteges_items">
    <div class="height-icon" >

  <img src="images/ccloan-ua-kv.jpg" alt="" class="mw-ccloan">
  </div>
  <div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
  <p>Первый кредит    до <font color="#ae18ff" ><b>4000 грн</b></font></p>
  <p>Срок   <font color="#ae18ff"><b>0-356 дней</b></font></p>
    <p>Одобрение     <font color="#ae18ff"><b>90%</b></font></p>
      <p> Возраст <font color="#ae18ff"><b>18-65 лет</b></font></p>
        <div class="relog"><a href="http://bit.ly/2Up8XmA"><p>Оформить </p></a></div>
  </div>

  <div class="advanteges_items">
  <div class="height-icon">
  <img src="images/ecash.jpg" alt="" class="mw-100">
  </div>
  <div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
  <p>Первый кредит    до <font color="#ae18ff"><b>4000 грн</b></font></p>
  <p>Срок   <font color="#ae18ff"><b>0-356 дней</b></font></p>
    <p>Одобрение     <font color="#ae18ff"><b>90%</b></font></p>
      <p> Возраст <font color="#ae18ff"><b>18-65 лет</b></font></p>
        <div class="relog"><a href="http://bit.ly/2DiDIUD"><p>Оформить </p></a></div>




  </div>

</div>



<footer>


  <nav>

        <a href="creditor.php">ГЛАВНАЯ</a>
      <a href="immercompany.html">КОМПАНИИ</a>
      <a href="company.html">СОТРУДНИЧЕСТВО</a>
      <a href="calc.html">КАЛЬКУЛЯТОР</a>
      <a href="company.html">О НАС</a>
   <a href="leads.php">ПРОВЕРКА КИ</a>
  </nav>

  <!-- <p> Контакты: -->
   <!-- Gmail amazingcsgo30@gmail.ru</p> -->
   <div class="contact">
     <div class="sity"> Киев, Украина </div>
      <div class="email_contact">Email:  creditorhelp24@gmail.com </div>
    <div class="facebook_contact">  Все права защищены  </div>

</footer>


 <script src="script/script.js" charset="utf-8"></script>
 <script src="script/ajax.js" charset="utf-8"></script>

</div>




  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  </body>
</html>
<?php
$servername = "localhost";
$database = "creditor";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

 if(isset($_POST['add']))
 {
$Name =  strip_tags(trim($_POST ['Name']));
$mail =  strip_tags(trim($_POST ['mail']));
$phone =  strip_tags(trim($_POST ['phone']));
$Nie =  trim($_POST ['Nie']);
$error = '';
 // проверки имени
  $sql = "INSERT INTO cred (Name, mail, phone, Nie) VALUES ('$Name', '$mail', '$phone','$Nie')";
}
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
/* NORMAL*/
//   $connect = mysqli_connect("localhost", "root", "" , "creditor");
//
//  // mysql_set_charset("utf8");
//  $connect ->query("SET NAMES 'utf8'");
//
//
//

//  $sacssec = $connect ->query ("INSERT INTO 'cred' (`Name`, `mail`, `phone`, `Nie`) VALUES ('$Name', '$mail', '$phone', '$Nie')");
// }
// $connect->close ();


?>
