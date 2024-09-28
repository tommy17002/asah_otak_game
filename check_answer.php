<?php
$data = json_decode(file_get_contents('php://input'), true);

$correctWord = $data['word'];
$userAnswer = $data['answer'];

$response = ['points' => 0];

for ($i = 0; $i < strlen($correctWord); $i++) {
    if ($i === 2 || $i === 6) { 
        continue; 
    }

    if (strtolower($correctWord[$i]) === strtolower($userAnswer[$i])) {
        $response['points'] += 10; 
    } else {
        $response['points'] -= 2; 
    }
}

echo json_encode($response);
?>
