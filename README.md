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

