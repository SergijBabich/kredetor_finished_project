
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="Creditor" content="online credit card">
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script>

</script>
<script type="text/javascript">
function AjaxFormRequest(result_id,formMain,url) {
jQuery.ajax({
url: url,
type: "POST",
dataType: "html",
data: jQuery("#"+formMain).serialize(),
success: function(response) {
// document.getElementById(result_id).innerHTML ="Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
},
error: function(response) {
document.getElementById(result_id).innerHTML = "Возникла ошибка при отправке формы. Попробуйте еще раз";
}
});

$(':input')
.not(':button, :submit, :reset, :hidden')
.val('')
.removeAttr('checked')
.removeAttr('selected');
}
(function( $ ){

$(function() {

  $('.rf').each(function(){
    var form = $(this),
      btn = form.find('.btn_submit');

    form.find('.rfield').addClass('empty_field');

    // Функция проверки полей формы
    function checkInput(){
      form.find('.rfield').each(function(){
        if($(this).val() != ''){
          $(this).removeClass('empty_field');
        } else {
          $(this).addClass('empty_field');
        }
      });
    }

    // Функция подсветки незаполненных полей
    function lightEmpty(){
      form.find('.empty_field').css({'border-color':'#d8512d'});
      setTimeout(function(){
        form.find('.empty_field').removeAttr('style');
      },500);
    }

    setInterval(function(){
      checkInput();
      var sizeEmpty = form.find('.empty_field').size();
      if(sizeEmpty > 0){
        if(btn.hasClass('disabled')){
          return false
        } else {
          btn.addClass('disabled')
        }
      } else {
        btn.removeClass('disabled')
      }
    },1000);

    btn.click(function(){
      var k =1;
      if($(this).hasClass('disabled')){
        lightEmpty();
          console.log(k);
        document.getElementById('messegeResult').innerHTML=('Все поля должны быть заполнены');

      } else {
        document.getElementById('messegeResult').innerHTML="Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
      }
    });

  });

});

})( jQuery );
</script>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>creditor</title>
    <link rel="stylesheet" href="style.css">
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
        <a href="creditor.php" class="hrefa">ГЛАВНАЯ</a>
      <a href="immercompany.html"class="hrefa">КОМПАНИИ</a>
      <a href="company.html"class="hrefa">СОТРУДНИЧЕСТВО</a>
      <a href="calc.html"class="hrefa">КАЛЬКУЛЯТОР</a>
      <a href="company.html" class="hrefa">О НАС</a>
      <a href="leads.php" id="inn" class="hrefa">ПРОВЕРКА КИ</a>


        <a id="menu" href="#" class="icon">&#9776;</a>

      </div>
    </nav>

</header>

<div class="boorstrap_grid">
  <div class="collback">
    <div id="zatemnenie">
      <div class="zatemnenie_okno">


       <div id="okno">
         <a href="#" class="close"> <img src="images/baseline_clear_black_18dp.png" class="close_line" alt=""> </a>
           <div id="messegeResult">Оставьте ваши контакты и наш консультант свяжется с вами </div>
         <div class="wrapper">
       <div class="form">


       <form method="post" action="" class="rf"    id="formMain">

             <input id="name" type="text" onkeyup="if(/[^a-zA-Zа-яА-ЯёЁ .]/i.test(this.value)){this.value='';}" class="leadsinput rfield" name="name" placeholder=" Введите ваше имя" maxlength="30" autocomplete="off" />
             <input id="telephone"   class="leadsinput rfield raz"   type="number"  onkeypress="return check(event,value)" oninput="checkNumberLength1()" autocomplete="off" name="telephone" placeholder=" Введите ваш телефон" maxlength="30" autocomplete="off"/>
             <input id="button" type="button"   class="leadsinput btn_submit disabled"   value="Заказать консультацию " onclick="AjaxFormRequest('messegeResult', 'formMain', 'creditor.php#zatemnenie')"/>
 <div id="result_id"></div>
       </form>
       </div>
       </div>




       </div>
             </div>
     </div>

       <a href="#zatemnenie" >   <img src="images/baseline_phone_black_18dp.png" class="phone" alt="">   </a>
  </div>
