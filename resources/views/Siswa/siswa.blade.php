<!DOCTYPE html>
<html>
<head>
    <title>Nama Siswa</title>
    <link rel="stylesheet" href="{{ asset('css/siswa.css') }}">

</head>

<body>
    <h1>Daftar Nama Siswa SD N 1 BKL</h1>
    <ul>
        <?php
        $nama_siswa = array("Ahmad", "Siti", "Muhammad", "Nurul", "Ali", "Putri");

        foreach ($nama_siswa as $siswa) {
            echo "<li>$siswa</li>";
        }
        ?>
    </ul>
</body>
</html>

