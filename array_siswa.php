<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DAFTAR NILAI SISWA</title>
    <style>
        * {
            border: 0;
            box-sizing: 0;
            margin: 0;
        }
        th {
            border-right: 2px solid black;
            border-bottom: 0px;
            /* font-size: 20px; */
        }
        td {
            border-right: 2px solid black;
            border-bottom: 0px;
            font-family:'Times New Roman';
            font-size: 18px;
        }
    </style>
</head>
<body>
<?php 
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>
<div style="display: flex; flex-direction: column; justify-content: center; height: 500px;">
    <div style="display: flex; justify-content: center; align-items: center;">
        <h3 style="align-text: center; font-style: italic;"><b>Daftar Nilai Siswa</b></h3>
    </div>
    <div class="table-responsive-sm table-responsive-md table-responsive-lg" style="display: flex; justify-content: center; align-items: center;">
        <table class="table table-info table-striped" style="width: 70%; border: 4px solid black;">
            <thead>
                <tr style="text-align: center; font-family: 'Segoe UI';">
                    <th scope="col"><b>No</b></th>
                    <th scope="col"><b>NIM</b></th>
                    <th scope="col"><b>UTS</b></th>
                    <th scope="col"><b>UAS</b></th>
                    <th scope="col"><b>Tugas</b></th>
                    <th scope="col"><b>Nilai Akhir</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1; 
                    foreach($ar_nilai as $ns){
                        echo '<tr style="text-align: center;"><td scope="row">'.$nomor.'</td>';
                        echo '<td>'.$ns['nim'].'</td>';
                        echo '<td>'.$ns['uts'].'</td>';
                        echo '<td>'.$ns['uas'].'</td>';
                        echo '<td>'.$ns['tugas'].'</td>';
                    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                        echo '<tr/>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>


