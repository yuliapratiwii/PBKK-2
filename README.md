Buat database MySQL baru, misal lewat xampp dan misal beri nama si_surat_fkip

Buat file .env di level direktori paling atas (selevel dengan .env.example), lalu copy isi file .env.example ke dalam .env

Ganti nilai DB_DATABASE di file .env sesuai database yang dibuat, misal si_surat_fkip

Masuk ke direktori si-surat-fkip di terminal

Jalankan composer install

Buka terminal baru dengan direktori yang masih sama

Jalankan php artisan key:generate

Jalankan php artisan migrate --seed

Jalankan php artisan serve. Lalu buka alamatnya di browser (biasanya di http://127.0.0.1:8000/)

