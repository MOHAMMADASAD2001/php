<?php
// Example data to send (can be an associative array or other formats)
$data = array(
    'name' => 'John',
    'email' => 'john@example.com',
);

// URL to send the POST request
$url = "https://api.example.com/create_user";

// Create the context for the POST request
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);

// Create a stream context to send the request
$context = stream_context_create($options);

// Send the POST request and get the response
$response = file_get_contents($url, false, $context);

// Handling the response
if ($response !== false) {
    // Process the response data (assuming it's JSON in this example)
    $result = json_decode($response, true);
    // Use the result as needed
    print_r($result);
} else {
    // Error handling
    echo "Error: Failed to create user.";
}
?>
