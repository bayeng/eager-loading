
## Persyaratan Sistem

Pastikan komputer Anda memenuhi persyaratan sistem berikut sebelum melakukan setup:

- PHP versi 7.4 atau yang lebih baru
- Composer
- MySQL Server
- Node.js dan npm

## Langkah-langkah Setup

Berikut adalah langkah-langkah untuk melakukan setup proyek Laravel ini:

 **Clone Repositori**

`git clone https://github.com/VRLab-ITDRI/webVR-smk`

1. **pindah ke dalam directory**
   - `$ cd webVR-smk`

2. **update composer**
   - `$ composer update`

3. **Setting env**
   - Rename file .env.example

4. **Buat key generate**
   - `$ php artisan key:generate`

5. **migrate database**
   - `$ php artisan migrate`

6. **jalankan aplikasi**
   - `$ php artisan serve`


