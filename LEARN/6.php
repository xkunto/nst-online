<?php 
//$mahasiswa = [
//    ["kuntadi","123456","kuntadi@gmail.com","teknik informatika"],
//    ["doddy","678911","doddy@gmail.com","Teknik industri"]
//];

$mahasiswa = [
    [
    "nama" => "kuntadi",
    "nrp" => "123456",
    "email"=> "kuntadi@gmail.com",
    "jurusan"=> "Teknik Informatika"
    ],
    [
    "nama" => "dody",
    "nrp" => "678901",
    "email"=> "dody@gmail.com",
    "jurusan"=> "Teknik Industri"
    ]
];

?>

<html>
    <head>
        <title>Dafatar mahasiswa</title>
    </head>
    <body>
        <h1>Dafatar mahasiswa</h1>
        <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>nama : <?php echo $mhs["nama"]; ?></li>
            <li>nrp : <?php echo $mhs["nrp"]; ?></li>
            <li>email : <?php echo $mhs["email"]; ?></li>
            <li>jurusan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>
</html> 