<main>
  <div class="advanteges_contanier">
    <div class="advanteges">
<div class="advanteges_items">
  <div class="height-icon" >

<img src="images/ccloan-ua-kv.jpg" alt="" class="mw-ccloan">
</div>
<div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
<p>Первый кредит    до <font color="#ae18ff" ><b>4000 грн</b></font></p>
<p>Срок   <font color="#ae18ff"><b>0-356 дней</b></font></p>
  <p>Одобрение     <font color="#ae18ff"><b>96%</b></font></p>
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
<div class="advanteges_items">
  <div class="height-icon">
<img src="images/moneyveo-ua-kv2.jpg" alt="" class="mw-100">
</div>
<div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
<p>Первый кредит    до <font color="#ae18ff" ><b>10000 грн</b></font></p>
<p>Срок   <font color="#ae18ff"><b>0-300 дней</b></font></p>
  <p>Одобрение     <font color="#ae18ff"><b>90%</b></font></p>
    <p> Возраст <font color="#ae18ff"><b>18-75 лет</b></font></p>
      <div class="relog"><a href="http://bit.ly/2IpMFQ4"><p>Оформить </p></a></div>




</div>
<div class="advanteges_items">
  <div class="height-icon">
<img src="images/forza-ua-kv.jpg" alt="" class="mw-forza">
</div>
<div class="novid"><p><font color="#ae18ff"><b>0.1%</font> Новым клиентам</b></p></div>
<p>Первый кредит    до <font color="#ae18ff" ><b>4000 грн</b></font></p>
<p>Срок   <font color="#ae18ff"<b>>15 дней</b></font></p>
  <p>Одобрение     <font color="#ae18ff"><b>80%</b></font></p>
    <p> Возраст <font color="#ae18ff"><b>18-65 лет</b></font></p>
      <div class="relog"><a href="http://bit.ly/2WTus1y"><p>Оформить </p></a></div>




</div>
<div class="advanteges_items">
  <div class="height-icon">
<img src="images/alex-ua-kv.jpg" alt="" class="mw-forza">
</div>
<div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
<p>Первый кредит    до <font color="#ae18ff" ><b>3000 грн</b></font></p>
<p>Срок   <font color="#ae18ff"><b>0-356 дней</b></font></p>
  <p>Одобрение     <font color="#ae18ff"><b>92%</b></font></p>
    <p> Возраст <font color="#ae18ff"><b>18-70 лет</b></font></p>
      <div class="relog"><a href="http://bit.ly/2V1VaqI"><p>Оформить </p></a></div>
</div>
<div class="advanteges_items">
  <div class="height-icon">
<img src="images/gofingo-ua-kv.jpg" alt="" class="mw-forza">
</div>
<div class="novid"><p><font color="#ae18ff"><b>0.01%</font> Новым клиентам</b></p></div>
<p>Первый кредит    до <font color="#ae18ff"><b>7000 грн</b></font></p>
<p>Срок   <font color="#ae18ff"><b>0-356 дней</b></font></p>
  <p>Одобрение     <font color="#ae18ff"><b>92%</b></font></p>
    <p> Возраст <font color="#ae18ff"><b>18-70 лет</b></font></p>
      <div class="relog"><a href="http://bit.ly/2KLcxrV"><p>Оформить </p></a></div>
</div>




    </div>
      </div>
      <div class="text_back">

          <div class="formreg3"><img src="images/news.png" alt="" class="mw-104">
            <p><b>Кредит в Интернете будет хорошим решение, если необходимы дополнительные средства. Сравни кредиторов, подай заявку на кредит и получи деньги на банковскую карту!</b></p><br></div>

      </div>
