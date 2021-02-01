console.log('blank');

// Slider - Наши Видео - Блок-5
let videoSliderEl = document.getElementById('video-slider');
function videoSlider(el){
  // console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          if(i == el.children[3].children.length - 1){
            // console.log('Последний элемент');
            el.children[3].children[0].classList.add('active');
            el.children[2].children[0].style.display = 'flex';
            break;
          } else {
            // console.log('Не Последний элемент');
            el.children[3].children[i+1].classList.add('active');
            el.children[2].children[i+1].style.display = 'flex';
            break;
          }
        }
      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          el.children[2].children[i+1].style.display = 'none';
          if(i == el.children[3].children.length - 2){
            // console.log('2 Последних элемента');
            el.children[3].children[0].classList.add('active');
            el.children[2].children[0].style.display = 'flex';
            el.children[2].children[1].style.display = 'flex';
            break;
          } else {
            // console.log('Не Последний элемент');
            el.children[3].children[i+1].classList.add('active');
            el.children[2].children[i+1].style.display = 'flex';
            el.children[2].children[i+2].style.display = 'flex';
            break;
          }
        }
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          if(i == 0){
            //console.log('Первый элемент');
            el.children[3].children[el.children[3].children.length-1].classList.add('active');
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            break;
          } else {
            //console.log('Не Первый элемент');
            el.children[3].children[i-1].classList.add('active');
            el.children[2].children[i-1].style.display = 'flex';
            break;
          }
        }
      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          el.children[2].children[i+1].style.display = 'none';
          if(i == 0){
            // console.log('2 Первых элемента');
            el.children[3].children[el.children[3].children.length-2].classList.add('active');
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            el.children[2].children[el.children[3].children.length-2].style.display = 'flex';
            break;
          } else {
            // console.log('Не Первые элемент');
            el.children[3].children[i-1].classList.add('active');
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
            break;
          }
        }
      }
    }
  }
  if(event.target.classList.contains('item')) {
    // console.log('Элемент пагинации');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i] == event.target){
          if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
          el.children[2].children[i].style.display = 'flex';
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i] == event.target){
          if(i == el.children[3].children.length-1){
            // console.log('Последний');
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i-1].classList.add('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
          } else {
            // console.log('Не Последний');
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i+1].style.display = 'flex';
            i++;
          }
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
      }
    }
  }
}
videoSliderEl.addEventListener('click', function(){videoSlider(this);});

// Slider - Наши отзывы - Блок-7
let feedbackSliderEl = document.getElementById('feedback-slider');
function feedBackSlider(el){
  // console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          if(i == el.children[3].children.length - 1){
            // console.log('Последний элемент');
            el.children[3].children[0].classList.add('active');
            el.children[2].children[0].style.display = 'flex';
            break;
          } else {
            // console.log('Не Последний элемент');
            el.children[3].children[i+1].classList.add('active');
            el.children[2].children[i+1].style.display = 'flex';
            break;
          }
        }

      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          el.children[2].children[i+1].style.display = 'none';
          if(i == el.children[3].children.length - 2){
            // console.log('2 Последних элемента');
            el.children[3].children[0].classList.add('active');
            el.children[2].children[0].style.display = 'flex';
            el.children[2].children[1].style.display = 'flex';
            break;
          } else {
            // console.log('Не Последний элемент');
            el.children[3].children[i+1].classList.add('active');
            el.children[2].children[i+1].style.display = 'flex';
            el.children[2].children[i+2].style.display = 'flex';
            break;
          }
        }
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          if(i == 0){
            //console.log('Первый элемент');
            el.children[3].children[el.children[3].children.length-1].classList.add('active');
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            break;
          } else {
            //console.log('Не Первый элемент');
            el.children[3].children[i-1].classList.add('active');
            el.children[2].children[i-1].style.display = 'flex';
            break;
          }
        }
      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i].classList.contains('active')){
          el.children[3].children[i].classList.remove('active');
          el.children[2].children[i].style.display = 'none';
          el.children[2].children[i+1].style.display = 'none';
          if(i == 0){
            // console.log('2 Первых элемента');
            el.children[3].children[el.children[3].children.length-2].classList.add('active');
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            el.children[2].children[el.children[3].children.length-2].style.display = 'flex';
            break;
          } else {
            // console.log('Не Первые элемент');
            el.children[3].children[i-1].classList.add('active');
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
            break;
          }
        }
      }
    }
  }
  if(event.target.classList.contains('item')) {
    // console.log('Элемент пагинации');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        // console.log('1 элемент');
        if(el.children[3].children[i] == event.target){
          if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
          el.children[2].children[i].style.display = 'flex';
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
      } else {
        // console.log('2 элемента');
        if(el.children[3].children[i] == event.target){
          if(i == el.children[3].children.length-1){
            // console.log('Последний');
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i-1].classList.add('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
          } else {
            // console.log('Не Последний');
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i+1].style.display = 'flex';
            i++;
          }
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
      }
    }
  }
}
feedbackSliderEl.addEventListener('click', function(){feedBackSlider(this);});

