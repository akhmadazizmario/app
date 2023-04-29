<div class="row">
  <div class="col-md-12">
    <h3>
      <center>Data <?= ucwords($row['nama_anak']) ?> <br>Pondok Pesantren Riyadus Solikhin - Tarub, Kabupaten Tegal</center>
    </h3>
    <br><br>
    <hr>
    <br>
    <table>
      <tr>
        <td style="padding-right:150px">ID ANAK</td>
        <td style="padding-right:20px">:</td>
        <td><?= $row['id_anak'] ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?= $row['nik_anak'] ?></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td><b><?= strtoupper($row['nama_anak']) ?></b></td>
      </tr>
    </table>
    <br>
    <br>
    <hr>
    <table>
      <tr>
        <td style="padding-right:20px"><img src="./upload/foto_anak/<?= $row['foto_anak'] ?>" alt="" height="270px"></td>
        <td><b>Jenis Kelamin :</b> <br>
          <?php if ($row['jk_anak'] == 'L') { ?>
            Laki-Laki
          <?php } else { ?>
            Perempuan
          <?php } ?><br>
          <b>Tempat, Tanggal Lahir : </b> <br>
          <?= ucwords($row['tempat_lahir_anak']) . ', ' . date_indo($row['tgl_lahir_anak']) ?> <br>
          <b>Nama Ibu :</b> <br>
          <?= ucwords($row['nama_ibu_kandung']) ?> <br>
          <b>Nama Bapak :</b> <br>
          <?= ucwords($row['nama_bapak_kandung']) ?> <br>
          <b>Pekerjaan Orang Tua :</b> <br>
          <?= ucwords($row['pekerjaan_orangtua']) ?> <br>
          <b>Alamat Lengkap :</b> <br>
          <?= ucwords($row['alamat']) ?> <br>
          <b>Agama :</b> <br>
          <?php if ($row['agama'] == '1') { ?>
            Islam
          <?php } else if ($row['agama'] == '2') { ?>
            Kristen
          <?php } else if ($row['agama'] == '3') { ?>
            Katdolik
          <?php } else if ($row['agama'] == '4') { ?>
            Hindu
          <?php } else if ($row['agama'] == '5') { ?>
            Budha
          <?php } else { ?>
            Konghucu
          <?php } ?> <br>
          <b>Pendidikan :</b> <br>
          <?php if ($row['pendidikan'] == '1') { ?>
            SD/MI
          <?php } else if ($row['pendidikan'] == '2') { ?>
            SMP/MTS
          <?php } else if ($row['pendidikan'] == '3') { ?>
            SMK/SMA/MA
          <?php } else { ?>
            Kuliah
          <?php } ?> <br>
          <b>Kategori :</b> <br>
          <?php if ($row['kelas'] == '1') { ?>
            Pondok Pesantren
          <?php } else { ?>
            Rumah Tahfidz Qur'an
          <?php } ?><br>
          <b>Status :</b> <br>
          <?php if ($row['status'] == '1') { ?>
            Aktif
          <?php } else if ($row['status'] == '3') { ?>
            Alumni
          <?php } else { ?>
            Tidak Aktif
          <?php } ?><br>
        </td>
      </tr>
    </table>
    <br>
    <br>
    <hr>
    <br>
    <table>
      <tr>
        <td style="padding-right:130px">Jenis Masalah</td>
        <td style="padding-right:20px">:</td>
        <td>
          <?php foreach ($jenis_masalah->result() as $key => $data) { ?>
            <?php if ($data->id_jenis_masalah == $detail['jenis_masalah']) { ?>
              <?php echo $data->jenis_masalah ?>
            <?php } ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Keadaan Saat Ini</td>
        <td> : </td>
        <td>
          <?php foreach ($keadaan_saat_ini->result() as $key => $data) { ?>
            <?php if ($data->id_keadaan == $detail['keadaan_saat_ini']) { ?>
              <?php echo $data->keadaan ?>
            <?php } ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Akta</td>
        <td> : </td>
        <td>
          <?php foreach ($akta->result() as $key => $data) { ?>
            <?php if ($data->id_akta == $detail['akta']) { ?>
              <?php echo $data->akta ?>
            <?php } ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Tempat Tinggal</td>
        <td> : </td>
        <td><?php echo $detail['tempat_tinggal']; ?></td>
      </tr>
      <tr>
        <td>Wali</td>
        <td> : </td>
        <td><?php echo $detail['wali']; ?></td>
      </tr>
      <tr>
        <td>Alasan Masuk Panti</td>
        <td> : </td>
        <td>
          <?php foreach ($alasan_masuk_panti->result() as $key => $data) { ?>
            <?php if ($data->id_alasan == $detail['alasan_masuk_panti']) { ?>
              <?php echo $data->alasan ?>
            <?php } ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>DTKS</td>
        <td> : </td>
        <td><?php if ($detail['masuk_dtks'] == '1') { ?>
            1 : Ya
          <?php } else { ?>
            4 : Tidak
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Jenis Bantuan</td>
        <td> : </td>
        <td>
          <?php foreach ($jenis_bantuan->result() as $key => $data) { ?>
            <?php if ($data->id_bantuan == $detail['jenis_bantuan']) { ?>
              <?php echo $data->bantuan ?>
            <?php } ?>
          <?php } ?>
        </td>
      </tr>
      <tr>
        <td>Tahun Bantuan</td>
        <td> : </td>
        <td><?php echo $detail['tahun_bantuan']; ?></td>
      </tr>
    </table>
  </div>
</div><!-- .animated -->