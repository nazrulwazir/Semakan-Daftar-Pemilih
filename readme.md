### Semakan Daftar Pemilih

# Installation
- Download or Clone this repository
```
git clone git@github.com:nazrulwazir/Semakan-Daftar-Pemilih.git
```
- Copy or rename file ```.env.example``` to ```.env```
-  Open up Command Prompt(CMD) or Terminal in the project directory and run these commands:
```
composer install
php artisan key:generate
```
- Launch web server
```
php artisan serve
```

How to use:
* ```http://site.com/api/V1/semak-pemilih/{icNum}```
* where ```icNum``` is your identity card number
* It will then return a JSON formatted string, you can parse the JSON string and do what you want with it.

Visit: [https://semakan.nazrulwazir.com/](https://semakan.nazrulwazir.com)

# Credits
- Laravel PHP Framework - https://laravel.com/docs/5.6/installation

# License
This library is under MIT license, please look at the `LICENSE` file
