<html>
<head>
	<meta charset="UTF-8">
	<title><?=$title.' | '?>WEB</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
	<div class="container">
		<br>	
		<a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalaAdd">+ Add User</a>
		<table class="table table-bordered table-hoveer" id="mydata">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No Hp</th>
					<th>Jenis Kelamin</th>
					<th></th>
				</tr>
			</thead>
			<tbody id="show"></tbody>
		</table>

			<!-- MODAL ADD -->
	        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
	            <div class="modal-dialog">
	            <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                <h3 class="modal-title" id="myModalLabel">Tambah User Baru</h3>
	            </div>
	            <form class="form-horizontal">
	                <div class="modal-body">
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >ID</label>
	                        <div class="col-xs-9">
	                            <input name="id_user" id="id_user" class="form-control" type="text" placeholder="ID User" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Nama</label>
	                        <div class="col-xs-9">
	                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama User" style="width:335px;" required>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Alamat</label>
	                        <div class="col-xs-9">
	                            <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >No Hp</label>
	                        <div class="col-xs-9">
	                            <input name="hp" id="hp" class="form-control" type="text" placeholder="Hp" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
	                        <div class="col-xs-9">
	                            <select name="jenkel" id="jenkel" required class="form-control">
	                            	<option value="">- Pilih Jenis Kelamin -</option>
	                            	<option value="L">Laki - Laki</option>
	                            	<option value="P">Perempuan</option>
	                            </select>
	                        </div>
	                    </div>
	                </div>

	                <div class="modal-footer">
	                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
	                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
	                </div>
	            </form>
	            </div>
	            </div>
	        </div>
	        <!--END MODAL ADD-->
	         <!-- MODAL EDIT -->
	        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
	            <div class="modal-dialog">
	            <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                <h3 class="modal-title" id="myModalLabel">Edit Barang</h3>
	            </div>
	            <form class="form-horizontal">
	                <div class="modal-body">
						<div class="form-group">
	                        <label class="control-label col-xs-3" >ID</label>
	                        <div class="col-xs-9">
	                            <input name="id_user_edit" id="id_user_edit" class="form-control" type="text" placeholder="ID User" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Nama</label>
	                        <div class="col-xs-9">
	                            <input name="nama_edit" id="nama_edit" class="form-control" type="text" placeholder="Nama User" style="width:335px;" required>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Alamat</label>
	                        <div class="col-xs-9">
	                            <input name="alamat_edit" id="alamat_edit" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >No Hp</label>
	                        <div class="col-xs-9">
	                            <input name="hp_edit" id="hp_edit" class="form-control" type="text" placeholder="Hp" style="width:335px;" required>
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label class="control-label col-xs-3" >Jenis Kelamin</label>
	                        <div class="col-xs-9">
	                            <select name="jenkel_edit" style="width:335px;" id="jenkel_edit" required class="form-control">
	                            	<option value="">- Pilih Jenis Kelamin -</option>
	                            	<option value="L">Laki - Laki</option>
	                            	<option value="P">Perempuan</option>
	                            </select>
	                        </div>
	                    </div>
	                </div>

	                <div class="modal-footer">
	                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
	                    <button class="btn btn-info" id="btn_update">Update</button>
	                </div>
	            </form>
	            </div>
	            </div>
	        </div>
	        <!--END MODAL EDIT-->
	         <!--MODAL HAPUS-->
	        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	            <div class="modal-dialog" role="document">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
	                        <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
	                    </div>
	                    <form class="form-horizontal">
	                    <div class="modal-body">
	                                          
	                            <input type="hidden" name="id_user_hapus" id="textkode" value="">
	                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus User ini?</p></div>
	                                        
	                    </div>
	                    <div class="modal-footer">
	                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
	                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
	                    </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	        <!--END MODAL HAPUS-->

	</div>


	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
	<script>
		$(document).ready(function () {
			$('#mydata').dataTable();

			getAllData();

			function getAllData() {
				$.ajax({
		        type  : 'ajax',
		        url   : '<?php echo base_url()?>index.php/user/get_all_data',
		        async : false,
		        dataType : 'json',
		        success : 	function(data){
					            var html = '';
					            var i;
					            for(i=0; i<data.length; i++){
					                html += '<tr>'+
					                  		'<td>'+data[i].id+'</td>'+
					                  		'<td>'+data[i].nama+'</td>'+
					                        '<td>'+data[i].alamat+'</td>'+
					                        '<td>'+data[i].no_hp+'</td>'+
					                        '<td>'+data[i].jenis_kelamin+'</td>'+
					                        '<td style="text-align:right;">'+
			                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'">Edit</a>'+' '+
			                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'">Hapus</a>'+
			                                '</td>'+
					                        '</tr>';
					            }
					            $('#show').html(html);
					        }

				});
			}

			//Simpan Barang
			$('#btn_simpan').on('click',function(){
	            var id_user=$('#id_user').val();
	            var nama=$('#nama').val();
	            var alamat=$('#alamat').val();
	            var hp=$('#hp').val();
	            var jenkel=$('#jenkel').val();
	            $.ajax({
	                type : "POST",
	                url  : "<?php echo base_url('index.php/user/simpan')?>",
	                dataType : "JSON",
	                data : {
							id_user:id_user,
							nama:nama,
							alamat:alamat,
							hp:hp,
							jenkel:jenkel,
	                },
	                success: function(data){
	                    $('[name="id_user"]').val("");
	                    $('[name="nama"]').val("");
	                    $('[name="alamat"]').val("");
	                    $('[hp="hp"]').val("");
	                    $('[jenkel="jenkel"]').val("");
	                    
	                    $('#ModalaAdd').modal('hide');
	                    getAllData();
	                }
	            });
	            return false;
	        });

	        //GET UPDATE
			$('#show').on('click','.item_edit',function(){
	            var id=$(this).attr('data');
	            $.ajax({
	                type : "GET",
	                url  : "<?php echo base_url('index.php/user/get_row')?>",
	                dataType : "JSON",
	                data : {id:id},
	                success: function(data){
	                	$.each(data,function(id, nama, alamat, no_hp, jenis_kelamin){
	                    	$('#ModalaEdit').modal('show');
	            			$('[name="id_user_edit"]').val(data.id);
	            			$('[name="nama_edit"]').val(data.nama);
	            			$('[name="alamat_edit"]').val(data.alamat);
	            			$('[name="hp_edit"]').val(data.no_hp);
	            			$('[name="jenkel_edit"]').val(data.jenis_kelamin);
	            		});
	                }
	            });
	            return false;
	        });

	        //Update Barang
			$('#btn_update').on('click',function(){
	            var id_user=$('#id_user_edit').val();
	            var nama=$('#nama_edit').val();
	            var alamat=$('#alamat_edit').val();
	            var hp=$('#hp_edit').val();
	            var jenkel=$('#jenkel_edit').val();
	            $.ajax({
	                type : "POST",
	                url  : "<?php echo base_url('index.php/user/update')?>",
	                dataType : "JSON",
	                data : {
	                	id_user:id_user,
						nama:nama,
						alamat:alamat,
						hp:hp,
						jenkel:jenkel,
	                },
	                success: function(data){
	                    $('[name="id_user_edit"]').val("");
	                    $('[name="nama_edit"]').val("");
	                    $('[name="alamat_edit"]').val("");
	                    $('[name="hp_edit"]').val("");
	                    $('[name="jenkel_edit"]').val("");

	                    $('#ModalaEdit').modal('hide');
	                    
	                    getAllData();
	                }
	            });
	            return false;
	        });

	        //GET HAPUS
			$('#show').on('click','.item_hapus',function(){
	            var id=$(this).attr('data');
	            $('#ModalHapus').modal('show');
	            $('[name="id_user_hapus"]').val(id);
	        });

	        //Hapus Barang
	        $('#btn_hapus').on('click',function(){
	            var kode=$('#textkode').val();
	            $.ajax({
	            type : "POST",
	            url  : "<?php echo base_url('index.php/user/hapus_user')?>",
	            dataType : "JSON",
	                    data : {id_user: kode},
	                    success: function(data){
	                            $('#ModalHapus').modal('hide');
	                            getAllData();
	                    }
	                });
	                return false;
	        });
		});
	</script>
</body>
</html>