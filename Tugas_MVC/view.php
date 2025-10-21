<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku Perpustakaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 70%;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h2>📚 Daftar Buku Perpustakaan</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
        </tr>
        <?php
        $no = 1;
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$book['judul']}</td>";
            echo "<td>{$book['pengarang']}</td>";
            echo "<td>{$book['tahun']}</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