// Slider - Примеры наших работ - Блок-8
let gallerySliderEl = document.getElementById('gallery-slider');
function gallerySlider(el){
  // console.log(el);
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('left');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        if(el.children[3].children[i].classList.contains('active')){
          if(i == el.children[3].children.length - 1){
            el.children[3].children[i].classList.remove('active');
            el.children[3].children[0].classList.add('active');
            el.children[2].children[i].style.display = 'none';
            el.children[2].children[0].style.display = 'flex';
          } else {
            el.children[3].children[i].classList.remove('active');
            el.children[3].children[i+1].classList.add('active');
            el.children[2].children[i].style.display = 'none';
            el.children[2].children[i+1].style.display = 'flex';
            i++;
          }
        } else {
          // console.log('Элемент Не совпал', i);
        }
      } else {
        if(el.children[3].children[i].classList.contains('active')){
          if(i == el.children[3].children.length - 1){
            if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
            if(!el.children[3].children[0].classList.contains('active')){el.children[3].children[0].classList.add('active');}
            el.children[2].children[i].style.display = 'none';
            el.children[2].children[i-1].style.display = 'none';
            el.children[2].children[i-2].style.display = 'none';
            el.children[2].children[0].style.display = 'flex';
            el.children[2].children[1].style.display = 'flex';
            el.children[2].children[2].style.display = 'flex';
          } else {
            if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
            if(!el.children[3].children[i+1].classList.contains('active')){el.children[3].children[i+1].classList.add('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i+1].style.display = 'flex';
            if(i > 0 && i < el.children[3].children.length - 2){
              el.children[2].children[i-1].style.display = 'none';
              el.children[2].children[i+2].style.display = 'flex';
            }
            i++;
          }
        } else {
            // console.log('Элемент Не совпал', i);
        }
      }
    }
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    // console.log('right');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        if(el.children[3].children[i].classList.contains('active')){
          if(i == 0){
            el.children[3].children[i].classList.remove('active');
            el.children[3].children[el.children[3].children.length-1].classList.add('active');
            el.children[2].children[i].style.display = 'none';
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            break;
          } else {
            el.children[3].children[i].classList.remove('active');
            el.children[3].children[i-1].classList.add('active');
            el.children[2].children[i].style.display = 'none';
            el.children[2].children[i-1].style.display = 'flex';
          }
        } else {
          // console.log('Элемент Не совпал', i);
        }
      } else {
        if(el.children[3].children[i].classList.contains('active')){
          if(i == 0){
            if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
            if(!el.children[3].children[el.children[3].children.length-1].classList.contains('active')){el.children[3].children[el.children[3].children.length-1].classList.add('active');}
            el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
            el.children[2].children[el.children[3].children.length-2].style.display = 'flex';
            el.children[2].children[el.children[3].children.length-3].style.display = 'flex';
            el.children[2].children[0].style.display = 'none';
            el.children[2].children[1].style.display = 'none';
            el.children[2].children[2].style.display = 'none';
            break;
          } else {
            if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
            if(!el.children[3].children[i-1].classList.contains('active')){el.children[3].children[i-1].classList.add('active');}
            el.children[2].children[i-1].style.display = 'flex';
            if(i > 1) {
              el.children[2].children[i-2].style.display = 'flex';
            }
            if(i != el.children[3].children.length-1 && i > 1){
              el.children[2].children[i+1].style.display = 'none';
            }
          }
        }
      }
    }
  }
  if(event.target.classList.contains('item')) {
    // console.log('Пагинация');
    for (let i = 0; i < el.children[3].children.length; i++) {
      if(window.innerWidth < 700){
        if(el.children[3].children[i] == event.target){
          if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
          el.children[2].children[i].style.display = 'flex';
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
      } else {
        if(el.children[3].children[i] == event.target){
          if(i == 0){
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
            if(el.children[3].children[i+1].classList.contains('active')){el.children[3].children[i+1].classList.remove('active');}
            if(el.children[3].children[i+2].classList.contains('active')){el.children[3].children[i+2].classList.remove('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i+1].style.display = 'flex';
            el.children[2].children[i+2].style.display = 'flex';
            i++;
            i++;
          } else if (i == el.children[3].children.length - 1){
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
            if(el.children[3].children[i-1].classList.contains('active')){el.children[3].children[i-1].classList.remove('active');}
            if(el.children[3].children[i-2].classList.contains('active')){el.children[3].children[i-2].classList.remove('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
            el.children[2].children[i-2].style.display = 'flex';
          } else {
            if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
            if(el.children[3].children[i-1].classList.contains('active')){el.children[3].children[i-1].classList.remove('active');}
            if(el.children[3].children[i+1].classList.contains('active')){el.children[3].children[i+1].classList.remove('active');}
            el.children[2].children[i].style.display = 'flex';
            el.children[2].children[i-1].style.display = 'flex';
            el.children[2].children[i+1].style.display = 'flex';
            i++;
          }
        } else {
          if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
          el.children[2].children[i].style.display = 'none';
        }
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
  console.log('Элемент: ', el);
  console.log('EVENT: ', event);
  console.log('TARGET: ', event.target);
  if(event.target.tagName == 'BUTTON'){
    event.preventDefault();
    let buttonEl = event.target;
    console.log('Нажали на кнопку');
    // подготавливаем запрос
    // проверяем чекбокс пользовательского соглашения
    // console.log('Чекбокс:', buttonEl.nextElementSibling.children[0]);
    if(buttonEl.nextElementSibling.children[0].checked){
      // console.log('Отмечен');
      // берем значения из полей Имени и Телефона
      let name = buttonEl.previousElementSibling.previousElementSibling.value;
      let tel = buttonEl.previousElementSibling.value;
      if(name.length > 1 && tel.length > 10){
        let info = 'Форма в шапке / футере';
        // Если все есть - отправляем запрос
        let url = 'http://prebor.ru/ajax/ajax.php';
        let formData = new FormData();
        formData.set('name', name);
        formData.set('tel', tel);
        formData.set('info', info);
        fetch(url, {
          method: 'POST',
          // headers: { 'Content-Type': 'text/plain;charset=utf-8' },
          body: formData
        }).then(response => response.text()).then((response)=>{console.log(response);});
      } else {
        console.log('Заполните пустые поля');
        console.log(name.length);
        console.log(tel.length);
      }
    } else {
      console.log('Примите пользовательское соглашение');
    }
  }
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

// Воспроизведение Видео
function startVideo(el){
  console.log('Запускаем видео под кнопкой');
  console.log('Элемент: ', el);
  console.log('Элемент с видео: ', el.parentNode.children[0].children[0]);
  // скрываем кнопку
  el.classList.add('d-none');
  // запускаем воспроизведение
  el.parentNode.children[0].children[0].play();
}
let playButtonEl = document.getElementsByClassName('play');
for (let i = 0; i < playButtonEl.length; i++) {
  playButtonEl[i].addEventListener('click', function(){startVideo(this);});
}