<div class="info_bar">
  <p>
  <h1>Условия получения:</h1><br>
  • Минимальный срок погашения кредита составляет 60 дней. Максимальный срок - 365 дней;<br>
  • Годовой процент за пользование кредитом - min 1%, max 31%.<br>
  • В случае нарушения сроков, размер неустойки составляет от 1% до 3% от тела кредита в день<br>
  • В случае длительной задержки выплаты информация будет передана в УБКИ.<br>
  • Продление кредита возможно при оплате процентов по кредиту, а так же  при оплате штрафных процентов, если они были. Дополнительных комиссий за продление кредита не предусмотрено.

  </p>


  <h1> Для успешного получения займа требуются</h1>
</div>
<div class="advanteges_verificidet">


  <div class="advanteges_site">


<div class="advanteges_icon">
<div alt="" class="mw-102"style=" background-image:url(images/bankcard.jpg)" ></div>

<p> Мобильный телефон и банковская карта</p>
<div class="content3">
<p>•	Для подтверждения данных о клиенте нужно иметь Паспорт и Идентификационный код, что бы проверить информацию  и возраст заемщика.
</p></div>
</div>

<div class="advanteges_icon">
<div alt="" class="mw-102" style=" background-image:url(images/passport.png)"></div>
<p> Паспотр и ИНН</p>

</div>

<div class="advanteges_icon">
<div alt="" class="mw-102" style=" background-image:url(images/email.png)"></div>
<p>Электронная почта</p>

</div>



</div>
</div>
<div class="content_uslovie">


<h1>Паспорт и ИНН</h1>
•Для подтверждения данных о клиенте нужно иметь Паспорт и Идентификационный код, что бы сверить и проверить информацию  и возраст заемщика.</br>

•	Карта должна быть открытой для расчетов в Интернете, а положительный баланс на ней должен составлять не менее 1-2 грн. Обратите внимание, ваш мобильный телефон и банковская карта должны быть под рукой, они будут необходимы при подаче заявки.</br>
<h1>Мобильный телефон и банковская карта</h1>
Для получения денежных средств по кредитному договору нужно иметь банковскую карту с положительным балансом на счёту (от 2 грн). Мобильный телефон нужен для подачи заявки и подтверждения данных. Обратите внимание, ваш мобильный телефон и банковская карта должны быть под рукой, они будут необходимы при подаче заявки.


<h1>Электронная почта</h1>
Почту нужно иметь для подтверждения данных и просмотра актуальной информации о кредите. Так же после заключения договора, копия высылается вам на почту.
<h2>Информация о полной стоимости кредита и пример расчета</h2>

Если вы взяли кредит на сумму 1000 гривен на 30 дней с процентной ставкой 0,01% в день, то плата за пользование средствами составит 0,01% в день, т.е. 10 копеек в день. Получается вы возвращаете сумму процентов
равную 3грн т.е 1000грн*0.01%*30 дней. Для полного погашения кредита надо заплатить 1003грн.

Пример №2. Если вы берете кредит на сумму 2000грн на 60 дней с процентной ставкой 0.01% в день, то процент за пользование кредитом составит 12грн  т.е 2000*0.01%*60. Для полного погашения кредита надо заплатить 2012грн.
На сайте есть кредитный калькулятор, с его помощью Вы сможете узнать детальную информацию по вашему кредиту.

</h2>
</div>
<div class="collapsible"> <p>Условия кредитования</p></div>
  <div class="content2">
<p>•	Первый кредит можно получить в размере от 500 грн до 100 000 грн, если своевременно будет осуществлена выплата кредита. Кредиторы предлагают разные периоды выплаты со скидкой - 100% от комиссионной платы за кредит, больше информации на домашней странице каждого кредитора.</br>
•	В первый раз подавая заявку на кредит в Интернете, необходимо зарегистрироваться и заемщик соглашается с условиями выдачи кредита.<br>
•	Кредитор, получив заявку на кредит, рассматривает ее и в случае получения позитивного ответа, перечисляет деньги на банковскую карту. Деньги можно получить в среднем в течение от 15 до 30 минут, после подачи заявки на кредит.<br>
•	Занимая повторно заемщику необходимо только выбрать денежную сумму и срок выплаты.
</p></div>
<div class="collapsible"> <p>Кредит в Интернете не будет приемлем, если</p></div>
  <div class="content2">
