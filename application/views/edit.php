<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Form Edit</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Edit Data</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Edit</a>
							</li>
						</ul>
                    </div>
                    <?php
                        $no = 1;
                        foreach ($rowrecord as $row):
                    ?>

                    <?php echo form_open('C_mahasiswa/update'); ?>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Edit Data</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12 col-lg-16">
											<div class="form-group">
                                                <label for="email2">Nama</label>
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $row->id?>">
												<input name="nama" class="form-control" value="<?php echo $row->Nama ?> ">
                                            </div>
                                            <div class="form-group">
												<label for="email2">NIM</label>
												<input name="nim" class="form-control" value="<?php echo $row->NIM ?>">
                                            </div>
                                            <div class="form-group">
												<label for="email2">Fakultas</label>
												<input name="fakultas" class="form-control" value="<?php echo $row->Fakultas ?>">
                                            </div>
											<div class="form-group">
												<label for="email2">Program Studi</label>
												<input name="programstudi" class="form-control" value="<?php echo $row->ProgramStudi ?>">
                                            </div>
											<div class="form-group">
												<label for="email2">TahunAngkatan</label>
												<input name="tahunangkatan" class="form-control" value="<?php echo $row->TahunAngkatan ?>">
                                            </div>
											<input class="btn btn-success" type="submit" value="simpan"></label>

                                            <?php endforeach; ?>

                                            <?php 
                                                form_close();
                                            ?>
                             </div>
						</div>
					</div>
				</div>
			</div