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

                        <form action="/Home/change_settings/" method="post" enctype="multipart/form-data">
						    <div class="row">
                                <div class="col-md-4 d-flex align-items-center justify-content-center">
                                    <div class="card" style="background-color: #c3c3c3">
                                        <div class="card-body">
                                            <img src="<?php echo base_url('assets/images/items/'.($data_settings['web_profile'] ? $data_settings['web_profile'] : 'logo-brand-collapse.png')) ?>" id="image_preview" alt="profile" style="height:200px; width:200px; object-fit: cover;">
                                        </div>
                                    </div>
                                </div>

                                <!-- SEPARATOR -->

                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="/Home/change_settings/" method="post">
                                                <div class="row">
                                                    <input type="hidden" name="oldicon" value="<?php $data_settings['web_profile'] ?>">
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Website Icon</label>
                                                        <input type="file" class="form-control" id="image_input" name="icon">
                                                    </div>
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">Website Title</label>
                                                        <input type="text" class="form-control" id="title" name="title" maxlength="25" value="<?php echo $data_settings['web_title'] ?>">
                                                    </div>                                                    
                                                </div>
                                                    <div class="form-group grid-margin">
                                                        <label for="">Website Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="10"><?php echo $data_settings['web_description'] ?></textarea>
                                                    </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6 grid-margin">
                                                        <label for="">App Tax</label>
                                                        <input type="number" class="form-control" id="tax" name="tax" min="0" max="100" value="<?php echo ($data_settings['app_tax'] ? $data_settings['app_tax'] : '0')?>">
                                                    </div
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

                            document.getElementById("image_input").onchange = function() {

                                document.getElementById("image_preview").src = URL.createObjectURL(image_input.files[0]);

                            }

                        </script>