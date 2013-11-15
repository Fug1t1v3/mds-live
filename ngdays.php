<?php
$token='45f6edba7c374baa60424953060ce4bacb31ffdded2ab0cba1374217a63b38f06d33f021c3cca507a894e';
//запишем токен, полученный ранее
$day = '31';
$month = '12';
//Дата, до которой будем отсчитывать время
$year = '2013';
function dateDiff($startDay, $endDay) {
$endDay = strtotime($endDay);
$startDay= strtotime($startDay);

$difference = abs($endDay - $startDay);
$return['days'] = floor($difference / 86400);
$return['hours'] = floor($difference / 3600) % 24;
$return['minutes'] = floor($difference / 60) % 60;

return $return;
}

$date=dateDiff(date("j-n-Y G:i"),'01-11-2013 0:00');

//$phrases = "/var/www/public/1.txt";//файл содержащий фразы
//$z = file ($phrases);
//$cz = count ($z) -1;
//$r = rand (0, $cz);
//случайная фраза из файла

$text="До Нового Года осталось: $date[days] дней, $date[hours] часов, $date[minutes] минут.";

//$sRequest = "https://api.vkontakte.ru/method/status.set?text=$text&access_token=$token";
$sRequest = "work";
echo $text;
// ответ от Вконтакте
$oResponce = json_decode(file_get_contents($sRequest));