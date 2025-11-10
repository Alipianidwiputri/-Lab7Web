**Nama : Alipiani Dwi Putri**

**NIM : 312410691**

**Kelas : TI 24 A2**

**Mata KUliah : Pemrograman Web 1**

**Dosen Pengampu : Agung Nugroho, S.Kom., M.Kom.**

- # Langkah Langkah  & penjelasan dari setiap langkah praktikum beserta screenshotnya
- # Pertanyaan Dan Tugas 




# 1. Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

<img width="1034" height="230" alt="image" src="https://github.com/user-attachments/assets/b0cca827-3aec-44d2-939b-50cf537f81f3" />

# 2. Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/

# 3. PHP Dasar 
Buat file dengan nama php_dasar.php Di Visual Code.
Masukan kode seperti berikut.

Code
```
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>PHP Dasar</title> 
</head> 
<body> 
<h1>Belajar PHP Dasar</h1> 
<?php 
echo "Hello World"; 
?> 
</body> 
</html>
```

**Output**



<img width="960" height="363" alt="Screenshot 2025-11-10 134711" src="https://github.com/user-attachments/assets/9cc7c89e-15d0-4347-9cb2-6a334990b655" />





# 4. Variable PHP 
Menambahkan variable pada program.

Code
```
<?php 
$nim = "312410691"; 
$nama = 'ALipiani Dwi Putri'; 
echo "NIM : " . $nim . "<br>"; 
echo "Nama : $nama"; 
?>
```

**Output**



<img width="480" height="238" alt="Screenshot 2025-11-10 134947" src="https://github.com/user-attachments/assets/b428121e-5263-4825-9c14-171e1324b6ec" />





# 5. Predefine Variable $_GET

Code
```
<h1>Predefine Variable</h1> 
<?php 
echo 'Selamat Datang Alipiani';
?>
```

**Output**



<img width="881" height="310" alt="Screenshot 2025-11-10 175757" src="https://github.com/user-attachments/assets/b8a3516e-a760-4af1-b5cd-9c010a672b87" />






# 6. Membuat Form Input
Code
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>
    <?php
    echo 'Selamat Datang ' . $nama;
?>
</body> 
</html> 
```

**Output**



<img width="949" height="476" alt="Screenshot 2025-11-10 182532" src="https://github.com/user-attachments/assets/85d00da6-b000-4696-9702-300c72ad5d57" />




# 7. Operator
   
Code
```
<h2> Operator</h2>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```

**Output**



<img width="638" height="137" alt="image" src="https://github.com/user-attachments/assets/93596ea0-27d4-4363-9ac7-77e1d74d0e09" />




# 8. Kondisi IF

Code
```
<h2>Kondisi IF</h2>
<?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") 
        { echo "Minggu";} 
    elseif ($nama_hari == "Monday") 
        {echo "Senin";} 
    else {echo "Selasa";}
?>
```

**Output**



<img width="629" height="124" alt="image" src="https://github.com/user-attachments/assets/c7475844-f240-4f9d-b1b4-46b5eb835406" />




# 9. Kondisi Switch

Code
```
<h2>Kondisi Switch</h2>
<?php
    $nama_hari = date("2");
    switch ($nama_hari) {case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
    }
?>
```

**Output**



<img width="760" height="118" alt="image" src="https://github.com/user-attachments/assets/a72b58b0-0b20-47e4-8ade-e1ec47ab7da4" />



# 10. Perulangan For

Code
```
<h2>Perulangan for</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
?>
```

**Output**



<img width="590" height="577" alt="image" src="https://github.com/user-attachments/assets/c404eb3a-cf3d-46a1-b916-7baeebaba4c6" />





# 11. Perulangan while

Code
```
<h2>Perulangan while</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
?>
```

**Output**



<img width="937" height="340" alt="image" src="https://github.com/user-attachments/assets/f5b1b63b-304f-4dba-b118-57fd257c375f" />





# 12. Perulangan dowhile

Code
```
<h2>Perulangan dowhile</h2>
<?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
?>
</body>
</html>
```

**Output**



<img width="735" height="333" alt="image" src="https://github.com/user-attachments/assets/d408ac2c-0647-42e7-88bf-3379ba8cba36" />




# Output Keseluruhan(versi lengkap)




<img width="960" height="690" alt="image" src="https://github.com/user-attachments/assets/bbfe8a44-13e9-47b8-b7a7-4d3d8b888af0" />

<img width="955" height="827" alt="image" src="https://github.com/user-attachments/assets/6e1cc995-a404-40ad-ba1f-100e1a14d2fa" />





#  Pertanyaan Dan Tugas 

**Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan 
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung 
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang 
berbeda-beda sesuai pilihan pekerjaan**

Code
```
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

            // Hitung umur
            $tanggal_lahir_obj = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir_obj)->y;

            // Tentukan gaji
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
```

**Output**




<img width="959" height="1002" alt="Screenshot 2025-11-10 211941" src="https://github.com/user-attachments/assets/010c1077-cd74-4868-ad34-afb8b0ee0b13" />

