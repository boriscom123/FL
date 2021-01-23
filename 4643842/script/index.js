let summEl = document.getElementById('summ');
let daysEl = document.getElementById('days');
let buttonEl = document.getElementById('calculate');
let infoEl = document.getElementById('info');
function changeRate(){
  if (daysEl.value < 12) {
    return 0.1;
  } else {
      return 0.11;
  }
}
function calcLoan(){
  let x = +(summEl.value);
  let y = +(daysEl.value);
  let z = changeRate();
  let percent = Math.round(summEl.value / daysEl.value * z);
  let maxPercents = 0;
  for(let i = 1; i<=y; i++){
    if(i<4){
      let summByDays = Math.round(x/y*i);
      let currentRate = Math.round(x/3*z);
      maxPercents += currentRate;
    } else {
      let summByDays = Math.round(x/y*(i-1));
      let currentRate = Math.round((x - summByDays)/ (y-i+1) * z);
      maxPercents += currentRate;
    }
  }
  let now = new Date();
  let deadline = new Date(now.getTime() + (y * 60*60*24*1000));
  let day, month, year = 0;
  if(deadline.getDate() < 10){
    day = '0'+ deadline.getDate();
  } else {
    day = deadline.getDate();
  }
  if(deadline.getMonth() < 9){
    month = '0'+ (deadline.getMonth()+1);
  } else {
    month = deadline.getMonth()+1;
  }
  let total = 0;
  let final = maxPercents + x;
  infoEl.children[0].children[1].innerHTML = Math.round((maxPercents/y)) + '<i class="fas fa-ruble-sign"></i>';
  infoEl.children[1].children[1].innerHTML = day + '.' + month + '.' + deadline.getFullYear();
  infoEl.children[2].children[1].innerHTML = final + '<i class="fas fa-ruble-sign"></i>';
}
function changeSumm(){
  summEl.parentNode.previousElementSibling.children[1].innerHTML = summEl.value.substring(0, summEl.value.length - 3)+ ' ' +summEl.value.substring(summEl.value.length - 3)+'<i class="fas fa-ruble-sign"></i>';
  calcLoan();
}
function changeDay(){
  daysEl.parentNode.previousElementSibling.children[1].innerHTML = daysEl.value+'<span>дня</span>';
  calcLoan();
}
buttonEl.addEventListener('click', calcLoan);
summEl.addEventListener('input', changeSumm);
daysEl.addEventListener('input', changeDay);
document.addEventListener('DOMContentLoaded', changeSumm);
document.addEventListener('DOMContentLoaded', changeDay);
