<?php
/**
 * @desc StaticErrorMessage
 * @author Tinywan(ShaoBo Wan)
 * @email 756684177@qq.com
 * @date 2022/10/4 13:08
 */

declare(strict_types=1);

namespace tinywan\traits;


trait StaticErrorMessage
{
    /**
     * @var string
     */
    public static string $message = 'ok';

    /**
     * @var array
     */
    public static array $data = [];

    /**
     * @desc 设置错误消息
     * @param bool $success 是否成功
     * @param string $message 错误消息
     * @param array $data
     * @return bool
     */
    public static function setError(bool $success, string $message, array $data): bool
    {
        self::$message = $message;
        self::$data = $data;
        return $success;
    }

    /**
     * @desc 获取错误消息
     * @return string
     */
    public static function getMessage(): string
    {
        return self::$message;
    }

    /**
     * @desc 获取错误数据
     * @return string
     */
    public static function getData(): string
    {
        return self::$message;
    }
}