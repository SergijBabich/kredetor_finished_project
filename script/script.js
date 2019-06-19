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
let coll2 = document.getElementsByClassName('mw-102');
for(let i=0; i <coll2.length; i++)
{
 coll2[i].addEventListener('click',function () {
   this.classList.toggle ('active');
  let content3 = this.nextElementSibling;
  if(content3.style.maxHeight){
    content3.style.maxHeight  = null;
  }   else{
    content3.style.maxHeight = content3.scrollHeight + 'px'  }



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
