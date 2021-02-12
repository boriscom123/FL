<?php
  if(isset($_POST) && isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['info'])){
    // echo 'POST: ';
    // print_r($_POST);
    $to = 'gusevo1979@yandex.ru'; // 'ser.gennadich@mail.ru'; 'gusevo1979@yandex.ru';
    // $copy = 'boriscom@mail.ru'; // 'boriscom123@yandex.ru';
    $subject = 'Письмо с сайта Вилларайд - форма: '.$_POST['info'];
    $message = 'Имя пользователя: '.$_POST['name'].', телефон: '.$_POST['tel'].'.';
    $headers =    array(
                  'From' => 'admin@villaraid.ru',
                  'Reply-To' => 'admin@villaraid.ru',
                  'X-Mailer' => 'PHP/' . phpversion()
                  );
    mail($to.$copy, $subject, $message, $headers);
    echo 'ok';
  } else {
    echo "Сделайте правильный запрос, а то что-то не похоже что Вам что-то нужно";
  }
?>
