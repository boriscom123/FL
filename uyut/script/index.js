console.log('blank');
// drop-menu
let checkboxEl = document.getElementById('drop-menu');
let menuButtonEl = document.getElementsByClassName('header-navigation');
function activeDDMenu(bool){
  if(checkboxEl.checked) {
    checkboxEl.checked = false;
  } else {
    checkboxEl.checked = true;
  }
}
menuButtonEl[0].addEventListener('click', function(){activeDDMenu(this);});
