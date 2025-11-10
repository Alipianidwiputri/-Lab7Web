<!DOCTYPE html>
<html>
<head>
    <title>Program Hitung Umur dan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #a8edea, #fed6e3);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            background: white;
            margin: 80px auto;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        input[type="submit"] {
            width: 100%;
            background: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background: #45a049;
        }
        .result {
            background: #f9f9f9;
            padding: 15px;
            margin-top: 20px;
            border-radius: 10px;
            border-left: 5px solid #4CAF50;
        }
        .result b {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Pegawai</h2>
        <form method="post" action="">
            <label>Nama:</label><br>
            <input type="text" name="nama" required><br>

            <label>Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir" required><br>

            <label>Pekerjaan:</label><br>
            <select name="pekerjaan" required>
                <option value="">-- Pilih Pekerjaan --</option>
                <option value="Programmer">Programmer</option>
                <option value="Desainer">Desainer</option>
                <option value="Guru">Guru</option>
                <option value="Dokter">Dokter</option>
            </select><br>

            <input type="submit" name="submit" value="Tampilkan">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            $tanggal_lahir_obj = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir_obj)->y;

            switch ($pekerjaan) {
                case 'Programmer':
                    $gaji = 8000000;
                    break;
                case 'Desainer':
                    $gaji = 6000000;
                    break;
                case 'Guru':
                    $gaji = 5000000;
                    break;
                case 'Dokter':
                    $gaji = 10000000;
                    break;
                default:
                    $gaji = 0;
            }

            echo "<div class='result'>";
            echo "<h3>Hasil Output:</h3>";
            echo "Nama: <b>$nama</b><br>";
            echo "Tanggal Lahir: <b>$tanggal_lahir</b><br>";
            echo "Umur: <b>$umur tahun</b><br>";
            echo "Pekerjaan: <b>$pekerjaan</b><br>";
            echo "Gaji: <b>Rp " . number_format($gaji, 0, ',', '.') . "</b>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
