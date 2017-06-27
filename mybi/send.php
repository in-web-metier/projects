<?
ignore_user_abort(true);

require_once (dirname(__FILE__) . '/cleantalk.custom.php');

global $request_id;

$request_id = md5(uniqid(rand(), true));

$fromx = "info@mybi.ru";
$to = "info@mybi.ru, info@artilleria.ru";
$subjectx = "Заявка с mybi.ru";
$subject = '=?utf-8?b?'. base64_encode($subjectx) .'?=';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$headers .= "From: myBI Аналитика для бизнеса <". $fromx .">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$message = "";

if (isset($_POST['form_name']))  {
    $message .= $_POST['form_name']."\n\n";
}

if (isset($_POST['name']))  {
    $message .= "Имя: ".$_POST['name']."\n";
}

if (isset($_POST['email']))  {
    $message .= "E-mail: ".$_POST['email']."\n";
}

if (isset($_POST['comment']))  {
    $message .= "Комментарий: ".$_POST['comment']."\n";
}

if (isset($_POST['tel']))  {
    $message .= "Телефон: ".$_POST['tel']."\n\n";
}



if (isset($_COOKIE['refffa']) && !empty($_COOKIE['refffa'])) {
    $message .= "referrer: ".$_COOKIE['refffa']."\n";
}

if (isset($_COOKIE['utm_source']) && !empty($_COOKIE['utm_source'])) {
    $message .= "utm_source: ".$_COOKIE['utm_source']."\n";
}

if (isset($_COOKIE['utm_medium']) && !empty($_COOKIE['utm_medium'])) {
    $message .= "utm_medium: ".$_COOKIE['utm_medium']."\n";
}

if (isset($_COOKIE['utm_campaign']) && !empty($_COOKIE['utm_campaign'])) {
    $message .= "utm_campaign: ".$_COOKIE['utm_campaign']."\n";
}

if (isset($_COOKIE['utm_content']) && !empty($_COOKIE['utm_content'])) {
    $message .= "utm_content: ".$_COOKIE['utm_content']."\n";
}

if (isset($_COOKIE['utm_term']) && !empty($_COOKIE['utm_term'])) {
    $message .= "utm_term: ".$_COOKIE['utm_term']."\n";
}

mail($to, $subject, $message, $headers, $from);

include "amo/crm-send.php";
include "leader.php";
include "study/pricestore.php";
include "connect/register.php";


$roboPassword = 'Rsg6N5ycLWW80uGk9VAU';

if (isset($_POST['form_name']) && $_POST['form_name'] == 'Регистрация на семинар')  {
    $currentPrice = str_replace(' ', '', get_current_pice());
    $roboSignature = md5('mybi:'.$currentPrice.'::'.$roboPassword);

    echo '{"price":'.$currentPrice.',"signature":"'.$roboSignature.'"}';
}
?>