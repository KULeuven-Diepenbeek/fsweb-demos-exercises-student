<?php

ini_set('session.use_only_cookies', 1); // 1 is true, 0 is false
ini_set('session.use_strict_mode', 1);  // only use session ids created by the server; session id more complex

// Cookie parameters to make it more secure
session_set_cookie_params([
  'lifetime' => 1880,         // 30min
  'domain' => 'localhost',    // 
  'path' => '/',              // Work in any path
  'secure' => true,           // Only use cookies with https
  'httponly' => true          // restrict script access from clientside (for example using the browser)
]);


// Start session after setting the correct parameters
session_start();
// (Re)Generate stronger session id (does not make new one)
session_regenerate_id(true); 
  // Good to also do after certain amount of time
  /*
  if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
  } else {
    $interval = 60 * 30; // 30 min

    if (time() - $_SESSION['last_regeneration'] >= $interval){
      session_regenerate_id(true);
      $_SESSION['last_regeneration'] = time();
    }
  }
  */

// Create new session id
// session_create_id(); // store in database ...