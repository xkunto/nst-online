<?php 

$mahasiswa = [
    ["kuntadi","123456","teknik informatika","kuntadi@geraibirru.com"],
    ["kun","123456","teknik informatika","kun@geraibirru.com"],
    ["erik","123456","teknik informatika","erik@geraibirru.com"]
];

?>

<html>
    <head>
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>DAFTAR Mahasiswa</h1>

            <?php foreach($mahasiswa as $mhs) : ?>
            <ul>
                <li>nama = <?php echo $mhs[0]; ?></li>
                <li>nik = <?php echo $mhs[1]; ?></li>
                <li>jurusan = <?php echo $mhs[2]; ?></li>
                <li>email = <?php echo $mhs[3]; ?></li>
            </ul>
            <?php endforeach; ?>
        
    </body>
</html>