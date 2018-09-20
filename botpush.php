<?php



require "vendor/autoload.php";

$access_token = 'z+NI9cKbWu9wprSHuvta4EV+kfMhnintttWNxhYyErPoIvVOP/2yw7Zt2OS6JxI78U1/jn2reZAyutSTuGAPLOvfLg3jlakTRw8cb20yAVXrvs0RqYFzarIVHXA533mGLs43tttDzr0XlPk4ChldqwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fd7e04d93f360ae5fc89c96a5a148259';

$pushID = 'Ucf28a74d2ae4326589ec03a323bfbff0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







