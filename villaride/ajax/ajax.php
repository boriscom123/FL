<?php
  if(isset($_POST) && isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['info'])){
    echo 'POST: ';
    print_r($_POST);
    $to = 'boriscom123@yandex.ru'; // 'ser.gennadich@mail.ru';
    $subject = 'Письмо с сайта Вилларайд форма: '.$_POST['info'];
    $message = 'Имя пользователя: '.$_POST['name'].', телефон: '.$_POST['tel'].'.';
    $headers =    array(
                  'From' => 'admin@prebor.ru',
                  'Reply-To' => 'admin@prebor.ru',
                  'X-Mailer' => 'PHP/' . phpversion()
                  );
    mail($to, $subject, $message, $headers);
  } else {
    echo "Сделайте правильный запрос, а то что-то не похоже что Вам что-то нужно";
  }
?>
