
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
      <a href = "index.html" class = "graficlogo" >
              <img src="images\logo3.png" class="logo_main" alt="">
    </a>
      <h1 class="textstle">  Кредиты онлайн на карту</h1>

    </div>
    <nav>
      <div class="topnav" id="myTopnav">
        <a href="index.html">ГЛАВНАЯ</a>
      <a href="immercompany.html">КОМПАНИИ</a>
      <a href="company.html">СОТРУДНИЧЕСТВО</a>
      <a href="calc.html">КАЛЬКУЛЯТОР</a>
      <a href="company.html">О НАС</a>
      <a href="leads.php" id="inn">ПРОВЕРКА КИ</a>
        <a id="menu" href="#" class="icon">&#9776;</a>

      </div>
    </nav>

</header>
 <div class="container">
   <form method="post" type="text" class="ajax-contact-form"  name="test" id="form" action="leads.php" >
  *Ввелите ваше имя и фамилию
  <input  class="leadsinput" onKeyUp="if(/[^a-zA-Zа-яА-ЯёЁ .]/i.test(this.value)){this.value='';}" autocomplete="off" name="Name" value ="" placeholder=" Иван Иванов">
  <span id="DeiErr"></span>
  *Введите вашу почту
  <input type="text" class="leadsinput" autocomplete="off" name="mail" value ="" placeholder=" example@gmail.com">
  *Введите ваш номер телефона
  <input type="number" id="number" class="leadsinput raz" onKeyPress="return check(event,value)" onInput="checkNumberLength()"  autocomplete="off" name="phone" value=""placeholder=" 380XXXXXXXXX">
  *Введите ваш ИНН ()
   <input type="number" id="dei" onKeyPress="return check(event,value)"  onInput="checkLength()"  class="leadsinput raz"  autocomplete="off" name="Nie" value="" placeholder=" 3194357753">
  <input type="submit"   class="leadsinput"name ="add" value = "Подобрать найлучшее предложение" onclick="location='http://parsers.info';"/>
  </form>


 </div>



<footer>


  <nav>

        <a href="index.html">ГЛАВНАЯ</a>
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
      <div class="email_contact">Email:  amazingcsgo30@gmail.com </div>
    <div class="facebook_contact">  Все права защищены  </div>

</footer>


 <script src="script/script.js" charset="utf-8"></script>
 <script src="script/ajax.js" charset="utf-8"></script>

</div>

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
if(!$Name)
{
  echo "string";
$error .= 'Пожалуйста введите ваше имя<br />';
}

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


  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  </body>
</html>
