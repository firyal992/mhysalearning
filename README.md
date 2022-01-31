# MHYSA

##Deskripsi program 

Pada website terdapat 2 layanan, pertama speaker-cam. Dimana user bisa pesan atau booking tentor dengan jam menyesuaikan. Materi dilakukan secara langsung dalam bentuk workshop atau webinar . Link akan di berikan melalui whatsApp
Layanan yang kedua adalah skill center. pada layanan ini menyediakan courses paket ataupun satuan. User harus melakukan registrasi atau login terlebih dahulu untuk melakukan transaksi. 
Pembayaran dilakukan melalui transfer dan konfirmasi melalui whatsApp.
Cara mengakses materi adalah setelah login, user akan berada pada dashboard murid. Klik resource untuk akses materi yang diarahkan link ke youtube. Lalu terdapat post test untuk uji kemampuan siswa. Sertifikat di download pada bagian sertifikat yang diarahkan ke g-drive.
Pada pages mentor terdapat layanan invoice untuk mencairkan uang. Pages ini bisa diakses oleh role apa saja namun untuk mencairkan uang hanya bisa dilakukan oleh role mentor. “ Jadi tentor telah dibuatkan akun . Nanti login menggunakan akun yang telah diberikan dan setelah login masuk ke dashboard mentor”



## Installation

1. Clone this repo
2. `cd mhysa`
3. `composer install`
4. `npm install`
5. `npm run dev`
6. `cp .env.example .env`
7. `php artisan key:generate`
8. Update database configuration
9. `php artisan migrate:fresh --seed`
10. `php artisan serve`

## Configuration

pada file env databse = laravel2
add SESSION_DOMAIN=127.0.01:8000

## deploy web
http://mhysalearning.com/ 
