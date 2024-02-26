                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-4">
                                        <h3 class="font-weight-bold">Pendaftaran user baru</h3>
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

                            <div class="col-md-4">
                                <div class="mb-2">
                                    <div class="justify-content-center align-items-center d-flex">
                                        <img src="<?php echo base_url('assets/images') ?>/default-profile.png" alt="profile" style="width: 200px; height: 200px; border-radius: 100%; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group grid-margin">
                                                <label for="">Username <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="text" class="form-control" id="username" name="username" maxlength="20" required>
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Email <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="text" class="form-control" id="username" name="username" maxlength="30" required>
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Password <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="password" class="form-control" id="password" name="password" maxlength="32" required>
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Confirm Password <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="password" class="form-control" id="password" name="password" maxlength="32" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- SEPARATOR -->

                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group grid-margin">
                                                <label for="">Foto profile</label>
                                                <input type="file" class="form-control" id="foto_profile" name="foto_profile">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">NIK</label>
                                                <input type="text" class="form-control" id="nik" name="nik" maxlength="20">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Nama Depan</label>
                                                <input type="text" class="form-control" id="nama_depan" name="nama_depan" maxlength="25">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Nama Belakang</label>
                                                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" maxlength="75">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" max="2006-12-31">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" maxlength="255">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer justify-content-end d-flex">
                                        <button class="btn btn-success btn-sm">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>

                            const password = document.getElementById('password');
                            const confirm_password = document.getElementById('confirm-password');

                            if (password == confirm_password) {

                                return;

                            } else if (password != confirm_password) {

                                alert('Password incorrect!');

                            }

                        </script>