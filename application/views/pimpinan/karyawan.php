                    <!--page title start-->
                    <div class="page-heading">
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                               <!--  <div class="col-12">
                                    <div class="page-breadcrumb">
                                        <h1>Daftar Karyawan</h1>
                                    </div>
                                </div> -->
                                <div class="col-12 justify-content-md-end d-flex">
                                    <div class="breadcrumb_nav">
                                        <ol class="breadcrumb">
                                            <li>
                                                <i class="fa fa-home"></i>
                                                <a class="parent-item" href="index-2.html">Home</a>
                                                <i class="fa fa-angle-right"></i>
                                            </li>
                                            <li class="active">
                                                Daftar Semua Karyawan
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
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Karyawan</th>
                                                    <th>Unit</th>
                                                    <!-- <th>Ranking Bulan Ini</th> -->
                                                    <!-- <th>Aksi</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                          <?php 
                                            $no = 1;
                                            foreach ($data as $dt) {
                                                $unit = $this->db->get_where('unit', array('id' => $dt['id_unit']))->row();?>
                                                <?php if ($no == 1): ?>
                                                <tr align="center" style="background-color: gold">
                                                <?php elseif ($no == 2): ?>
                                                <tr align="center" style="background-color: silver">
                                                <?php elseif ($no == 3): ?>
                                                <tr align="center" style="background-color: #CD7F32">
                                                <?php else: ?>
                                                <tr align="center">
                                                <?php endif ?>
                                                    <td><?= $no++ ?></td>
                                                    <td align="center">
                                     <img class="img-circle pro_pic" src="<?php echo base_url().'upload/foto_user/'.$dt['foto'] ?>" alt=""> 
                                                    </td>
                                                    <td><?= $dt['nama'] ?></td>
                                                    <td><?= $unit->nama_unit ?></td>
                                                    <!-- <td><?= $dt['ranking_saw'] ?></td> -->
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
