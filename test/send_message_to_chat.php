<?php
require_once("..\src\send_message_to_chat.php");
$mensagem = "NOVO CONTATO: %0A%0AID: 1234%0ANOME: Fulano %0APara mais detalhes acesse: %0A<a href='https://google.com.br'>Link</a>";
envia_msg_telegram($mensagem);
