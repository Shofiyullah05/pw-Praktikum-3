

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="praktikum3.css">
    
    <title>Tugas Praktikum 3</title>
    

  </head>
  <body>
    <?php 
  $datas = [
    [
      'nama_sayuran' => 'Cabe',
      'berat(kg)' => 0.5,
      'stok' => 6
    ],
    [
      'nama_sayuran' => 'Garam',
      'berat(kg)' => 2,
      'stok' => 10
    ],
    [
      'nama_sayuran' => 'Ikan',
      'berat(kg)' => 5,
      'stok' => 10
    ],
    [
      'nama_sayuran' => 'jamur',
      'berat(kg)' => 4,
      'stok' => 0
    ],
    [
      'nama_sayuran' => 'Daging',
      'berat(kg)' => 2,
      'stok' => 6
    ],
    [
      'nama_sayuran' => 'kangkung',
      'berat(kg)' => 0.25,
      'stok' => 0
    ],
  ];
?>
    <h1 align="Center">Data Sembako Pak Joy</h1>
    <table id="table_barang", align="center">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Berat(Kg)</th>
          <th>Berat(gram)</th>
          <th>Berat(miligram)</th>
          <th>Stok</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($datas as $index => $data) { ?>
        <tr>
          <td><?= $index + 1?>.</td>
          <td><?= $data['nama_sayuran'] ?></td>
          <td><?= $data['berat(kg)'] ?></td>
          <td><?= $data['berat(kg)']*1000 ?></td>
          <td><?= $data['berat(kg)']*1000000 ?></td>
          <td class="<?= $data['stok'] == 0 ? 'zeroValue' : '' ?>"><?= $data['stok'] == 0 ? 'Kosong' : $data['stok'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    
  </body>
</html>