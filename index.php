<?php
    require_once 'topsis.php';
    $topsis = new topsis();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK - Kelompok 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Metode Topsis - Kelompok 12</h1>
        <hr>
        <!--Kriteria Bobot & Atribut -->
        <h3> 1. Kriteria, Bobot dan Atribut</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Kriteria</th>
                  <th>Bobot</th>
                  <th>Atribut</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                $total = 0;
                foreach($topsis->kriteria as $k)
                {
              ?>
                <tr>
                  <td><?=$no?></td>
                  <td>C<?=$no?></td>
                  <td><?=$k[0]?></td>
                  <td><?=$k[1]?></td>
                  <td><?=$k[2]?></td>
                  
                </tr>
              <?php
                $no++;
                }
              ?>
            </tbody>
        </table>

        <h3>2. Data Atribut</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $total = 0;
                foreach($topsis->alternatif as $k)
                {
              ?>
              <tr>
                  <td><?=$no?></td>
                  <td><?=$k[0]?></td>
                  <td><?=$k[1]?></td>
                  <td><?=$k[2]?></td>
                  <td><?=$k[3]?></td>
                  <td><?=$k[4]?></td>
                  <td><?=$k[5]?></td>
                </tr>
              <?php
                $no++;
                }
              ?>
            </tbody>
        </table>

        <table class="table">
            <thead>
                <tr>
                  <th>Kriteria</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                  <th>Pembagi</th>
                  <th><?=$topsis->pembagi[0]?></th>
                  <th><?=$topsis->pembagi[1]?></th>
                  <th><?=$topsis->pembagi[2]?></th>
                  <th><?=$topsis->pembagi[3]?></th>
                  <th><?=$topsis->pembagi[4]?></th>
              </tr>
            </tbody>
        </table>

        <h3>3. Matriks Keputusan Ternormalisasi</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $total = 0;
                foreach($topsis->normalisasi as $n)
                {
              ?>
              <tr>
                  <td><?=$no?></td>
                  <td><?=$n[0]?></td>
                  <td><?=$n[1]?></td>
                  <td><?=$n[2]?></td>
                  <td><?=$n[3]?></td>
                  <td><?=$n[4]?></td>
                  <td><?=$n[5]?></td>
                </tr>
              <?php
                $no++;
                }
              ?>
              <tr>
                  <th colspan="2">Bobot</th>
                  <td><?=$topsis->bobot[0]?></td>
                  <td><?=$topsis->bobot[1]?></td>
                  <td><?=$topsis->bobot[2]?></td>
                  <td><?=$topsis->bobot[3]?></td>
                  <td><?=$topsis->bobot[4]?></td>
                </tr>
            </tbody>
        </table>

        <h3>4. Matriks Keputusan Ternormalisasi dan Terbobot</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>C1</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>C5</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $total = 0;
                foreach($topsis->normxbobot as $nb)
                {
              ?>
              <tr>
                  <td><?=$no?></td>
                  <td><?=$nb[0]?></td>
                  <td><?=$nb[1]?></td>
                  <td><?=$nb[2]?></td>
                  <td><?=$nb[3]?></td>
                  <td><?=$nb[4]?></td>
                  <td><?=$nb[5]?></td>
                </tr>
              <?php
                $no++;
                }
              ?>
              <tr>
                  <th>*</th>
                  <th>Atribut</th>
                  <td><?=$topsis->atribut[0]?></td>
                  <td><?=$topsis->atribut[1]?></td>
                  <td><?=$topsis->atribut[2]?></td>
                  <td><?=$topsis->atribut[3]?></td>
                  <td><?=$topsis->atribut[4]?></td>
                </tr>
            </tbody>
        </table>

        <h3>5. Mencari Solusi Ideal Positif dan Negatif</h3>
        <table class="table">
            <tbody>
                <tr>
                  <th>Max(y+)</th>
                  <td><?=$topsis->ymax[0]?></td>
                  <td><?=$topsis->ymax[1]?></td>
                  <td><?=$topsis->ymax[2]?></td>
                  <td><?=$topsis->ymax[3]?></td>
                  <td><?=$topsis->ymax[4]?></td>
                </tr>
                <tr>
                  <th>Min(y-)</th>
                  <td><?=$topsis->ymin[0]?></td>
                  <td><?=$topsis->ymin[1]?></td>
                  <td><?=$topsis->ymin[2]?></td>
                  <td><?=$topsis->ymin[3]?></td>
                  <td><?=$topsis->ymin[4]?></td>
                </tr>
            </tbody>
        </table>

        <h3>6. Mencari D+ dan D- Untuk Setiap Alternatif</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Alternatif</th>
                  <th>D+</th>
                  <th>D-</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $total = 0;
                foreach($topsis->dplusmin as $dpm)
                {
              ?>
              <tr>
                  <td><?=$no?></td>
                  <td><?=$dpm[0]?></td>
                  <td><?=$dpm[6]?></td>
                  <td><?=$dpm[7]?></td>
                </tr>
              <?php
                $no++;
                }
              ?>
            </tbody>
        </table>

        <h3>7. Mencari Nilai Preferensi</h3>
        <table class="table">
            <thead>
                <tr>
                  <th>No</th>
                  <th>Alternatif</th>
                  <th>Preferensi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $total = 0;
                foreach($topsis->dplusmin as $dpm)
                {
                  $preferensi = round($dpm[7]/($dpm[7]+$dpm[6]),3);
              ?>
              <tr>
                  <td><?=$no?></td>
                  <td><?=$dpm[0]?></td>
                  <td><?=$preferensi?></td>
                </tr>
              <?php
                $no++;
                }
              ?>
            </tbody>
        </table> 

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>