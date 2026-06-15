# PHP
## Codewars

To run a file :  
`php answer_001.php`

The reason why the code only have opening tag `<?php` and no closing tag `?>` is to prevent output bug after the closing tag

For example :

```php
<?php

ob_start();
echo "ABC";

?>D
<?php

$str = ob_get_clean();
echo strlen($str);
echo "\n";

for ($i = 0; $i < strlen($str); $i++) {
    if($i === strlen($str)-1){
        echo ord($str[$i]);
    }else{
        echo ord($str[$i]) . " ";
    }   
}

?>
```

Output :
```php
6
65 66 67 68 13 10
```

| Decimal | Symbol | Description     |
|:-------:|:------:|:---------------:|
| 65      | A      | Uppercase A     |
| 66      | B      | Uppercase B     |
| 67      | C      | Uppercase C     |
| 68      | D      | Uppercase D     |
| 13      | CR     | Carriage Return |
| 10      | LF     | Line Feed       |
