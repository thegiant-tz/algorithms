<?php
namespace Thegiant\Algorithms;

class AES
{
    //
    static function encrypt($data, $key, $iv)
    {
        // The encryption method to be used:
        $encrypt_method = "aes-256-cbc";

        // Encrypted payload:
        $encrypted = openssl_encrypt($data, $encrypt_method, $key, 0, $iv);
        
        // Base 64 Encode the encrypted payload:
        $encryptedData = base64_encode($encrypted);
        
        return $encryptedData;
    }

    static function decrypt($base64_encrypted_payload, $key, $iv)
    {
        // The encryption method to be used:
        $method = "aes-256-cbc";

        // Base 64 Decode to get encrypted payload
        $encrypted_data = base64_decode($base64_encrypted_payload);

        // Decrypted payload
        $decrypted = openssl_decrypt($encrypted_data, $method, $key, 0, $iv );
        return $decrypted;
    }
}
