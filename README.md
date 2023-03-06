<h1 align="center">Base - Codeigniter V.3.1.13</h1>
<p align="center">Repository ini merupakan base configuration untuk Codeigniter yang sudah include dengan Bootstrap, Fontawesome, dan Sweetalert</p>

<img src="https://user-images.githubusercontent.com/64394320/223135166-1d97f091-9c7b-4359-b496-7ac65da34057.png" alt="Base CI 3.1.13">

# Daftar Isi

- [Autoload](#autoload)
- [Config](#config)
- [Database](#database)
- [.htaccess](#htaccess)
- [Templates](#templates)
- [Demo](#demo)
- [FAQs](#faqs)

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

## Templates

> **Folder templates**: `/application/views/templates`

Dalam repository ini sudah menggunakan templates seperti bagian `header` dan `footer` sehingga bagian tag pembuka `head` dan tag penutup `body` sudah di pisah

- Header

```html
<!DOCTYPE html>
...
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $title ?></title>

	<!-- Memanggil CSS -->
	<link rel="stylesheet" href="<?= base_url('assets') ?>/css/index.css" />

	<!-- Memanggil CSS Bootstrap V.5.3.0 -->
	<link
		rel="stylesheet"
		href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css"
	/>

	<!-- Memanggil CSS Fontawesome V.6.3.0 -->
	<link rel="stylesheet" href="
	<?= base_url("assets") ?>
	/vendor/fontawesome/css/all.min.css">

	<!-- Memanggil CSS Sweetalert V.2 -->
	<link rel="stylesheet" href="
	<?= base_url("assets") ?>
	/vendor/sweetalert/css/sweetalert2.min.css">
</head>
...
```

- Footer

```html
    <!-- Memanggil JS Bootstrap V.5.3.0 -->
    <script src="<?= base_url("assets") ?>/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Memanggil JS Sweetalert V.2 -->
    <script src="<?= base_url("assets") ?>/vendor/sweetalert/js/sweetalert2.all.min.js"></script>
</body>
</html>
```

## Demo

Dalam repository ini juga sudah disediakan code demo yang sudah menjalankan bootstrap, fontawesome, dan sweetalert.

Untk mengakses nya Anda bisa membuka controller berikut di url browser Anda `localhost/base-ci-3-1-13/Test`

- File Controller Demo: `/application/controllers/Test.php`
- File Views Demo: `/application/views/test.php`

## FAQs

- Versi berapa saja yang digunakan pada repository ini?

> - Codeigniter: `v.3.1.13`
> - Bootstrap: `v.5.3.0-alpha1-dist`
> - Fontawesome: `v.6.3.0-web`
