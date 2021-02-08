console.log('blank');

// AJAX отправка формы
function postData(el){
  // console.log('Перешли по нажатию на кнопку');
  // console.log('EL: ', el);
  event.preventDefault();
  // подготавливаем запрос
  // берем значения из полей info, Имени и Телефона
  let info = el.previousElementSibling.previousElementSibling.previousElementSibling.value;
  let name = el.previousElementSibling.previousElementSibling.value;
  let tel = el.previousElementSibling.value;
  let send = {};
  // проверяем чекбокс пользовательского соглашения
  if(!el.nextElementSibling.children[0].checked){
    console.log('Примите пользовательское соглашение');
    send.checkbox = false;
  } else { send.checkbox = true; }
  if(name.length < 2){
    console.log('Заполните поле Имя');
    send.name = false;
  } else { send.name = true; }
  if(tel.length < 10){
    console.log('Заполните поле Телефон');
    send.tel = false;
  } else { send.tel = true; }
  if(send.checkbox && send.name && send.tel){
    // Если все есть - отправляем запрос
    let url = 'http://villaraid.ru/wp-content/themes/villaraid/assets/ajax/ajax.php';
    let formData = new FormData();
    formData.set('name', name);
    formData.set('tel', tel);
    formData.set('info', info);
    // console.log('Запрос для отправки: name=', name, ' tel=', tel, ' info=', info);
    fetch(url, {
      method: 'POST',
      // headers: { 'Content-Type': 'text/plain;charset=utf-8' },
      body: formData
    }).then(response => response.text()).then((response)=>{
      // console.log(response);
      if(response=='ok'){
        hideAll();
        let infoEl = document.createElement('div');
        infoEl.classList.add('info');
        openModalForm(infoEl);
        setTimeout(()=>hideAll(), 3000);
      }
    });
  }
}

