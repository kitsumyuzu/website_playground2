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
                            <!-- start: daftar anak selesai bermain -->
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="justify-content-end d-flex mb-2">
                                                <a href="/Home/view_insert_user/"><i class="fas fa-user-plus"></i> <small>Tambahkan user baru</small></a>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr align="center">
                                                            <th>#</th>
                                                            <th>Username</th>
                                                            <th>Email</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr align="center">
                                                            <td>1.</td>
                                                            <td>Admin</td>
                                                            <td>admin@root.com</td>
                                                            <td>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-refresh" style="color: #ffc100"></i></button>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-delete-sweep" style="color: #ff0000"></i></button>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-information-variant" style="color: #248afd"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr align="center">
                                                            <td>2.</td>
                                                            <td>Kasir</td>
                                                            <td>kasir@root.com</td>
                                                            <td>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-refresh" style="color: #ffc100"></i></button>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-delete-sweep" style="color: #ff0000"></i></button>
                                                                <button class="btn btn-link btn-sm"><i class="mdi mdi-information-variant" style="color: #248afd"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- end: daftar anak selesai bermain -->
                        </div>