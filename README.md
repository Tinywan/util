## composer install

```phpregexp
composer require tinywan/util
```

## Trait代码复用

### 动态复用
使用类
```php
class UserService
{
    use \tinywan\traits\ErrorMessage;
    
    public function updatePassword(array $param)
    {
        if (empty($param)) {
            return $this->setError(false, '用户名或者密码不能为空');
        }
    }
}
```

调用类
```php
class Test
{
    public function user(array $param)
    {
        $user = new UserService();
        $response = $user->updatePassword([]);
        if (false === $response) {
            return $user->getMessage(); // 用户名或者密码不能为空
        }
    }
}
```

### 静态复用

使用类
```php
class UserService
{
    use \tinywan\traits\StaticErrorMessage;
    
    public static function updatePassword(array $param)
    {
        if (empty($param)) {
            return self::setError(false, '用户名或者密码不能为空');
        }
    }
}
```

调用类
```php
use \tinywan\traits\StaticErrorMessage;

class Test
{
    public static function user(array $param)
    {
        $response = UserService::updatePassword([]);
        if (false === $response) {
            return UserService::getMessage(); // 用户名或者密码不能为空
        }
    }
}
```