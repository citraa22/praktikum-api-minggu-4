# Praktikum Minggu 4 — Read-only Laravel API

## Resource
Product

## Endpoint
- GET /api/products
- GET /api/products/{product}

## Verification
- 200 list: berhasil
- 200 detail: berhasil
- 404 not found: berhasil

## Contract Comparison
Actual response sudah sesuai dengan contract Minggu 3.

Pada endpoint GET /api/products, response menggunakan wrapper `data`
dan menampilkan field:
- id
- name
- description
- price
- stock
- category
- created_at

Pada endpoint GET /api/products/{product}, response juga menggunakan
wrapper `data` dan menampilkan data produk berdasarkan ID.

Untuk ID yang tidak ditemukan, API mengembalikan status 404 dengan response:

{
    "message": "Product not found",
    "errors": null
}

Hasil pengujian menunjukkan bahwa response aktual sudah sesuai dengan
struktur dan status yang ditentukan pada contract Minggu 3.

## Evidence
- Request: GET products — 200 OK
- Request: GET detail produk — 200 OK
- Request: GET not found — 404 Not Found

Tidak terdapat token atau secret dalam dokumentasi.