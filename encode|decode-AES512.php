// Set the plaintext and encryption key
$plaintext = "This is a secret message!";
$encryption_key = "my_secret_key_123";

// Encrypt the plaintext using AES-512 encryption
$ciphertext = openssl_encrypt($plaintext, "aes-512-cbc", $encryption_key, OPENSSL_RAW_DATA, "1234567890123456");

// Print the encrypted text
echo "Encrypted Text: " . base64_encode($ciphertext) . "\n";

// Decrypt the ciphertext using AES-512 decryption
$decrypted_text = openssl_decrypt($ciphertext, "aes-512-cbc", $encryption_key, OPENSSL_RAW_DATA, "1234567890123456");

// Print the decrypted text
echo "Decrypted Text: " . $decrypted_text . "\n";
