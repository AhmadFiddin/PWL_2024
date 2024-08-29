<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Laravel</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f9fafb; /* Light grey background */
        }
        .biodata-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 3px solid #e5e7eb;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        table tr {
            border-bottom: 1px solid #e5e7eb; /* Light grey border */
        }
        table td {
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <!-- Welcome Section -->
    <div class="flex justify-center mt-10 mb-10">
        <h1 class="text-4xl font-bold text-gray-800">Selamat Datang</h1>
    </div>

    <!-- Biodata Section -->
    <div class="biodata-container mt-8 bg-white overflow-hidden shadow-md rounded-lg">
        <div class="p-6">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4 text-center">Biodata KTP</h2>
            <table class="text-gray-700">
                <tr>
                    <td class="font-semibold">Nama :</td>
                    <td>Ahmad Mimna'i Fiddin</td>
                </tr>
                <tr>
                    <td class="font-semibold">Tempat/Tanggal Lahir :</td>
                    <td>Sidoarjo/16 Mei 2003</td>
                </tr>
                <tr>
                    <td class="font-semibold">Alamat :</td>
                    <td>Desa Keboharan RT 04/RW 01, Kec. Krian, Kab. Sidoarjo</td>
                </tr>
                <tr>
                    <td class="font-semibold">Email :</td>
                    <td>ahmadfiddin687@gmail.com</td>
                </tr>
                <tr>
                    <td class="font-semibold">Nomor Telepon :</td>
                    <td>089673259761</td>
                </tr>
                <tr>
                    <td class="font-semibold">Pekerjaan :</td>
                    <td>Mahasiswa</td>
                </tr>
                <tr>
                    <td class="font-semibold">Gol. Darah :</td>
                    <td>O</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