<p>•	Цель получения кредита, оплата других кредитных обязательств.<br>
•	Если планируется покупка, которая не соответствует Твоему финансовому положению.<br>
•	Если точно знаешь, что не сможешь выплатить кредит в указанный срок.

</p></div>
<div class="collapsible"> <p>Что такое безпроцентный кредит</p></div>
  <div class="content2">
<p>Безпроцентный денежный кредит это конда кредитор не взымает плату за использование<br>
   кредита. Заемщик выплачивает, по окончанию срока или раньше, ту сумму кредита,<br>
    которую он взял изначально. При этом не нужно оплачивать комиссию. <br>
    Такую услугу предоставляют большинство кредитных компаний новым клиентам.<br>
  Пример, занимая 500 грн, по окончанию срока кредитования надо отдать 500грн.
</p></div>
<div class="collapsible"> <p>Что такое кредит с 18 лет</p></div>
  <div class="content2">
<p>Кредит с 18 лет выдается лицам достигшим возраста 18 лет.<br>
  (Некоторые компании предоставляют свои услуги только с 20 лет).

</p></div>
<div class="collapsible"> <p>Как быстро получить решение</p></div>
  <div class="content2">
<p>Решение о предоставлении кредита принимается в течении <br>
   нескольких минут, в загруженые дни бывают задержки до 30 минут.
</p></div>
<div class="collapsible"> <p>Какая максимальная сумма кредита</p></div>
  <div class="content2">
<p>Для каждого клиента кредитор устанавливает кредитный лимит индивидуально. <br>

</p></div>
<div class="collapsible"> <p>Можно выплатить кредит раньше</p></div>
  <div class="content2">
<p>Да. Кредит можно выплатить в любой момент.

</p></div>
<div class="lizense">
 Страница <a href="creditor.php">  Creditor.com.ua</a> не является кредитором, компании, которые были приведены к сравнению, имеют допуск и лицензию кредитного учреждения.

</div>
</main>
<h1 class="opportunity">Вы можете взять кредит в любом регионе</h1>
<div class="linear_ground">

</div>
 <div class="city">
    <a href="#" class="city_borough">Киев</a>
      <a href="#" class="city_borough">Харьков</a>
        <a href="#" class="city_borough">Одесса</a>
          <a href="#" class="city_borough">Днепропетровск</a>
            <a href="#" class="city_borough">Запорожье</a>
              <a href="#" class="city_borough">Львов</a>
                <a href="#" class="city_borough">Кривой Рог</a>
                  <a href="#" class="city_borough">Николаев</a>
                    <a href="#" class="city_borough">Мариуполь</a>
                      <a href="#" class="city_borough">Винница</a>
                        <a href="#" class="city_borough">Херсон</a>
                          <a href="#" class="city_borough">Полтава</a>
                            <a href="#" class="city_borough">Сумы</a>
                              <a href="#" class="city_borough">	Чернигов</a>
                                <a href="#" class="city_borough">Черкассы</a>
                                  <a href="#" class="city_borough">	Хмельницкий</a>
                                    <a href="#" class="city_borough">Житомир</a>
                                      <a href="#" class="city_borough">		Тернополь</a>
                                        <a href="#" class="city_borough">	Кировоград</a>



 </div>
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




</div>
<script src="script/script.js" charset="utf-8"></script>
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

if($_POST)
    {
      $Name =  strip_tags(trim($_POST ['name']));
      $phone =  strip_tags(trim($_POST ['telephone']));

    }


if( $Name=='' || $phone=='')
{
    echo "все поля должны быть заполнены";
}
else{
  $sql = "INSERT INTO contactcentre(name, telephone) VALUES ('$Name', '$phone')";
    echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи или вернуться на сайт";
}
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
