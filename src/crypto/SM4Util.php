<?php
/**
 * @desc SM4Util.php
 * @author Tinywan(ShaoBo Wan)
 * @date 2024/7/2 11:54
 */
declare(strict_types=1);

namespace tinywan\crypto;

class SM4Util
{
    public const SM4_CBC = 'SM4-CBC';
    public const SM4_CCFB = 'SM4-CFB';
    public const SM4_CTR = 'SM4-CTR';
    public const SM4_OFB = 'SM4-OFB';

    /**
     * @desc 加密
     * @param string $encryptText
     * @param string $key 32位秘钥key
     * @param string $algo
     * @param string $iv
     * @return string
     * @author Tinywan(ShaoBo Wan)
     */
    public static function encrypt(string $encryptText, string $key, string $algo = self::SM4_CBC, string $iv = ''): string
    {
        return openssl_encrypt($encryptText, $algo, hex2bin($key), OPENSSL_CIPHER_RC2_40, $iv);
    }

    /**
     * @desc 解密
     * @param string $decryptText
     * @param string $key 32位秘钥key
     * @param string $iv 法密码iv长度
     * @return string
     * @author Tinywan(ShaoBo Wan)
     */
    public static function decrypt(string $decryptText, string $key, string $algo = self::SM4_CBC, string $iv = ''): string
    {
        return openssl_decrypt($decryptText, $algo, hex2bin($key), OPENSSL_CIPHER_RC2_40, $iv);
    }
}