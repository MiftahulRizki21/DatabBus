<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Detail Buku</title>
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }

        .book-detail {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            max-width: 700px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .book-detail img {
            max-width: 250px;
            height: auto;
            border-radius: 5px;
        }

        .book-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .synopsis {
            text-align: center;
            margin-bottom: 15px;
        }

        .book-info {
            width: 100%;
            margin-top: 15px;
        }

        .book-info table {
            width: 100%;
            border-collapse: collapse;
        }

        .book-info th,
        .book-info td {
            text-align: left;
            padding: 8px 5px;
            vertical-align: top;
        }

        .book-info th {
            width: 30%;
            font-weight: normal;
            color: #555;
        }

        .text-success {
            font-size: 1.2rem;
            color: #28a745;
        }

        h3 {
            color: #0056b3;
            font-size: 1.8rem;
            margin: 10px 0;
            text-align: center;
        }

        .btn-back {
            position: fixed; /* Membuat tombol tetap di pojok kiri */
            top: 40px; /* Jarak dari atas */
            left: 70px; /* Jarak dari kiri */
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #007bff; /* Warna biru */
            border: none;
            border-radius: 5px;
            text-decoration: none; /* Hilangkan garis bawah */
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            z-index: 1000; /* Pastikan tombol di atas konten lainnya */
        }

        .btn-back:hover {
            background-color: #0056b3; /* Warna lebih gelap saat hover */
        }

        .btn-back:focus {
            outline: 2px solid #0056b3;
            outline-offset: 2px;
        }
    </style>
</head>

<body>
    <a href="javascript:history.back()" class="btn-back">Back</a>
    <div class="book-detail" style="margin-top: 50px;">
        <h3 class="text-primary text-center">DETAIL BUKU </h3>

        <!-- Menampilkan gambar cover buku -->
        <img src="{{ asset('storage/'.$pengajuan->foto) }}" alt="{{ $pengajuan->judul_buku }}">

        <!-- Menampilkan judul buku -->
        <div class="book-title">
            <h2>{{ $pengajuan->judul_buku }}</h2>
        </div>

        <!-- Menampilkan sinopsis buku -->
        <div class="synopsis">
            <h5 class="text-success">Sinopsis:</h5>
            <p>
                {{ $pengajuan->sipnosis }}
            </p>
        </div>

        <!-- Menampilkan informasi buku -->
        <div class="book-info" style="top: 100px;">
            <h5 class="text-success">Informasi Buku:</h5>
            <table class="table">
                <tr>
                    <th>Penulis :</th>
                    <td>{{ $pengajuan->nama_penulis }}</td>
                </tr>
                <tr>
                    <th>Penerbit :</th>
                    <td>{{ $pengajuan->nama_penerbit }}</td>
                </tr>
                <tr>
                    <th>Release :</th>
                    <td>{{ $pengajuan->tgl_rilis }}</td>
                </tr>
                <tr>
                    <th>Halaman :</th>
                    <td>{{ $pengajuan->halaman }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
