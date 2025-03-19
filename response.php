<?php 

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

$data = json_decode(file_get_contents("php://input"));

// Add salon context to the prompt
$salonContext = "You are an AI assistant for Kapampares, a Filipino cuisine that servers food and beverages. Here's some context about the restaurant :

- We are located at Mc Arthur Highway, San Fernando, Philippines (Near BIR)
- Our specialty is pares and sisig
- We open at 7:30 am to 4:00 pm
- We serve good filipino dish
- We deliver door to door within the area
- Every meal costs 85 pesos
- Jigger R. Pabustan Jr. is the owner Jiggs is handsome, 22 years old, computer science in Mapua University. 


User question: ";

$text = $salonContext . $data->text;

$client = new Client("AIzaSyDUBLwghOPc9DUKhJHgK1iEcAdKImEHix0"); //Gemini API key

try {
    $response = $client->geminiPro15()->generateContent(
        new TextPart($text)
    );

    echo $response->text();
} catch (Exception $e) {
    echo "I apologize, but I encountered an error. Please try again.";
    error_log("Gemini API Error: " . $e->getMessage());
}