// Slider - Наши Видео - Блок-5
// let videoSliderEl = document.getElementById('video-slider');
// function videoSlider(el){
//   // console.log(el);
//   if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
//     // console.log('left');
//     for (let i = 0; i < el.children[3].children.length; i++) {
//       if(window.innerWidth < 700){
//         // console.log('1 элемент');
//         if(el.children[3].children[i].classList.contains('active')){
//           el.children[3].children[i].classList.remove('active');
//           el.children[2].children[i].style.display = 'none';
//           if(i == el.children[3].children.length - 1){
//             // console.log('Последний элемент');
//             el.children[3].children[0].classList.add('active');
//             el.children[2].children[0].style.display = 'flex';
//             break;
//           } else {
//             // console.log('Не Последний элемент');
//             el.children[3].children[i+1].classList.add('active');
//             el.children[2].children[i+1].style.display = 'flex';
//             break;
//           }
//         }
//       } else {
//         // console.log('2 элемента');
//         if(el.children[3].children[i].classList.contains('active')){
//           el.children[3].children[i].classList.remove('active');
//           el.children[2].children[i].style.display = 'none';
//           el.children[2].children[i+1].style.display = 'none';
//           if(i == el.children[3].children.length - 2){
//             // console.log('2 Последних элемента');
//             el.children[3].children[0].classList.add('active');
//             el.children[2].children[0].style.display = 'flex';
//             el.children[2].children[1].style.display = 'flex';
//             break;
//           } else {
//             // console.log('Не Последний элемент');
//             el.children[3].children[i+1].classList.add('active');
//             el.children[2].children[i+1].style.display = 'flex';
//             el.children[2].children[i+2].style.display = 'flex';
//             break;
//           }
//         }
//       }
//     }
//   }
//   if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
//     // console.log('right');
//     for (let i = 0; i < el.children[3].children.length; i++) {
//       if(window.innerWidth < 700){
//         // console.log('1 элемент');
//         if(el.children[3].children[i].classList.contains('active')){
//           el.children[3].children[i].classList.remove('active');
//           el.children[2].children[i].style.display = 'none';
//           if(i == 0){
//             //console.log('Первый элемент');
//             el.children[3].children[el.children[3].children.length-1].classList.add('active');
//             el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
//             break;
//           } else {
//             //console.log('Не Первый элемент');
//             el.children[3].children[i-1].classList.add('active');
//             el.children[2].children[i-1].style.display = 'flex';
//             break;
//           }
//         }
//       } else {
//         // console.log('2 элемента');
//         if(el.children[3].children[i].classList.contains('active')){
//           el.children[3].children[i].classList.remove('active');
//           el.children[2].children[i].style.display = 'none';
//           el.children[2].children[i+1].style.display = 'none';
//           if(i == 0){
//             // console.log('2 Первых элемента');
//             el.children[3].children[el.children[3].children.length-2].classList.add('active');
//             el.children[2].children[el.children[3].children.length-1].style.display = 'flex';
//             el.children[2].children[el.children[3].children.length-2].style.display = 'flex';
//             break;
//           } else {
//             // console.log('Не Первые элемент');
//             el.children[3].children[i-1].classList.add('active');
//             el.children[2].children[i].style.display = 'flex';
//             el.children[2].children[i-1].style.display = 'flex';
//             break;
//           }
//         }
//       }
//     }
//   }
//   if(event.target.classList.contains('item')) {
//     // console.log('Элемент пагинации');
//     for (let i = 0; i < el.children[3].children.length; i++) {
//       if(window.innerWidth < 700){
//         // console.log('1 элемент');
//         if(el.children[3].children[i] == event.target){
//           if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
//           el.children[2].children[i].style.display = 'flex';
//         } else {
//           if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
//           el.children[2].children[i].style.display = 'none';
//         }
//       } else {
//         // console.log('2 элемента');
//         if(el.children[3].children[i] == event.target){
//           if(i == el.children[3].children.length-1){
//             // console.log('Последний');
//             if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i-1].classList.add('active');}
//             el.children[2].children[i].style.display = 'flex';
//             el.children[2].children[i-1].style.display = 'flex';
//           } else {
//             // console.log('Не Последний');
//             if(!el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.add('active');}
//             el.children[2].children[i].style.display = 'flex';
//             el.children[2].children[i+1].style.display = 'flex';
//             i++;
//           }
//         } else {
//           if(el.children[3].children[i].classList.contains('active')){el.children[3].children[i].classList.remove('active');}
//           el.children[2].children[i].style.display = 'none';
//         }
//       }
//     }
//   }
// }
// videoSliderEl.addEventListener('click', function(){videoSlider(this);});

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
let sendFormButtonEl = document.getElementsByClassName('send-form');
let openInfoButtonEl = document.getElementsByClassName('show-modal-info');
let openVideoButtonEl = document.getElementsByClassName('card-9-link');
let closeModalsEl = document.getElementsByClassName('close');
function openModalForm(el){
  // console.log(modalsEl[0]);
  // console.log(el);
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
    // необходимо добавить текст
    let text = el.nextElementSibling.innerHTML;
    let textField = modalsEl[0].children[2].children[1];
    textField.innerHTML = '';
    textField.innerHTML = text;
    // decoration
    modalsEl[0].children[0].classList.remove('d-none');
    modalsEl[0].children[0].classList.add('position-1');
    modalsEl[0].children[1].classList.remove('d-none');
    modalsEl[0].children[1].classList.add('position-2');
  }
  if(el.classList.contains('info')){
    modalsEl[0].classList.remove('d-none');
    modalsEl[0].classList.add('d-flex');
    modalsEl[0].children[4].classList.remove('d-none');
    modalsEl[0].children[4].classList.add('d-flex');
    // decoration
    modalsEl[0].children[0].classList.remove('d-none');
    modalsEl[0].children[0].classList.add('position-1-2');
    modalsEl[0].children[1].classList.remove('d-none');
    modalsEl[0].children[1].classList.add('position-2-2');
  }
  if(el.classList.contains('card-9-link')){
    // console.log('Показываем видео');
    modalsEl[0].classList.remove('d-none');
    modalsEl[0].classList.add('d-flex');
    modalsEl[0].children[5].classList.remove('d-none');
    modalsEl[0].children[5].classList.add('d-flex');
    // запустить видео
    // запускаем воспроизведение
    modalsEl[0].children[5].children[1].children[0].play();
  }
}
function hideAll(){
  modalsEl[0].classList.remove('d-flex');
  modalsEl[0].classList.add('d-none');
  for (let i = 0; i < modalsEl[0].children.length; i++) {
    modalsEl[0].children[i].classList.add('d-none');
    modalsEl[0].children[i].classList.remove('d-flex', 'position-1', 'position-1-1', 'position-1-2', 'position-2', 'position-2-1', 'position-22');
    if(i == 5){
      // останавливаем воспроизведение
      modalsEl[0].children[i].children[1].children[0].pause();
    }
  }
}
function closeModals(el){
  // console.log('Элемент: ', el);
  // console.log('EVENT: ', event);
  // console.log('TARGET: ', event.target);
  if(event.target.tagName == 'BUTTON'){
    postData(event.target);
  }
  if(event.target.classList.contains('close')) { hideAll(); }
  if(event.target.classList.contains('close-block')) { hideAll(); }
  if(event.target.classList.contains('close-text')) { hideAll(); }
  if(event.target.classList.contains('close-icon')) { hideAll(); }
  if(event.target.classList.contains('close-image')) { hideAll(); }
  if(event.target.classList.contains('modals')) { hideAll(); }
}
for (let i = 0; i < openFormButtonEl.length; i++) {
  openFormButtonEl[i].addEventListener('click', function(){openModalForm(this);});
}
for (let i = 0; i < openInfoButtonEl.length; i++) {
  openInfoButtonEl[i].addEventListener('click', function(){openModalForm(this);});
}
for (let i = 0; i < sendFormButtonEl.length; i++) {
  sendFormButtonEl[i].addEventListener('click', function(){postData(this);});
}
modalsEl[0].addEventListener('click', function(){closeModals(this);});
openVideoButtonEl[0].addEventListener('click', function(){openModalForm(this);});

