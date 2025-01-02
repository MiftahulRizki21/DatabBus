@extends('layouts.app')
@section('content')

<style>
    .table-container {
        margin: 20px auto;
        max-width: 90%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        overflow: hidden;
    }

    .table thead {
        background-color: #002855; /* Sesuaikan warna header tabel dengan navbar */
        color: white;
        text-align: left;
    }

    .table thead th {
        padding: 12px 15px;
        font-size: 16px;
        font-weight: bold;
    }

    .table tbody tr {
        border-bottom: 1px solid #ddd;
        transition: background-color 0.3s;
    }

    .table tbody tr:hover {
        background-color: #f0f8ff;
    }

    .table tbody td {
        padding: 12px 15px;
        text-align: left;
    }

    .btn {
        padding: 8px 12px;
        font-size: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .btn:hover {
        transform: scale(1.1);
    }

    .btn-primary {
        background-color: #002855; /* Sesuaikan dengan warna navbar */
        color: white;
    }

    .btn-success {
        background-color: #198754;
        color: white;
    }

    .btn-danger {
        background-color: #c82333;
        color: white;
    }

    textarea {
        width: 100%;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 4px;
        resize: vertical;
    }

    .pagination {
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    .pagination .page-item.active .page-link {
        background-color: #002855;
        border-color: #002855;
        color: white;
    }

    .pagination .page-link {
        color: #002855;
        background-color: white;
        border: 1px solid #ddd;
        padding: 8px 12px;
        margin: 0 5px;
        border-radius: 4px;
    }

    .pagination .page-link:hover {
        background-color: #f0f8ff;
        border-color: #ddd;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .container-fluid {
        position: relative;
        top: 60px;
    }

    /* Gaya untuk judul h1 */
    h1 {
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        color: #002855;
        background-color: #f0f8ff; /* Latar belakang yang lebih terang */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        text-transform: uppercase; /* Huruf kapital semua untuk efek profesional */
    }
</style>

<!-- Judul Halaman Editor -->
<h1>Halaman Editor</h1>

<div class="container-fluid">
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Detail Buku</th>
                    <th>Alasan</th> <!-- Kolom Alasan -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Contoh Buku 1</td>
                    <td><button class="btn btn-primary">Detail Buku</button></td>
                    <td>
                        <textarea placeholder="Masukkan alasan..." rows="3"></textarea>
                    </td>
                    <td>
                        <button class="btn btn-success">Terima</button>
                        <button class="btn btn-danger">Tolak</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Contoh Buku 2</td>
                    <td><button class="btn btn-primary">Detail Buku</button></td>
                    <td>
                        <textarea placeholder="Masukkan alasan..." rows="3"></textarea>
                    </td>
                    <td>
                        <button class="btn btn-success">Terima</button>
                        <button class="btn btn-danger">Tolak</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>

@endsection
