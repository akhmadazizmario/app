<?php
error_reporting(0);
// ini_set('display_errors',off);
?>
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

<img src="assets/images/kop_sd_mejasem.png" alt="Logo" style="width: 100%">
<h3>
  <center>Laporan Keuangan<br> SD NEGERI MEJASEM BARAT 01</center>
</h3>
<?php if ($this->input->post('kategori')) { ?>
  <p>
    <center>Kategori:
      <?php if ($this->input->post('kategori') == 1) {
        echo "Pemasukan";
      } else if ($this->input->post('kategori') == 2) {
        echo "Pengeluaran";
      } ?>
    </center>
  </p>
<?php } ?>
<?php if ($this->input->post('tgl_awal')) { ?>
  <p>
    <center>Periode:
      <?= date_indo($this->input->post('tgl_awal')); ?> s.d
      <?= date_indo($this->input->post('tgl_akhir')); ?>
    </center>
  </p>
<?php } ?>
<br>
<table id="tabel1">
  <tr>
    <th scope="col">No</th>
    <th width="90px">Tanggal</th>
    <th width="180px">Keterangan</th>
    <?php if ($this->input->post('kategori') == 1 || $this->input->post('kategori') == null) : ?>
      <th width="90px">Pemasukan</th>
    <?php endif; ?>
    <?php if ($this->input->post('kategori') == 2 || $this->input->post('kategori') == null) : ?>
      <th width="90px">Pengeluaran</th>
    <?php endif; ?>
    <th width="100px">Saldo Akhir</th>
  </tr>

  <?php $no = 1;
  foreach ($keuangan as $row) { ?>
    <tr>
      <td align="center"><?php echo $no ?></td>
      <td><?php echo date_indo($row['tgl_keuangan']); ?></td>
      <td><?php echo ucwords($row['keterangan']); ?></td>
      <?php if ($this->input->post('kategori') == 1 || $this->input->post('kategori') == null) : ?>
        <td><?= rupiah($row['pemasukan']) ?></td>
      <?php endif; ?>
      <?php if ($this->input->post('kategori') == 2 || $this->input->post('kategori') == null) : ?>
        <td><?= rupiah($row['pengeluaran']) ?></td>
      <?php endif; ?>
      <td><?= rupiah($row['saldo']) ?></td>
    </tr>
  <?php $no++;
  }  ?>
</table>
<br><br>
<table border="0" style="width: 100%; margin-left: 10px; text-align: center;">
  <tr>
    <td colspan="2">Mengetahui,</td>
  </tr>
  <tr>
    <td>
      Kepala Sekolah
    </td>
    <td>
      Pengurus
    </td>
  </tr>
  <tr>
    <td height="30px"></td>
    <td></td>
  </tr>
  <tr>
    <td>Suratman, S.Pd.</td>
    <td>Nur Hayati, S.Pd.</td>
  </tr>
</table>