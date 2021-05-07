# Calculator and NIM Generator

_Simple calculator and NIM Generator using PHP_

## Calculator
Input:
1. first number
1. operator
1. second number

Operation:
* Addition
* Substration
* Multiplication
* Division

## NIM Generator
Input:
1. Tahun angkatan
1. Jumlah NIM

### NIM String
```php
$ang = substr($_POST['angkatan'], 2);
$nim = "M05" . $ang . sprintf("%03d", $i);
```

## Credits
Batik pic by [visnezh](https://www.freepik.com/vectors/background/)