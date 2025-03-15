<?php
// Define encryption method
$cipher = "AES-256-CBC"; 

// Secret key (must be 32 bytes for AES-256)
$secret_key = "12345678901234567890123456789012"; 

// Initialization vector (IV must be 16 bytes for AES)
$iv = "1234567890123456"; 

// Message to encrypt
$plaintext = "Hello, World!";

// Encrypt the message
$encrypted = openssl_encrypt($plaintext, $cipher, $secret_key, 0, $iv);

// Decrypt the message
$decrypted = openssl_decrypt($encrypted, $cipher, $secret_key, 0, $iv);

// Display results
echo "Original Message: " . $plaintext . "<br>";
echo "Encrypted Message: " . $encrypted . "<br>";
echo "Decrypted Message: " . $decrypted;
?>
 