<?php
/**
 * @desc ErrorMessage
 * @author Tinywan(ShaoBo Wan)
 * @email 756684177@qq.com
 * @date 2022/10/4 13:07
 */

declare(strict_types=1);

namespace tinywan\traits;


trait ErrorMessage
{
    /**
     * 错误消息
     * @var array
     */
    public array $error = [
        'message' => '错误消息',
        'data' => []
    ];

    /**
     * @desc 设置错误
     * @param bool $success 是否成功
     * @param string $message 错误消息
     * @param array $data 消息体
     * @return bool
     */
    public function setError(bool $success, string $message, array $data = []): bool
    {
        $this->error = [
            'message' => $message,
            'data' => $data
        ];
        return $success;
    }

    /**
     * @desc 获取错误信息
     * @return array
     */
    public function getError(): array
    {
        return $this->error;
    }

    /**
     * @desc 获取错误信息
     * @return string
     */
    public function getMessage(): string
    {
        return $this->error['message'];
    }

    /**
     * @desc 获取错误数据
     * @return array
     */
    public function getData(): array
    {
        return $this->error['data'];
    }

    /**
     * @desc 返回信息
     * @param $success
     * @param string $message
     * @param int $code
     * @param array $data
     * @return array
     */
    public function returnData($success, string $message = '', int $code = 0, array $data = []): array
    {
        return [
            'success' => $success,
            'message' => $message,
            'code' => $code,
            'data' => $data
        ];
    }
}