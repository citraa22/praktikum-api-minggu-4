# Tugas 4 - Laravel API Foundations

## 1. Tujuan

Menerapkan hasil Minggu 4 pada project semester dan mengumpulkan bukti yang dapat diverifikasi.

## 2. Perubahan

Perubahan yang diterapkan pada project:

- Menggunakan resource `Product`.
- Menyediakan endpoint read-only untuk mengambil daftar Product.
- Menyediakan endpoint read-only untuk mengambil detail Product berdasarkan ID.
- Menambahkan response `404 Not Found` ketika Product tidak ditemukan.
- Melakukan pengujian endpoint menggunakan Postman.
- Memperbarui dokumentasi Tugas 4.

## 3. Endpoint / Contract

### GET /api/products

Digunakan untuk mengambil daftar Product.

Response berhasil:
- Status `200 OK`
- Menggunakan wrapper `data`
- Menampilkan field:
  - `id`
  - `name`
  - `description`
  - `price`
  - `stock`
  - `category`
  - `created_at`

### GET /api/products/{product}

Digunakan untuk mengambil detail Product berdasarkan ID.

Response berhasil:
- Status `200 OK`
- Menggunakan wrapper `data`
- Menampilkan data Product berdasarkan ID.

Jika Product tidak ditemukan, API mengembalikan status `404 Not Found` dengan response:

    {
        "message": "Product not found",
        "errors": null
    }

Keputusan menggunakan resource `Product` dan endpoint read-only disesuaikan dengan API contract project.

## 4. Bukti Pengujian

Pengujian dilakukan menggunakan Postman.

### Success Response 1

Request:

`GET /api/products`

Hasil:
- Status: `200 OK`
- Response berhasil menampilkan daftar Product.

### Success Response 2

Request:

`GET /api/products/1`

Hasil:
- Status: `200 OK`
- Response berhasil menampilkan detail Product berdasarkan ID.

### Error Response

Request:

`GET /api/products/999999`

Hasil:
- Status: `404 Not Found`
- Message: `Product not found`
- Errors: `null`

## 5. Error Case

Error case diuji dengan menggunakan ID Product yang tidak tersedia:

`GET /api/products/999999`

API mengembalikan status `404 Not Found` dengan response:

    {
        "message": "Product not found",
        "errors": null
    }

Response tersebut menunjukkan bahwa API dapat menangani kondisi ketika Product yang diminta tidak ditemukan.

## 6. Kesimpulan

Implementasi Laravel API Foundations pada project berhasil dilakukan.

Endpoint read-only Product sudah tersedia dan dapat digunakan untuk mengambil daftar maupun detail Product. Pengujian menunjukkan success response dengan status `200 OK` dan error response dengan status `404 Not Found`.

Hasil implementasi dan pengujian telah diverifikasi menggunakan Postman.

## 7. Referensi

- Materi Minggu 4.
- Hasil Praktikum 4.
- API contract project.
- Dokumentasi resmi Laravel.

## 8. Deklarasi Penggunaan AI

AI digunakan sebagai alat bantu dalam memahami instruksi tugas, membantu menyusun dokumentasi, dan menjelaskan struktur serta hasil pengujian API.

Tidak terdapat API key, token, password, cookie, atau secret dalam dokumentasi.