<h1 align="center">Base - Codeigniter V.3.1.13</h1>
<p align="center">Repository ini merupakan base configuration untuk Codeigniter yang sudah include dengan Bootstrap, Fontawesome, dan Sweetalert</p>

<img src="https://user-images.githubusercontent.com/64394320/223135166-1d97f091-9c7b-4359-b496-7ac65da34057.png" alt="Base CI 3.1.13">

# Daftar Isi

- [Autoload]()
- [Config]()
- [Database]()
- [.htaccess]()

## Autoload

> **File Autoload**: `/application/config/autoload.php`

Dalam repository ini sudah ditambahkan beberapa autoload yang akan dimuat ketika program dijalankan.

List Autoload:

- Libraries

```php
$autoload['libraries'] = array('database', 'email', 'session', 'form_validation');
```

- Helper

```php
$autoload['helper'] = array('url', 'file', 'security');
```

## Config

> **File Config**: `/application/config/config.php`

Dalam repository ini sudah ditambahkan beberapa config standar yang sudah terkonfigurasi

List Config:

- Base URL

```php
$config['base_url'] = 'http://' . $_SERVER['HTTP_HOST'] . '/base-ci-3-1-13/';
```

## Database

> **File Database**: `/application/config/database.php`

Dalam repository ini sudah ditambahkan user default database

```php
...
    'username' => 'root',
...
```

## .htaccess

> **File .htaccess**: `/.htaccess`

Dalam repository ini sudah ditambahkan file `.htaccess` sehingga sudah bisa memanggil controller di url tanpa file `index.php`

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L]
```
