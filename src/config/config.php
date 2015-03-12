<?php
/*
return [
    'username'  => 'name-of-the-web2sms-account',
    'apiKey'    => 'apiKey-of-the-web2sms-account',
    'recipient' => 'default-number-to-send-the-sms-to',
    'message'   => 'default-message-for-the-sms',

    'sender'         =>  null , // default-sender-for-the-sms max:11 chars, format string setting is OPTIONAL
    'scheduleDate'   =>  null , // send a sms at a specific date and time if null will send NOW, format YYYY-MM-DD HH:MM:SS, setting is OPTIONAL
    'validity'       =>  null , // if the sms fails set this is the number of minutes left to retry to send it before is considered failed , format number, setting is OPTIONAL
    'callbackUrl'    =>  null // send the sms reponse to this url and do stuff with it, setting is OPTIONAL
];
 */

return [
    'username'  => 'requestdotro',
    'apiKey'    => '58f1d2c965ac3290f744b67167bf9332e4132171',
    'recipient' => '0729601291',
    'message'   => 'test',

    'sender'         =>  null , // default-sender-for-the-sms max:11 chars, format string setting is OPTIONAL
    'scheduleDate'   =>  null , // send a sms at a specific date and time if null will send NOW, format YYYY-MM-DD HH:MM:SS, setting is OPTIONAL
    'validity'       =>  null , // if the sms fails set this is the number of minutes left to retry to send it before is considered failed , format number, setting is OPTIONAL
    'callbackUrl'    =>  null // send the sms reponse to this url and do stuff with it, setting is OPTIONAL
];
