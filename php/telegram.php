<?

//https://api.telegram.org/bot2053754101:AAHk4Ne3GWUSqvc4QASuAdUwUJLUV4ZrDd0/getUpdates
$name = $_POST['name'];
$number = $_POST['number'];
$vapros = $_POST['vapros'];
$kto = $_POST['kto'];
$token = '2053754101:AAHk4Ne3GWUSqvc4QASuAdUwUJLUV4ZrDd0';
$chat_id = '-778331310';
$telegram = array(
    'Name:  ' => $name,
    'Number:  ' => $number,
    'Muamolai:  ' => $vapros,
    'U sizning:    '   =>  $kto,
);
foreach ($telegram as $key => $value) :
    $text .= $key . $value . "%0A";
endforeach;
$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_emode=html&text={$text}", "r");
if ($telegram) {
        header('Location: ../pages/telegram.html');
    } 
    else {
        echo "ERROR";
    }

?>