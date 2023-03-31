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
<img src="assets/images/kop_sd_mejasem.png" alt="Logo" width="110%" style="margin-left:-50px">
<h3>
    <center>Laporan Data Pengurus<br>SD NEGERI MEJASEM BARAT 01</center>
</h3>
<br><br>

<table id="tabel1" align="center">

    <head>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIK Pengurus</th>
            <th>Nama Pengurus</th>
            <th>TTL</th>
            <th>Mulai Kerja</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Pendidikan</th>
            <!--<th>Pelatihan</th>-->
        </tr>
    </head>

    <body>
        <?php $no = 1;
        foreach ($pengurus as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td> <?php if ($row['foto_pengurus'] != null) { ?>
                        <img src="./upload/foto_pengurus/<?= $row['foto_pengurus'] ?>" alt="" width="80px">
                    <?php } ?>
                </td>
                <td><?php echo $row['nik_pengurus']; ?></td>
                <td><?php echo ucwords($row['nama_pengurus']); ?></td>
                <td><?php echo ucwords($row['tempat_lahir_pengurus']) . ', ' . date_indo($row['tgl_lahir_pengurus']) ?></td>
                <td><?php echo date_indo($row['mulai_kerja']); ?></td>
                <td>
                    <?php if ($row['jabatan'] == 1) { ?>
                        <span>Kepala Sekolah</span>
                    <?php } elseif ($row['jabatan'] == 2) { ?>
                        <span>Wakil Kepala Sekolah</span>
                    <?php } elseif ($row['jabatan'] == 3) { ?>
                        <span>Kesiswaan </span>
                    <?php } elseif ($row['jabatan'] == 4) { ?>
                        <span>Kurikulum</span>
                    <?php } elseif ($row['jabatan'] == 5) { ?>
                        <span>Wali Kelas</span>
                    <?php } elseif ($row['jabatan'] == 6) { ?>
                        <span>Tata Usaha</span>
                    <?php } elseif ($row['jabatan'] == 7) { ?>
                        <span>BK</span>
                    <?php } else { ?>
                        <span>Pustakawan</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($row['status'] == 1) { ?>
                        <span>Tetap</span>
                    <?php } elseif ($row['status'] == 2) { ?>
                        <span>Kontrak</span>
                    <?php } else { ?>
                        <span>Relawan</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($row['pendidikan'] == 1) { ?>
                        <span>SMA/SMK/MA</span>
                    <?php } elseif ($row['pendidikan'] == 2) { ?>
                        <span>D3</span>
                    <?php } elseif ($row['pendidikan'] == 3) { ?>
                        <span>S1</span>
                    <?php } else { ?>
                        <span>S2</span>
                    <?php } ?>
                    <!--<td><?php echo $row['pelatihan']; ?></td>-->
            </tr>
        <?php $no++;
        }  ?>
    </body>
</table>