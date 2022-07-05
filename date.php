<?php

// BU AGAR POST-submit BO`LSA BAJAR-DEYABDI
if (isset($_POST['submit'])) {

  // BU KEY-LARNI TEKSHIRIB-TOZALASH
  $name = trim(htmlentities($_POST['name']));
  $email = trim($_POST['email']);
  $phone = trim(htmlentities($_POST['phone']));
  $tema = trim(htmlentities($_POST['tema']));
  $message = trim(htmlentities($_POST['message']));
  $captcha = trim(htmlentities($_POST['captcha']));

  // BU API-KEY va GROUP-CHAT-ID SI
  $token = "5287741940:AAGSp1UL8Z187baeAmvALLe5YN956fu3c9M";
  $chat_id = "-679255426";

  // BU BARCHA KEY-LARNI 1-ta ARRAY-GA OLISH
  $arr = array(
    "Name: " => $name,
    "Phone: " => $phone,
    "Email: " => $email,
    "Tema: " => $tema,
    "Message: " => $message,
    "Captcha: " => $captcha
  );

  // Bu ARRAY-NI ICHIDA AYLANUVCHI KOD
  foreach ($arr as $key => $value) {
    if ($key == "Message")
      $text .= "<b>" . $key . "</b> %0A" . $value . "%0A";
    else
      $text .= "<b>" . $key . "</b> " . $value . "%0A";
  };
  // BU API-LINKNI 1-ta O`ZGARUVCHIGA-OLISH
  $sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

  // BU XATO BO`LSA CHIQARADI
  if ($sendTelegram) {
    echo "Message OLINDI...👏";
  } else
    echo "Error XATOLIK...❌";
}
