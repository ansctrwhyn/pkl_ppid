  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->

  	<div class=" container-fluid" style="padding-top: 65px">
  		<!-- Breadcrumbs-->
  		<ol class="breadcrumb shadow" style="background-color:#fff;">
  			<li class="breadcrumb-item">
  				<a href="<?= base_url("admin/") ?>dashboard">Dashboard</a>
  			</li>
  			<li class="breadcrumb-item active">Kategori Informasi</li>
  		</ol>
  		<!-- DataTables Example -->
  		<div class="card mb-3 shadow">
  			<!-- <div class="card-header" style="background-color:#F9EBEA;"><i class="fas fa-table"></i> Kategori Informasi</div> -->
  			<div class="card-header" style="letter-spacing:1px;">
  				<h3><i class="fas fa-table"></i> TABEL KATEGORI INFORMASI
  					<a href="<?= base_url('admin/addKategori'); ?>" class="btn btn-primary btn-md float-right"><i class="fas fa-plus"></i> Tambah Data</a>
  				</h3>
  			</div>
  			<div class="card-body">
  				<!-- <div id="message"> -->
  				<!-- <?= $this->session->flashdata('message'); ?> -->
  				<div class="flash-kategori" data-flashdata="<?= $this->session->flashdata('kategori'); ?>"></div>

  				<!-- </div> -->
  				<!-- <a href="<?= base_url('admin/addKategori'); ?>" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah</a> -->
  				<!-- <br><br> -->
  				<div class="table-responsive">
  					<table class="table table-bordered text-center table-striped" id="tabel_kategori" width="100%" cellspacing="0">
  						<!-- edited table-->
  						<thead>
  							<tr>
  								<th>No</th>
  								<th>Kategori</th>
  								<th>Aksi</th>
  							</tr>
  						</thead>
  						<tbody id="data">

  						</tbody>
  					</table>
  				</div>
  			</div>
  		</div>

  	</div>
  	<!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

  <script>
  	$(document).ready(function() {
  		$('#tabel_kategori').DataTable({
  			"processing": true,
  			"serverSide": true,
  			"ajax": {
  				"url": "<?= base_url('admin/get_ajax_kategori') ?>",
  				"type": "POST"
  			},
  			"columnDefs": [{
  				"targets": [0, -1],
  				"orderable": false
  			}],
  			"order": []

  		})
  	});
  </script>
