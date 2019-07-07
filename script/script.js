menu.onclick = function myfunction() {
  var x = document.getElementById('myTopnav');
  if(x.className == "topnav"){

    x.className += " responsive";

  }  else {
    x.className = "topnav";
  }

    }

let coll = document.getElementsByClassName('collapsible');
for(let i=0; i <coll.length; i++)
{
 coll[i].addEventListener('click',function () {
   this.classList.toggle ('active');
  let content2 = this.nextElementSibling;
  if(content2.style.maxHeight){
    content2.style.maxHeight  = null;
  }   else{
    content2.style.maxHeight = content2.scrollHeight + 'px'  }
})

}
let coll2 = document.getElementsByClassName('leadsinput');
for(let i=0; i <coll2.length; i++)
{
 coll2[i].addEventListener('click',function () {
   this.classList.toggle ('activeclick');
  let advanteges_items = this.nextElementSibling;
  if(advanteges_items.style.maxHeight){
    advanteges_items.style.maxHeight  = null;
  }   else{
    advanteges_items.style.maxHeight = advanteges_items.scrollHeight + 'px'  }
})
}




function myFunction() {
   var Summ = parseInt(document.getElementById("myInput").value);
    var term = parseInt(document.getElementById("term").value);

 var percent  = 0.0001;
     var percentOnTerm = percent *  term * Summ ;
  var total =  Summ + percentOnTerm;
   percentOnTerm = percentOnTerm.toFixed(1);
       total = total.toFixed(1);
document.getElementById("totalSumm1").innerHTML = " Срок кредитования:  " + term+ "дней";
document.getElementById("totalterm").innerHTML = "  Сумма кредита:   " + Summ + "грн";
   document.getElementById("totalSumm").innerHTML = " Начислиные проценты  " + percentOnTerm+ "грн";
   document.getElementById("percentOfTerm").innerHTML = "  Полная сумма погашени " + total + "грн";
     }
     function Latin(obj) {
        if (/^[a-zA-Z0-9 ,.\-:"()]*?$/.test(obj.value))
           obj.defaultValue = obj.value ;
        else
           obj.value = obj.defaultValue;
     }
 function buttonClick (button){

 }
     function check(e,value){
     //Check Charater
         var unicode=e.charCode? e.charCode : e.keyCode;
         if (value.indexOf(".") != -1)if( unicode == 46 )return false;
         if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
     }
     function checkLength(){
     var fieldLength = document.getElementById('dei').value.length;
     //Suppose u want 4 number of character
     if(fieldLength <= 10){
         return true;
     }
     else
     {
         var str = document.getElementById('dei').value;
         str = str.substring(0, str.length - 1);
     document.getElementById('dei').value = str;
     }
     }
     function checkNumberLength(){
     var fieldLength = document.getElementById('number').value.length;
     //Suppose u want 4 number of character
     if(fieldLength <= 12){
         return true;
     }
     else
     {
         var str = document.getElementById('number').value;
         str = str.substring(0, str.length - 1);
     document.getElementById('number').value = str;
     }
     }




     function checkNumberLength1(){
     var fieldLength = document.getElementById('telephone').value.length;
     //Suppose u want 4 number of character
     if(fieldLength <= 12){
         return true;
     }
     else
     {
         var str = document.getElementById('telephone').value;
         str = str.substring(0, str.length - 1);
     document.getElementById('telephone').value = str;
     }
     }
