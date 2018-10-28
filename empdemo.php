<?php
$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);

$equis = $json->result->parameters->equis;

switch ($equis) {
    case 'hi':
        $speech = "Hi, Nice to meet you";

        break;

    case 'bye':
        $speech = "Bye, good night";
        break;

    case 'anything':
        $speech = "Yes, you can type anything here.";
        break;

    default:
        $speech = "Sorry, I didnt get that. Please ask me something 
else.";
        break;
}


$response = new \stdClass();
$response->speech = $speech;
$response->displayText = $speech;
$response->source = "Alex";

echo json_encode($response);
}
else
{
echo "Method not allowed";
}

?>
