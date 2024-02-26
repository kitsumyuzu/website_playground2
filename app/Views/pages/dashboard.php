                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-4">
                                        <h3 class="font-weight-bold">Welcome <?php echo ucwords(session() -> username) ?></h3>
                                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                                    </div>
                                    <div class="col-8">
                                        <div class="justify-content-end d-flex">
                                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                                <button class="btn btn-sm btn-light bg-white" type="button">
                                                    <i class="icon-globe"></i> <?php $date = new DateTime('now', new DateTimeZone('Asia/Jakarta')) ?> <?php echo  $date -> format('Y-m-d'); ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="justify-content-end d-flex">
                                            <a href="#"><i class="far fa-calendar-check"></i> <small>Tambahkan paket bermain</small></a>
                                        </div>

                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="form-group col-md-4 grid-margin">
                                                    <label for="">Nama Anak</label>
                                                    <input type="text" class="form-control" id="" placeholder="Nama Anak" name="nama_anak">
                                                </div>
                                                <div class="form-group col-md-4 grid-margin">
                                                    <label for="">Nama Ortu</label>
                                                    <input type="text" class="form-control" id="" placeholder="Nama Ortu" name="nama_ortu">
                                                </div>
                                                <div class="form-group col-md-4 grid-margin">
                                                    <label for="">Paket</label>
                                                    <select name="" id="" class="form-control">
                                                        <option selected disabled>Pilih paket</option>

                                                        <?php foreach($data_paket as $data) { ?>

                                                            <option value="<?php echo $data['id_paket'] ?>"><?php echo ucwords($data['nama_paket']) ?></option>

                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="row">
                            <!-- start: daftar anak bermain -->
                                <div class="col-md-6 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="5">Daftar Anak Bermain</th>
                                                        </tr>
                                                        <tr align="center">
                                                            <th>#</th>
                                                            <th>nama anak</th>
                                                            <th>nama ortu</th>
                                                            <th>paket</th>
                                                            <th>harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr align="center">
                                                            <td>1.</td>
                                                            <td>cina</td>
                                                            <td>yanto</td>
                                                            <td>1 jam</td>
                                                            <td>Rp 20.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end: daftar anak bermain -->
                            <!-- start: daftar anak selesai bermain -->
                                <div class="col-md-6 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr align="center">
                                                            <th colspan="5">Daftar Anak Selesai Bermain</th>
                                                        </tr>
                                                        <tr align="center">
                                                            <th>#</th>
                                                            <th>nama anak</th>
                                                            <th>nama ortu</th>
                                                            <th>paket</th>
                                                            <th>harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr align="center">
                                                            <td>1.</td>
                                                            <td>cina</td>
                                                            <td>yanto</td>
                                                            <td>1 jam</td>
                                                            <td>Rp 20.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end: daftar anak selesai bermain -->
                        </div>