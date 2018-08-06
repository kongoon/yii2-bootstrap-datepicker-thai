Bootstrap Datepicker Thai for Yii Framework 2
---
Install
-----
composer require kongoon/yii2-bootstrap-datepicker-thai "^1.0"
or add this line to composer.json
"kongoon/yii2-bootstrap-datepicker-thai": "^1.0"

Usage
-----
To use this widget, insert the following code into a view file:
```php
<?php
use kongoon\yii2\datepickerthai\BootstrapDatepickerThai;
echo BootstrapDatepickerThai::widget([
	'options' => [
		'id' => 'yourid',
		'format' => 'dd/mm/yyyy',
		'language' => 'th-th',
	]
]);
?>
```

