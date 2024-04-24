<!-- DataBaseHandler.include.php -->
<?php

$supabase_url = 'https://your-project-id.supabase.co';
$supabase_key = 'your-api-key';


// Function to make a GET request to Supabase API
function supabase_request($url, $key, $method = 'GET', $data = []) {
  $options = array(
      'http' => array(
          'header' => "Content-type: application/json\r\n" .
                      "Authorization: Bearer $key\r\n",
          'method' => $method,
          'content' => json_encode($data)
      )
  );
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  return json_decode($result, true);
}

// Example: Perform a simple SELECT query
$response = supabase_request("$supabase_url/rest/v1/table_name", $supabase_key);
if ($response !== false) {
    // Successfully retrieved data from Supabase
    print_r($response);
} else {
    // Error occurred
    echo "Error: Unable to connect to Supabase.";
}