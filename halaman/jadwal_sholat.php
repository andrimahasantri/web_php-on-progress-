<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <!-- <div class="halaman"> -->
        <!-- <style type="text/css">
        /* .jadwal{
            width: 290px;
            background: #fff;
            border: 1px solid #ccc;
            float: right;
            margin: 10px;
            padding: 10px;
            box-shadow: 0px 0px 3px #ccc;
            align-content: center;
            
        } */
        /* .kotak{
            width: 80%;
            margin: 10px auto;
            background: yellow;
            overflow: hidden;
            align-content: center;
            
        } */
        /* table{
            width: 100%;
            align-content: center;
        } */
        </style> -->




        <center>
            <h2>Membuat jadwal sholat dengan php</h2>
            <h3><a href="#">Menyala Abangkuhh</a></h3>
        </center>


        <?Php 
        $ap_url = 'https://api.myquran.com/v2/sholat/jadwal/1106/2024/4';

        // membaca json dari url
        $json_data = file_get_contents($ap_url);

        // decode data json data menjadi array php
        $response_data = json_decode($json_data);

        // mengakses data yang ada di dalam object (data)
        $jadwal_sholat = $response_data->data;
        
        ?>

        <center>
            <p>Lokasi : <?php echo $jadwal_sholat->lokasi; ?></p>
            <p>Daerah : <?php echo $jadwal_sholat->daerah; ?></p>
        </center>

        <div class="kontak">
            <?php foreach($jadwal_sholat->jadwal as $jadwal){ ?>

            <div class="jadwal">
                <table border="1">
                    <tr>
                        <th>Tanggal</th>
                        <th><?php echo $jadwal->tanggal; ?></th>
                    </tr>
                    <tr>
                        <th>Imsak</th>
                        <th><?php echo $jadwal->imsak; ?></th>
                    </tr>
                    <tr>
                        <th>Subuh</th>
                        <th><?php echo $jadwal->subuh; ?></th>
                    </tr>
                    <tr>
                        <th>Dzuhur</th>
                        <th><?php echo $jadwal->dzuhur; ?></th>
                    </tr>
                    <tr>
                        <th>Ashar</th>
                        <th><?php echo $jadwal->ashar; ?></th>
                    </tr>
                    <tr>
                        <th>Maghrib</th>
                        <th><?php echo $jadwal->maghrib; ?></th>
                    </tr>
                    <tr>
                        <th>Isya'</th>
                        <th><?php echo $jadwal->isya; ?></th>
                    </tr>
                </table>
            </div>
            <?php  }?>
        </div>
    <!-- </div> -->

    
    
</body>
</html>