<?php
namespace Thegiant\Aes;

class AES
{
    //
    static function encrypt($data, $key, $iv)
    {
        // The encryption method to be used:
        $iv = substr(hash( 'sha256', $iv), 0, 16);
        $key = hash( 'sha256', $key);
        $encrypt_method = "AES-256-CBC";
        $encrypted = openssl_encrypt($data, $encrypt_method, $key, 0, $iv);
        // Base 64 Encode the encrypted payload:
        $encryptedData = base64_encode($encrypted);
        return $encryptedData;
    }

    static function decrypt($encrypted_data, $key, $iv)
    {
        $iv = substr(hash( 'sha256', $iv), 0, 16);
        $key = hash( 'sha256', $key);
        $method = "aes-256-cbc";
        $decrypted = openssl_decrypt(base64_decode($encrypted_data), $method, $key, 0, $iv );
        return $decrypted;
    }


    public static function hashedKey($key) {
        return hash('sha256', $key);
    }

    public static function hashedIv($key) {
        return self::hashedKey($key);
    }
}
