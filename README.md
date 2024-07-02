## composer install

```phpregexp
composer require tinywan/util
```

## 加解密

### 加密

```php
$key = '2024PpTJIR1aYFiFh0PppZzE';

// 加密内容
$content = [
    'name' => 'Tinywan',
    'school' => 'ZheJiang University',
    'age' => 24,
    'github' => [
        'home' => 'https://github.com/Tinywan',
        'start' => '6.8k',
    ],
];

// 必须转换为字符串
$dataJson = json_encode($content, JSON_UNESCAPED_UNICODE);
$decrypt = \tinywan\crypto\EncryptionUtil::encrypt($dataJson, $key);
var_dump($decrypt);
```
### 解密

```php
$key = '2024PpTJIR1aYFiFh0PppZzE';

$decrypt = 'Dow1jTTBpriQUPLWFDli0BEjwn5Y3QG65TDWacyn/VRbxxxxxxxxxxxxxxxxd5ETvVbau4=';
$encrypt = \tinywan\crypto\EncryptionUtil::decrypt($decrypt, $key);
var_dump($encrypt);
```

## SM4

```php
// 32位key
$key = '4d7f2e7fe8e450385253bf379b13e432';

// 获取对应算法密码iv长度
$ivLength = openssl_cipher_iv_length(\tinywan\crypto\SM4Util::SM4_CBC);
$iv = (string) rand(pow(10, ($ivLength - 1)), pow(10, $ivLength) - 1);

// 加密字符串
$plaintext = '开源技术小栈';
$ciphertext = self::encrypt($plaintext, $key, $iv);
printf("加密结果1: %s\n", $ciphertext);
printf("解密结果2: %s\n", self::decrypt($ciphertext, $key, $iv));
```
