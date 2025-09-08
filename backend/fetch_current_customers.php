<?php
header('Content-Type: application/json');

// Example: Replace this with real DeepFace/live detection logic
$customers = [
    ["face_id" => "001", "name" => "John Doe", "emotion" => "Happy", "confidence" => "0.95", "timestamp" => date("H:i:s")],
    ["face_id" => "002", "name" => "Jane Smith", "emotion" => "Neutral", "confidence" => "0.88", "timestamp" => date("H:i:s")]
];

echo json_encode($customers);
?>
