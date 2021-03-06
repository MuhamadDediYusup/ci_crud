<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Data Mahasiswa</h4>
				<ul class="breadcrumbs">
					<li class="nav-item active">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item active">
						<a href="#">Data Mahasiswa</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
				</ul>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="d-flex align-items-center">
							<h4 class="card-title">Tambah Data Mahasiswa</h4>
							<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
								<i class="fa fa-plus"></i>
								Tambah Data Mahasiswa
							</button>
						</div>
					</div>
					<div class="card-body">
						<!-- Modal -->
						<?php echo form_open('C_mahasiswa/tambah_data'); ?>
						<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header no-bd">
										<h5 class="modal-title">
											<span class="fw-mediumbold">
												Tambah Data </span>
											<span class="fw-light">
												Mahasiswa
											</span>
										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p class="small">Silahkan Inputkan Data Mahasiswa</p>
										<form>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group form-group-default">
														<label>Nama</label>
														<input id="nama" type="text" class="form-control" placeholder="fill name" name="nama">
													</div>
												</div>
												<div class="col-md-6 pr-0">
													<div class="form-group form-group-default">
														<label>NIM</label>
														<input id="nim" type="text" class="form-control" placeholder="fill position" name="nim">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Fakultas</label>
														<select class="form-control" name="fakultas">
															<option>Fakultas Teknik</option>
															<option>Fakultas Ekonomi dan Bisnis</option>
															<option>Fakultas Hukum</option>
															<option>Fakultas Pertanian</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Program Studi</label>
														<input id="programstudi" type="text" class="form-control" placeholder="fill office" name="programstudi">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-default">
														<label>Tahun Angkatan</label>
														<input id="tahunangkatan" type="text" class="form-control" placeholder="fill office" name="tahunangkatan">
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer no-bd">
										<button type="submit" class="btn btn-primary">Add</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<?php form_close(); ?>
						<div class="table-responsive">
							<table id="add-row" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Nama</th>
										<th>NIM</th>
										<th>Fakultas</th>
										<th>Program Studi</th>
										<th>Tahun Angkatan</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($rowrecord)) {
										foreach ($rowrecord as $row) { ?>

											<tr>
												<td><?php echo $row->Nama ?></td>
												<td><?php echo $row->NIM ?></td>
												<td><?php echo $row->Fakultas ?></td>
												<td><?php echo $row->ProgramStudi ?></td>
												<td><?php echo $row->TahunAngkatan ?></td>
												<td>
													<div class="form-button-action">
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <a href="<?php echo base_url('index.php/c_mahasiswa/edit/' . $row->id) ?>"><i class="fa fa-edit"></a></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><a href="<?php echo base_url('index.php/c_mahasiswa/hapusdata/' . $row->id) ?>"><i class="fa fa-times"></i></a>
														</button>
												<?php   }
										} else {
											echo "No returned data";
										} ?>
												</td>
											</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>