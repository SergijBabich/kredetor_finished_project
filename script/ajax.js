
function Onclock (submit){
var name1 = document.getElementById('names').value;
var mails1 = document.getElementById('mails').value;
var number1 = document.getElementById('number').value;
var dei1 = document.getElementById('dei').value;
console.log(name1);
if (name1==""|| mails1==""||number1==""|| dei1=="" )
{
  document.getElementById('Er').innerText   == "плохо";
}
else{
  document.getElementById('God').innerText   == "хороршо";
}
}
