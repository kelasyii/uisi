# Pengenalan
Yii adalah PHP framework berbasis component yang dirancang untuk membangun aplikasi web dengan cepat. 
Yii2 sendiri adalah mayor upgrade dari Yii1.1. Bagi pengguna Yii1, ada baiknya menganggap Yii2 adalah framework yang berbeda karena Yii 2 benar-benar ditulis ulang dengan memanfaatkan teknologi dan protocol terbaru saat ini. 
Pengguna Yii 2 harus mulai familiar dengan composer, PSR, namespace, trait dan lain-lain.

# Requirements and Prerequisites.
Sebelum menginstall Yii2, ada beberapa kebutuhan dan persyaratan yang harus kita siapkan terlebih dahulu. 
Pertama-tama, siapkan hati dan mental untuk hal-hal baru dan kejutan-kejutan menyenangkan dari Yii2 :D.
Selanjutnya, Pastikan `PHP >= 5.4` dan `apache` sudah terinstal dan siap digunakan dalam komputer anda. 
Kalau sudah, maka kita siap pada langkah instalasinya.

# Instalasi.
Setidaknya ada 3 cara yang bisa kita pilih untuk menginstall Yii2. 
Masing-masing bisa kita pilih sesuai dengan kebutuhan dan tingkat kesulitan yang kita bisa. Berikut adalah caranya

## Install dari archive.
Cara ini adalah yang paling mudah. Kita tinggal download `source`nya lalu kita ekstrak, maka kita sudah siap menggunakan Yii2.
1. Download source Yii dari [sini](https://github.com/yiisoft/yii2/releases/download/2.0.11/yii-basic-app-2.0.11.tgz).
2. Extract file tersebut (apabila di windows gunakan aplikasi 7zip dengan menggunakan run administrator)
3. Copy file hasil extract ke folder document root dari apache (folder htdocs). Beri nama folder hasil extract dengan misalnya `projectyii`.
3. Kemudian modifikasi file `projectyii/config/web.php` dengan cara mengisi nilai dari `cookieValidationKey`.
```php
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'isi nilai terserah di sini',
        ],
```
4. Aplikasi siap untuk digunakan. Buka dari browser dengan alamat [`http://localhost/projectyii/web/index.php`](http://localhost/projectyii/web/index.php)

## Install dari composer.
Cara ini adalah semi advanced dan sebagian besar dilakukan via command line. 
1. Install composer terlebih dahulu. Silakan baca caranya di [sini](https://goo.gl/rPd6EX).
2. Berikutnya, install plugin composer untuk management asset.
```
composer global require "fxp/composer-asset-plugin:^1.2.0"
```
3. Baru kita install Yii-nya. Masuk ke folder htdocs, kemudian jalankan
```
composer create-project --prefer-dist yiisoft/yii2-app-basic projectyii
```
4. Aplikasi sipa digunakan. Alamatnya sama [`http://localhost/projectyii/web/index.php`](http://localhost/projectyii/web/index.php).

## Install yii untuk projek kita sendiri.
Cara ini lebih advanced lagi yang akan kita pelajari pada materi-materi berikutnya, Insyaallah :D.
