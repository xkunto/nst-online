<?php 
$hari = array("Senin","Selasa","Rabu");
$bulan = ["Januari","Februari","Maret"];
$arr = [100,"teks",true];
?>

<html>
    <Head>
        <title>Learn 4</title>
        <style>
            .kotak {
                width: 30px;
                height: 30px;
                background-color: #BADA55;
                text-align: center;
                line-height: 30px;
                margin: 3px;
                float: left;
                transition: 1s;
            }
            .kotak:hover {
                transform: rotate(360deg);
                border-radius: 50%;
            }
        </style></style>
    </Head>
    <body>
        <?php
        $angka = [1,2,3,4,5,6,7,8,9];
        foreach ($angka as $a) : 
        ?>

        <div class="kotak"> <?php echo $a ?></div>

        <?php endforeach; ?> 


        
    </body>
</html>