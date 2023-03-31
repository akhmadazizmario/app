<?php if ($this->session->has_userdata('success')) : ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show border-0 border-none">
          <?= $this->session->flashdata('success'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php if ($this->fungsi->user_login()->role != 2) : ?>
  <div class="row">
    <div class="col-md-12">
      <?php if ($this->fungsi->user_login()->role == 0) { ?>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti ti-user text-danger border-danger"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Total User</div>
                  <div class="stat-digit"><?= $user->num_rows(); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="fa fa-users text-success border-success"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Total Guru</div>
                  <div class="stat-digit"><?= $pengurus->num_rows(); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>


      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <div class="stat-widget-one">
              <div class="stat-icon dib"><i class="fa fa-female text-primary border-primary"></i></div>
              <div class="stat-content dib">
                <div class="stat-text">Total Siswa</div>
                <div class="stat-digit"><?= $anak->num_rows(); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if ($this->fungsi->user_login()->role == 0) { ?>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti ti-id-badge text-warning border-warning"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Total Donatur</div>
                  <div class="stat-digit"><?= $donatur->num_rows(); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-danger border-danger"></i></div>
                <div class="stat-content dib">
                  <div class="stat-text">Saldo Dana Terakhir</div>
                  <div class="stat-digit"><?= rupiah($saldo_akhir); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    <?php endif; ?>
    <?php if ($this->fungsi->user_login()->role != 1 && $this->fungsi->user_login()->role != 0) : ?>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="fa fa-sign-in text-primary border-primary"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text"><i class="fa fa-money"></i> Pemasukan Bulan Lalu</div>
                    <div class="stat-digit"><?php
                                            $total_sum = 0;
                                            foreach ($perbulan_lalu as $row) {
                                            ?>
                        <?= rupiah($row['pemasukan']); ?>
                      <?php
                                              $total_sum += $row['pemasukan'];
                                            } ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="fa fa-sign-out text-danger border-danger"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text"><i class="fa fa-money"></i> Pengeluaran Bulan Lalu</div>
                    <div class="stat-digit"><?php
                                            $total_sum = 0;
                                            foreach ($pperbulan_lalu as $row) {
                                            ?>
                        <?= rupiah($row['pengeluaran']); ?>
                      <?php
                                              $total_sum += $row['pengeluaran'];
                                            } ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="fa fa-sign-in text-primary border-primary"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text"><i class="fa fa-money"></i> Pemasukan Bulan Ini</div>
                    <div class="stat-digit"><?php
                                            $total_sum = 0;
                                            foreach ($perbulan as $row) {
                                            ?>
                        <?= rupiah($row['pemasukan']); ?>
                      <?php
                                              $total_sum += $row['pemasukan'];
                                            } ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="fa fa-sign-out text-danger border-danger"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text"><i class="fa fa-money"></i> Pengeluaran Bulan Ini</div>
                    <div class="stat-digit"><?php
                                            $total_sum = 0;
                                            foreach ($pperbulan as $row) {
                                            ?>
                        <?= rupiah($row['pengeluaran']); ?>
                      <?php
                                              $total_sum += $row['pengeluaran'];
                                            } ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="fa fa-inbox text-success border-success"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text">Saldo Terakhir</div>
                    <div class="stat-digit"><?= rupiah($saldo_akhir); ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded">
              <div class="card-body">
                <div class="stat-widget-one">
                  <div class="stat-icon dib"><i class="ti ti-id-badge text-warning border-warning"></i></div>
                  <div class="stat-content dib">
                    <div class="stat-text">Total Donatur</div>
                    <div class="stat-digit"><?= $donatur->num_rows(); ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-3">Statistik Donatur Per Tahun <?= date('Y') ?></h4>
                <canvas id="barChart"></canvas>
              </div>
            </div>
          </div>
          <!--  Chart js -->
          <script src="<?= base_url() ?>assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>

          <script type="text/javascript">
            //bar chart
            var ctx = document.getElementById("barChart");
            //    ctx.height = 200;
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                datasets: [{
                    label: "Logistik",
                    data: [<?= $dljanuari->num_rows() ?>, <?= $dlfebruari->num_rows() ?>, <?= $dlmaret->num_rows() ?>, <?= $dlapril->num_rows() ?>, <?= $dlmei->num_rows() ?>, <?= $dljuni->num_rows() ?>, <?= $dljuli->num_rows() ?>, <?= $dlagustus->num_rows() ?>, <?= $dlseptember->num_rows() ?>, <?= $dloktober->num_rows() ?>, <?= $dlnovember->num_rows() ?>, <?= $dldesember->num_rows() ?>],
                    borderColor: 'rgba(40,167,69,0.75)',
                    borderWidth: "0",
                    backgroundColor: "rgba(40,167,69, 0.5)"
                  },
                  {
                    label: "Uang",
                    data: [<?= $dujanuari->num_rows() ?>, <?= $dufebruari->num_rows() ?>, <?= $dumaret->num_rows() ?>, <?= $duapril->num_rows() ?>, <?= $dumei->num_rows() ?>, <?= $dujuni->num_rows() ?>, <?= $dujuli->num_rows() ?>, <?= $duagustus->num_rows() ?>, <?= $duseptember->num_rows() ?>, <?= $duoktober->num_rows() ?>, <?= $dunovember->num_rows() ?>, <?= $dudesember->num_rows() ?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                  }
                ]
              },
              options: {
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
            });
          </script>
        </div>
      </div>

    <?php endif; ?>

    <?php if ($this->fungsi->user_login()->role != 2) { ?>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <div class="stat-widget-one">
              <div class="stat-icon dib"><i class="fa fa-share text-primary border-primary"></i></div>
              <div class="stat-content dib">
                <div class="stat-text">Total Surat Masuk</div>
                <div class="stat-digit"><?= $surat_masuk->num_rows(); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <div class="stat-widget-one">
              <div class="stat-icon dib"><i class="fa fa-edit text-warning border-warning"></i></div>
              <div class="stat-content dib">
                <div class="stat-text">Total Surat Keluar</div>
                <div class="stat-digit"><?= $surat_keluar->num_rows(); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <div class="stat-widget-one">
              <div class="stat-icon dib"><i class="fa fa-inbox text-success border-success"></i></div>
              <div class="stat-content dib">
                <div class="stat-text">Total Inventaris</div>
                <div class="stat-digit"><?= $inventaris->num_rows(); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <div class="stat-widget-one">
              <div class="stat-icon dib"><i class="fa fa-book text-danger border-danger"></i></div>
              <div class="stat-content dib">
                <div class="stat-text">Total Buku Tamu</div>
                <div class="stat-digit"><?= $buku_tamu->num_rows(); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    </div>
  </div>

  <?php if ($this->fungsi->user_login()->role != 2) { ?>
    <div class="row">
      <div class="col-md-12">
        <div class="col-lg-6">
          <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
              <h4 class="mb-3">Grafik Surat Masuk dan Keluar</h4>
              <canvas id="surat-chart"></canvas>
            </div>
          </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
          <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
              <h4 class="mb-3">Grafik Siswa</h4>
              <canvas id="anakBarChart"></canvas>
            </div>
          </div>
        </div><!-- /# column -->

        <!--  Chart js -->
        <script src="<?= base_url() ?>assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>

        <script type="text/javascript">
          //Surat chart
          var ctx = document.getElementById("surat-chart");
          ctx.height = 150;
          var myChart = new Chart(ctx, {
            type: 'line',
            data: {
              labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
              type: 'line',
              defaultFontFamily: 'Montserrat',
              datasets: [{
                label: "Surat Masuk",
                data: [<?= $januari->num_rows() ?>, <?= $februari->num_rows() ?>, <?= $maret->num_rows() ?>, <?= $april->num_rows() ?>, <?= $mei->num_rows() ?>, <?= $juni->num_rows() ?>, <?= $juli->num_rows() ?>, <?= $agustus->num_rows() ?>, <?= $september->num_rows() ?>, <?= $oktober->num_rows() ?>, <?= $november->num_rows() ?>, <?= $desember->num_rows() ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgba(0,123,255,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(0,123,255,0.75)',
              }, {
                label: "Surat Keluar",
                data: [<?= $sjanuari->num_rows() ?>, <?= $sfebruari->num_rows() ?>, <?= $smaret->num_rows() ?>, <?= $sapril->num_rows() ?>, <?= $smei->num_rows() ?>, <?= $sjuni->num_rows() ?>, <?= $sjuli->num_rows() ?>, <?= $sagustus->num_rows() ?>, <?= $sseptember->num_rows() ?>, <?= $soktober->num_rows() ?>, <?= $snovember->num_rows() ?>, <?= $sdesember->num_rows() ?>],
                backgroundColor: 'transparent',
                borderColor: 'rgba(40,167,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(40,167,69,0.75)',
              }]
            },
            options: {
              responsive: true,

              tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
              },
              legend: {
                display: false,
                labels: {
                  usePointStyle: true,
                  fontFamily: 'Montserrat',
                },
              },
              scales: {
                xAxes: [{
                  display: true,
                  gridLines: {
                    display: false,
                    drawBorder: false
                  },
                  scaleLabel: {
                    display: false,
                    labelString: 'Month'
                  }
                }],
                yAxes: [{
                  display: true,
                  gridLines: {
                    display: false,
                    drawBorder: false
                  },
                  scaleLabel: {
                    display: true,
                    labelString: 'Value'
                  }
                }]
              },
              title: {
                display: false,
                text: 'Normal Legend'
              }
            }
          });
        </script>

        <script>
          // single bar chart
          var ctx = document.getElementById("anakBarChart");
          ctx.height = 150;
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ["2020", "2021", "2022", "2023"],
              datasets: [{
                label: "Jumlah Anak Daftar Pesantren",
                data: [<?= $tujuhbelas->num_rows() ?>, <?= $delapanbelas->num_rows() ?>, <?= $sembilanbelas->num_rows() ?>, <?= $sekarang->num_rows() ?>],
                borderColor: "rgba(220, 53, 69, 0.9)",
                borderWidth: "0",
                backgroundColor: "rgba(220, 53, 69, 0.5)"
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>
      </div>
    </div>
  <?php } ?>