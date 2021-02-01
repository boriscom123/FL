console.log('blank');

// Slider - Наши Видео - Блок-5
let videoSliderEl = document.getElementById('video-slider');
function videoSlider(el){
  console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    el.children[2].children[0].classList.add('d-none');
    el.children[2].children[2].classList.remove('d-none');
    el.children[2].append(el.children[2].children[0]);
    for (let i = 0; i < el.children[3].children.length; i++) {
      console.log(el.children[3].children.length);
      if(el.children[3].children[i].classList.contains('active')){
        console.log('EL: ', el.children[3].children[i]);
        el.children[3].children[i].classList.remove('active');
        if(i == (el.children[3].children.length - 1)){
          el.children[3].children[0].classList.add('active');
        } else {
          el.children[3].children[i+1].classList.add('active');
        }
        break;
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    el.children[2].children[1].classList.add('d-none');
    el.children[2].lastElementChild.classList.remove('d-none');
    el.children[2].prepend(el.children[2].lastElementChild);
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(el.children[3].children[i].classList.contains('active')){
        el.children[3].children[i].classList.remove('active');
        if(i == 0){
          el.children[3].children[el.children[3].children.length-1].classList.add('active');
        } else {
          el.children[3].children[i-1].classList.add('active');
        }
        break;
      }
    }
  }
}
videoSliderEl.addEventListener('click', function(){videoSlider(this);});

// Slider - Наши отзывы - Блок-7
let feedbackSliderEl = document.getElementById('feedback-slider');
function feedBackSlider(el){
  console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    el.children[2].children[0].classList.add('d-none');
    el.children[2].children[2].classList.remove('d-none');
    el.children[2].append(el.children[2].children[0]);
    for (let i = 0; i < el.children[3].children.length; i++) {
      console.log(el.children[3].children.length);
      if(el.children[3].children[i].classList.contains('active')){
        console.log('EL: ', el.children[3].children[i]);
        el.children[3].children[i].classList.remove('active');
        if(i == (el.children[3].children.length - 1)){
          el.children[3].children[0].classList.add('active');
        } else {
          el.children[3].children[i+1].classList.add('active');
        }
        break;
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    el.children[2].children[1].classList.add('d-none');
    el.children[2].lastElementChild.classList.remove('d-none');
    el.children[2].prepend(el.children[2].lastElementChild);
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(el.children[3].children[i].classList.contains('active')){
        el.children[3].children[i].classList.remove('active');
        if(i == 0){
          el.children[3].children[el.children[3].children.length-1].classList.add('active');
        } else {
          el.children[3].children[i-1].classList.add('active');
        }
        break;
      }
    }
  }
}
feedbackSliderEl.addEventListener('click', function(){feedBackSlider(this);});

// Slider - Примеры наших работ - Блок-8
let gallerySliderEl = document.getElementById('gallery-slider');
function gallerySlider(el){
  console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    el.children[2].children[0].classList.add('d-none');
    el.children[2].children[3].classList.remove('d-none');
    el.children[2].append(el.children[2].children[0]);
    for (let i = 0; i < el.children[3].children.length; i++) {
      console.log(el.children[3].children.length);
      if(el.children[3].children[i].classList.contains('active')){
        console.log('EL: ', el.children[3].children[i]);
        el.children[3].children[i].classList.remove('active');
        if(i == (el.children[3].children.length - 1)){
          el.children[3].children[0].classList.add('active');
        } else {
          el.children[3].children[i+1].classList.add('active');
        }
        break;
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    el.children[2].children[2].classList.add('d-none');
    el.children[2].lastElementChild.classList.remove('d-none');
    el.children[2].prepend(el.children[2].lastElementChild);
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(el.children[3].children[i].classList.contains('active')){
        el.children[3].children[i].classList.remove('active');
        if(i == 0){
          el.children[3].children[el.children[3].children.length-1].classList.add('active');
        } else {
          el.children[3].children[i-1].classList.add('active');
        }
        break;
      }
    }
  }
}
gallerySliderEl.addEventListener('click', function(){gallerySlider(this);});

// modals
let modalsEl = document.getElementsByClassName('modals');
let openFormButtonEl = document.getElementsByClassName('header-button');
let openInfoButtonEl = document.getElementsByClassName('show-modal-info');
let closeModalsEl = document.getElementsByClassName('close');
function openModalForm(el){
  console.log(modalsEl[0]);
  console.log(el);
  if(el.classList.contains('header-button')){
    modalsEl[0].classList.remove('d-none');
    modalsEl[0].classList.add('d-flex');
    modalsEl[0].children[3].classList.remove('d-none');
    modalsEl[0].children[3].classList.add('d-flex');
    // decoration
    modalsEl[0].children[0].classList.remove('d-none');
    modalsEl[0].children[0].classList.add('position-1-1');
    modalsEl[0].children[1].classList.remove('d-none');
    modalsEl[0].children[1].classList.add('position-2-1');
  }
  if(el.classList.contains('show-modal-info')){
    modalsEl[0].classList.remove('d-none');
    modalsEl[0].classList.add('d-flex');
    modalsEl[0].children[2].classList.remove('d-none');
    modalsEl[0].children[2].classList.add('d-flex');
    // decoration
    modalsEl[0].children[0].classList.remove('d-none');
    modalsEl[0].children[0].classList.add('position-1');
    modalsEl[0].children[1].classList.remove('d-none');
    modalsEl[0].children[1].classList.add('position-2');
  }
}
function hideAll(){
  modalsEl[0].classList.remove('d-flex');
  modalsEl[0].classList.add('d-none');
  for (let i = 0; i < modalsEl[0].children.length; i++) {
    modalsEl[0].children[i].classList.add('d-none');
    modalsEl[0].children[i].classList.remove('d-flex', 'position-1', 'position-1-1', 'position-1-2', 'position-2', 'position-2-1', 'position-22');
  }
}
function closeModals(el){
  if(event.target.classList.contains('close')) { hideAll(); }
  if(event.target.classList.contains('close-block')) { hideAll(); }
  if(event.target.classList.contains('close-text')) { hideAll(); }
  if(event.target.classList.contains('close-icon')) { hideAll(); }
  if(event.target.classList.contains('close-sigil')) { hideAll(); }
  if(event.target.classList.contains('modals')) { hideAll(); }
}
for (let i = 0; i < openFormButtonEl.length; i++) {
  openFormButtonEl[i].addEventListener('click', function(){openModalForm(this);});
}
for (let i = 0; i < openInfoButtonEl.length; i++) {
  openInfoButtonEl[i].addEventListener('click', function(){openModalForm(this);});
}
modalsEl[0].addEventListener('click', function(){closeModals(this);});
