<?php
header('Content-Type: application/json');

function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
        sendMessage(array(
            "source" => $update["result"]["source"],
            "speech" => "Hello from webhook",
            "displayText" => "Hello from webhook",
            "contextOut" => array()
        ));
    }
}

function sendMessage($parameters) {
    echo json_encode($parameters);
}

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true, 512, JSON_BIGINT_AS_STRING);
if (isset($update["result"]["action"])) {
    processMessage($update);
}
?>
