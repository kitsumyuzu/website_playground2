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

                        <form action="/Home/update_user/?" method="post" enctype="multipart/form-data">
						    <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <div class="justify-content-center align-items-center d-flex">
                                            <img src="<?php echo base_url('assets/images/storage/'.($data_user['_profile'] ? $data_user['_profile'] : 'default-profile.png')) ?>" id="profile_preview" alt="profile" style="width: 70px; height: 70px; border-radius: 100%; object-fit: cover;">
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group grid-margin">
                                                <label for="">Username <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="text" class="form-control" id="username" name="username" maxlength="20" required value="<?php echo $data_user['username'] ?>">
                                            </div>
                                            <div class="form-group grid-margin">
                                                <label for="">Email <span style="color: #ff0000; font-size: 10px;">*required</span></label>
                                                <input type="text" class="form-control" id="email" name="email" maxlength="30" required value="<?php echo $data_user['email'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SEPARATOR -->

                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" method="post">

                                                <input type="hidden" name="id" value="<?php echo $data_user['id_user'] ?>">
                                                <input type="hidden" name="oldprofile" value="<?php echo $data_user['_profile'] ?>">

                                                <div class="form-group grid-margin">
                                                    <label for="">Foto profile</label>
                                                    <input type="file" class="form-control" id="profile_input" name="profile">
                                                </div>
                                                <div class="form-group grid-margin">
                                                    <label for="">NIK</label>
                                                    <input type="number" class="form-control" id="nik" name="nik" maxlength="20" value="<?php echo $data_user['nik'] ?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Nama Depan</label>
                                                        <input type="text" class="form-control" id="nama_depan" name="nama_depan" maxlength="25" value="<?php echo $data_user['nama_depan'] ?>">
                                                    </div>
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Nama Belakang</label>
                                                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" maxlength="75" value="<?php echo $data_user['nama_belakang'] ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" max="2006-12-31" value="<?php echo $data_user['tanggal_lahir'] ?>">
                                                    </div>
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" maxlength="255" value="<?php echo $data_user['tempat_lahir'] ?>">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer justify-content-end d-flex">
                                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <script>

                            document.getElementById("profile_input").onchange = function() {

                                document.getElementById("profile_preview").src = URL.createObjectURL(profile_input.files[0]);

                            }

                            // Password validation

                            document.addEventListener('DOMContentLoaded', function() {

                                var password = document.getElementById('password');
                                var confirm_password = document.getElementById('confirm_password');

                                function validatePassword() {

                                    if (password.value != confirm_password.value) {

                                        confirm_password.setCustomValidity('Please make sure its the correct password');

                                    } else {

                                        confirm_password.setCustomValidity('');

                                    }

                                }

                                password.addEventListener('change', validatePassword);
                                confirm_password.addEventListener('keyup', validatePassword);

                            });

                        </script>