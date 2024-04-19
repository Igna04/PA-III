Langkah - langkah untuk memasukkan project kedalam repository laptop anda:
1. Buka terminal folder yang anda gunakan
2. Kemudian ketikkan git clone https://github.com/Igna04/PA-III.git
3. Buka project ke dalam teks editor anda. cth:Viscode
4. Buka Terminal project, kemudian integrasikan project kedalam laptop anda dengan cara :
    1. composer update
    2. mv env.example .env 
    3. Ubah nama db 
    4. php artisan migrate
    5. php artisan key:generate
    6. php artisan serve
5. Buka folder API_PA3, kemudian buka terminal nya dan ketikkan php artisan serve --port 8070
6. Buka folder PA-III, kemudian buka terminal nya dan ketikkan php artisan serve
7. Project sudah bisa dijalankan
