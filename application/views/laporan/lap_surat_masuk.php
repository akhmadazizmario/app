<style>
  #tabel1 {
    margin-left: 15px;
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
<img src="assets/images/kop_sd_mejasem.png" alt="Logo" width="110%" style="margin-left:-50px">
<h3>
  <center>Laporan Surat Masuk<br> SD NEGERI MEJASEM BARAT 01</center>
</h3>
<br><br>
<table id="tabel1">

  <head>
    <tr>
      <th>No</th>
      <th>Tanggal Terima</th>
      <th>Nomor Surat</th>
      <th>Tanggal Surat</th>
      <th>Pengirim</th>
      <th>Penerima</th>
      <th>Perihal</th>
    </tr>
  </head>

  <body>
    <?php $no = 1;
    foreach ($surat_masuk as $row) { ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo date_indo($row['tgl_terima']); ?></td>
        <td><?php echo ucwords($row['nomor_surat']); ?></td>
        <td><?php echo date_indo($row['tgl_surat']); ?></td>
        <td><?php echo ucwords($row['pengirim']); ?></td>
        <td><?php echo ucwords($row['penerima']); ?></td>
        <td><?php echo ucwords($row['perihal']); ?></td>
      </tr>
    <?php $no++;
    }  ?>
  </body>
</table>