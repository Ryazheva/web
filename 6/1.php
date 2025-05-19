<?php
// 1. GET запрос
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
echo "GET: " . $response . "\n";

// 2. POST запрос
$ch = curl_init('https://jsonplaceholder.typicode.com/posts');
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => json_encode([
        'title' => 'New post',
        'body' => 'Content',
        'userId' => 1
    ])
]);
$response = curl_exec($ch);
curl_close($ch);
echo "POST: " . $response . "\n";

// 3. PUT запрос
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt_array($ch, [
    CURLOPT_CUSTOMREQUEST => 'PUT',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => json_encode([
        'title' => 'Updated title',
        'body' => 'Updated content',
        'userId' => 1
    ])
]);
$response = curl_exec($ch);
curl_close($ch);
echo "PUT: " . $response . "\n";

// 4. DELETE запрос
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt_array($ch, [
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_RETURNTRANSFER => true
]);
$response = curl_exec($ch);
curl_close($ch);
echo "DELETE: " . $response . "\n";
