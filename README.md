# Enviando mensagens para um canal usando PHP e API do Telegram

Primeiro crie o bot que irá enviar as mensagens para o canal buscando por botfather no telegram.

Clique em começar ou digite /start.

Digite /newbot e siga as intruções.

Escolha um nome e um usuário para o bot. 

Após a criação, um token será informado. Copie esse token.

Agora crie o canal que irá receber as mensagens no telegram. 

Depois inclua o bot como administrador e envie uma mensagem de teste no canal.

Com a mensagem de teste enviada, use um programa (Postman, Insomnia) para obter o Id do Canal.

Faça uma chamada do tipo POST para 

```
https://api.telegram.org/bot<TOKEN_DO_BOT>/getUpdates 
```

O retorno irá conter o id do Chat.

![Exercício 1](https://github.com/DaniPoletto/send-message-api-telegram/blob/master/img/config.jpg)

Agora, pra finalizar, crie um arquivo config.php na pasta src com o token do bot e o Id do Canal. 

![Exercício 1](https://github.com/DaniPoletto/get_chat_id/blob/master/img/config.jpg)

