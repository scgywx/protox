#简介
protox是一款php数据类型格式化工具，主要用于数据类型转换和数据初始化，省去很多手工的初始化操作。   
转换后的数据很方便使用json和amf进行编码，终于不用担心一个int转来转去变成string了。   
只需要一次数据定义和一次数据转换即可。   

#单个对像实例
```php
define('ROOT', dirname(__FILE__));
require('protox.php');
protox::init(array(
	'path' => ROOT . '/protocol/',
));

$input = array(
	'name' => 'test',
	'age' => '123a',
	'qq' => 123456,
	'phone' => 111
);
$output = protox::make('person', $input);
var_dump($output);
/*
array(5) {
  ["name"]=>
  string(4) "test"
  ["age"]=>
  int(123)
  ["phone"]=>
  string(3) "111"
  ["address"]=>
  string(0) ""
  ["qq"]=>
  string(6) "123456"
}
*/
```

#列表实例
```php
define('ROOT', dirname(__FILE__));
require('protox.php');
protox::init(array(
	'path' => ROOT . '/protocol/',
));

$input = array(
	array(
		'name' => 'abc',
		'age' => 111,
	),
	array(
		'name' => 'fuck',
		'age' => 999
	)
);
$output = protox::make('person_list', $input);
var_dump($output);
/*
array(2) {
  [0]=>
  array(4) {
    ["name"]=>
    string(3) "abc"
    ["age"]=>
    int(111)
    ["phone"]=>
    string(0) ""
    ["address"]=>
    string(0) ""
  }
  [1]=>
  array(4) {
    ["name"]=>
    string(4) "fuck"
    ["age"]=>
    int(999)
    ["phone"]=>
    string(0) ""
    ["address"]=>
    string(0) ""
  }
}
*/
```