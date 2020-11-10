                    <!--page title start-->
                    <div class="page-heading">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <div class="page-breadcrumb">
                                        <h1>Daftar Kegiatan</h1>
                                    </div>
                                </div>
                                <div class="col-12 justify-content-md-end d-flex">
                                    <div class="breadcrumb_nav">
                                        <ol class="breadcrumb">
                                            <li>
                                                <i class="fa fa-home"></i>
                                                <a class="parent-item" href="index-2.html">Home</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li class="active">
                                                Daftar Semua Kegiatan
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--page title end-->
                    <div class="container-fluid">
                        <!-- state start-->
                        <div class="row">
                            <div class=" col-12">
                                <div class="card card-shadow mb-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            Data Tables
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="bs4-table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kegiatan</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                          <?php 
                                            $no = 1;
                                            foreach ($data as $dt) { ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $dt['kegiatan'] ?></td>
                                                    <td><?= date_indo($dt['tanggal']) ?> - <?= $dt['waktu'] ?></td>
                                                      <td>
                                                        <?php if ($dt['status'] == "Mulai"): ?>
                                                          <small class="badge badge-info"><?= $dt["status"] ?></small>
                                                        <?php elseif ($dt['status'] == "Proses"): ?>
                                                          <small class="badge badge-warning"><?= $dt["status"] ?></small>
                                                        <?php elseif ($dt['status'] == "Selesai"): ?>
                                                          <small class="badge badge-success"><?= $dt["status"] ?></small>
                                                        <?php endif ?>
                                                      </td>
                                                      <td></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- state end-->
                    </div>
