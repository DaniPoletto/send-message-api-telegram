<?php

include "config.php";

//função que envia mensagem
function envia_msg_telegram($mensagem)
{
    $url = "https://api.telegram.org/bot".TOKEN."/sendMessage?chat_id=".CHAT_ID."&text=".$mensagem."&parse_mode=HTML";
    $execucao = file_get_contents($url);

    // var_dump($execucao);
}
