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
                        
                        <!-- start: daftar anak bermain -->
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr align="center">
                                                        <th colspan="5">Daftar Anak Bermain</th>
                                                    </tr>
                                                    <tr align="center">
                                                        <th>#</th>
                                                        <th>Nama Anak</th>
                                                        <th>Nama Orang Tua</th>
                                                        <th>Durasi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr align="center">
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>00:00:00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end: daftar anak bermain -->
                        
                        <!-- start: daftar anak selesai bermain -->
                            <div class="col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr align="center">
                                                        <th colspan="5">Daftar Anak Selesai Bermain</th>
                                                    </tr>
                                                    <tr align="center">
                                                        <th>#</th>
                                                        <th>Nama Anak</th>
                                                        <th>Nama Orang Tua</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr align="center">
                                                        <td>1.</td>
                                                        <td>Kei Rolando</td>
                                                        <td>Ismail</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning"><b>Pending</b></button>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>2.</td>
                                                        <td>Nur Yakerta</td>
                                                        <td>Nuel</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"><b>Paid</b></button>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>3.</td>
                                                        <td>Yanto</td>
                                                        <td>Sam</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-warning"><b>Pending</b></button>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td>4.</td>
                                                        <td>Zerunda</td>
                                                        <td>Budi</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success"><b>Paid</b></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end: daftar anak selesai bermain -->