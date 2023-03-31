<style>
  #tabel1 {
    margin-left: 20px;
    color: #444;
    border-collapse: collapse;
    border: 2px solid #777;
    font-size: 15px;
    color: #000;
  }

  #tabel1 tr th {
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
    line-height: 20px;
  }

  #tabel1,
  th,
  td {
    padding: 3px 6px;
    border: 1px solid #777;
  }

  #tabel1 tr:nth-child(odd) {
    background-color: #f2f2f2;
  }
</style>
<img src="assets/images/kop_sd_mejasem.png" alt="Logo" style="width: 100%">
<h3>
  <center>Laporan Inventaris<br> SD NEGERI MEJASEM BARAT 01</center>
</h3>
<br><br>
<table id="tabel1">

  <head>
    <tr>
      <th>No</th>
      <th>Tanggal Terima</th>
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Identitas Barang</th>
      <th>Keadaan Barang</th>
      <th>Jumlah</th>
      <th>Asal Barang</th>
    </tr>
  </head>

  <body>
    <?php $no = 1;
    foreach ($inventaris as $row) { ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo date_indo($row['tgl_terima']); ?></td>
        <td><?php echo ucwords($row['kode_barang']); ?></td>
        <td><?php echo ucwords($row['nama_barang']); ?></td>
        <td><?php echo ucwords($row['identitas_barang']); ?></td>
        <td>
          <?php if ($row['keadaan'] == 1) { ?>
            <span class="badge badge-primary">Baik</span>
          <?php } elseif ($row['keadaan'] == 2) { ?>
            <span class="badge badge-warning">Kurang Baik</span>
          <?php } else { ?>
            <span class="badge badge-danger">Rusak</span>
          <?php } ?>
        </td>
        <td><?php echo ucwords($row['jumlah']); ?></td>
        <td><?php echo ucwords($row['asal']); ?></td>

      </tr>
    <?php $no++;
    }  ?>
  </body>
</table>