// Воспроизведение Видео
function startVideo(el){
  // скрываем кнопку
  el.classList.add('d-none');
  // запускаем воспроизведение
  el.parentNode.children[0].children[0].play();
}
let playButtonEl = document.getElementsByClassName('play');
for (let i = 0; i < playButtonEl.length; i++) {
  playButtonEl[i].addEventListener('click', function(){startVideo(this);});
}

// mobile menu
let trigramEl = document.getElementsByClassName('mobile-navigation');
function mobileMenu(el){
  console.log('Операция с мобильным меню');
  console.log(el);
  console.log(el.children[0]);
  el.children[0].classList.toggle('d-none');
  el.children[0].classList.toggle('d-flex');
}
trigramEl[0].addEventListener('click', function(){mobileMenu(this);});
trigramEl[1].addEventListener('click', function(){mobileMenu(this);});

// block 4 - card - 9 slider
function changeImage(el){
  console.log('Меняем изображения');
  console.log(el);
  console.log(event.target);
  // меняем по 2 элемента
  if(event.target.classList.contains('left') || event.target.alt == 'left-arrow'){
    // console.log('Левая кнопка');
    el.children[2].classList.add('d-none');
    el.children[2].style.marginLeft = 10+'px';
    el.append(el.children[2]);
    el.children[2].classList.add('d-none');
    el.append(el.children[2]);
    el.children[2].classList.remove('d-none');
    el.children[3].classList.remove('d-none');
  }
  if(event.target.classList.contains('right') || event.target.alt == 'right-arrow'){
    console.log('Правая кнопка');
    el.children[2].classList.add('d-none');
    el.children[3].classList.add('d-none');
    el.children[1].after(el.children[el.children.length - 1]);
    el.children[1].after(el.children[el.children.length - 1]);
    el.children[2].classList.remove('d-none');
    el.children[3].classList.remove('d-none');
  }
}
let block4Card9El = document.getElementsByClassName('card-9');
block4Card9El[0].addEventListener('click', function(){changeImage(this);});
