<style>
  #tabel1 {
    margin-left: 25px;
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
  <center>Laporan Donatur<br> SD NEGERI MEJASEM BARAT 01</center>
</h3>
<br><br>
<table id="tabel1">

  <head>
    <tr>
      <th>No</th>
      <th>Tanggal Donasi</th>
      <th>Nama Donatur</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th>Kategori</th>
      <th>Keterangan</th>
    </tr>
  </head>

  <body>
    <?php $no = 1;
    foreach ($donatur as $row) { ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo date_indo($row['tgl_donatur']); ?></td>
        <td><?php echo ucwords($row['nama_donatur']); ?></td>
        <td><?php echo ucwords($row['alamat_donatur']); ?></td>
        <td><?php echo ucwords($row['no_hp_donatur']); ?></td>
        <td>
          <?php if ($row['kategori'] == 1) { ?>
            <span>Uang</span>
          <?php } else { ?>
            <span>Logistik</span>
          <?php } ?>
        </td>
        <td><?php echo ucwords($row['keterangan']); ?></td>
      </tr>
    <?php $no++;
    }  ?>
  </body>
</table>