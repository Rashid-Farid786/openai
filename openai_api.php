<?php
require __DIR__ . '/vendor/autoload.php';
use App\Search;
use Orhanerday\OpenAi\OpenAi;
$Search=new Search();
print_r($Search);die;
$open_ai_key=$Search->lod;

$open_ai = new OpenAi($open_ai_key);
// $open_ai->setBaseURL("https://integrate.api.nvidia.com");
// $chat = $open_ai->chat([
//    'model' => 'gpt-3.5-turbo',
//    'messages' => [
//        [
//            "role" => "system",
//            "content" => "You are a helpful assistant."
//        ]
//    ],
//    'temperature' => 1.0,
//    'max_tokens' => 400,
//    'frequency_penalty' => 0,
//    'presence_penalty' => 0,
// ]);


// var_dump($chat);
// echo "<br>";
// echo "<br>";
// echo "<br>";
// // decode response
// $d = json_decode($chat);
// // Get Content
// echo($d->choices[0]->message->content);
$complete = $open_ai->completion([
   'model' => 'gpt-3.5-turbo-instruct',
   'prompt' => 'Hello',
   'temperature' => 0.9,
   'max_tokens' => 50,
   'frequency_penalty' => 0,
   'presence_penalty' => 0.6,
]);
print_r($complete);
// ?>