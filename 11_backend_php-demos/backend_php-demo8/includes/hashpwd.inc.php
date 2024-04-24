<?php
// http://localhost/demo8/includes/hashpwd.inc.php
$sensitiveData = "mySensitiveData";

$salt = bin2hex(random_bytes(16)); // Generate random string (salt)
$pepper = "ASecretPepperString"; // Generate keyphrase string (pepper)

//STORE salt next to the SensitiveData in the database so you can check if SensitiveData are correct
//STORE pepper in application or environment variables away from source code and away from database (so that if database is compromised they still cannot get SensitiveData)

echo "<br>".$salt;

$dataToHash = $sensitiveData . $salt . $pepper;
echo "<br>".$dataToHash;
$hash = hash("sha256", $dataToHash);

echo "<br>".$hash;

/* Check if input passord is correct */

$sensitiveData = "mySensitiveData"; // SensitiveData provided by user

$storedSalt = $salt;                // get from database for user
$storedHash = $hash;                // get from database for user
$pepper = "ASecretPepperString";    // get from application or environment variables

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$hashToVerify = hash("sha256",$dataToHash);

if ($hashToVerify === $storedHash){
  echo "</br> SensitiveData matches";
} else {
  echo "</br> WRONG SensitiveData";
}

/* Specifically for passwords */
echo "<h2>STORE PWD FIRST TIME</h2>";
//STORE PWD FIRST TIME
$pwdSignup = "mySecretPwd";

// 3rd argument is options -> cost factor (how difficult to hash -> how long does it take) To counteract brute force attacks [10-12]
$options = [
  'cost' => 12
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); // 2 common hashing methods: PASSWORD_DEFAULT gets updated, PASSWORD_BCRYPT
// var_dump($hashedPwd);
/*
The hashed password string returned by password_hash() is typically formatted in a way that includes both the hash value and the salt, along with metadata about the hashing algorithm and cost parameters. This format allows PHP to store all necessary information for password verification in a single string.
Get salt and metadata out of the hash by reversing the structured procedures to incorporate this metadata inside the resulting hash
*/


echo "<h2>CHECK PWD</h2>";
//CHECK PWD
$pwdlogin = "mySecretPwd";

if (password_verify($pwdlogin, $hashedPwd)){
  echo "</br> PASSWORD CORRECT";
} else {
  echo "</br> PASSWORD INCORRECT";
}
