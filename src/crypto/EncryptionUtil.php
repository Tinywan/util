<?php
/**
 * @desc 加密工具类
 * @author Tinywan(ShaoBo Wan)
 * @date 2023/11/24 14:27
 */
declare(strict_types=1);


namespace tinywan\crypto;


class EncryptionUtil
{
    /** AES-128-ECB 加密方式*/
    public const AES_128_ECB = 'AES-128-ECB';

    /**
     * @desc 加密
     * @param string $data 加密的数据
     * @param string $key 密钥，必须是16、24或32个字符长度
     * @param string $algo 加密方式
     * @param string $iv 初始向量（IV）
     * @return string
     * @author Tinywan(ShaoBo Wan)
     */
    public static function encrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = ''): string
    {
        $encryptedBytes = openssl_encrypt($data, $algo, $key, OPENSSL_RAW_DATA);
        return base64_encode($encryptedBytes);
    }

    /**
     * @desc 解密
     * @param string $data
     * @param string $key 密钥，必须是16、24或32个字符长度
     * @param string $algo 加密方式
     * @param string $iv 初始向量（IV）
     * @return false|string
     * @author Tinywan(ShaoBo Wan)
     */
    public static function decrypt(string $data, string $key, string $algo = self::AES_128_ECB, string $iv = '')
    {
        return openssl_decrypt(base64_decode($data), $algo, $key, OPENSSL_RAW_DATA);
    }
}