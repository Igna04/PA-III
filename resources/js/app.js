import './bootstrap';

const express = require('express');
const app = express();

// Rute POST untuk tambahtanaman
app.post('/tambahtanaman', (req, res) => {
    // Logika penanganan POST request di sini
    res.send('Data tanaman berhasil ditambahkan');
});

// Atur server untuk mendengarkan port tertentu
app.listen(3000, () => {
    console.log('Server berjalan di port 3000');
});

fetch('http://localhost:3000/tambahtanaman', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        // Data yang ingin Anda kirim
        namaTanaman: 'Tanaman Baru',
        jenisTanaman: 'Buah',
        // tambahkan data lainnya sesuai kebutuhan
    }),
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));
