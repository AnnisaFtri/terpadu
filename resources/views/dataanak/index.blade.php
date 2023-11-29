@extends('layout.app')
@section('title', 'dataanak')
@section('content')

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>dataanak</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<!-- <style>
body {
	color: #566787;
	background: linear-gradient(45deg,#FFFFFF,#1ADAF1);
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}

</style> -->
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<!-- </head>
<body> -->
<div class="container-xl" style="margin-left: 100px; width: 100%">
	<div class="table-responsive">
		
			<div class="table-title">
				<div class="row">
					<div class="col-10">
						<h2>DATA<b>ANAK</b></h2>
					</div>
					<div class="col-sm-2">
						<a href="#addEmployeeModal" class="btn btn-success" style="width: 150px;" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" style="width: 150px;" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
							<span class="custom-checkbox">
								
							</span>
						</th>
						<tr>
                            <th>No</th>
                            <th>Nik Anak</th>
                            <th>No Kk</th>
                            <th>Nama</th>
                            <th>Nama Orangtua</th>
                            <th>JK</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
                                1
								
							</span>
						</td>
                        <td>3245678723</td>
                        <td>325672004</td>
                        <td>ANISTIA FEY</td>
                        <td>SAPUTRA</td>
                        <td>P</td>
                        <td>May 06,2021</td>
                        <td>JL.BENING RAYA 1 BLOK A</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
                                2
								
							</span>
						</td>
		
                        <td>3237121724</td>
                        <td>326752002</td>
                        <td>BUMI TARA</td>
                        <td>ANGKASA</td>
                        <td>L</td>
                        <td>Sep13,2021</td>
                        <td>JL.BENING RAYA 1 BLOK A NO.3</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								3
							</span>
						</td>
                        <td>3245371725</td>
                        <td>328762003</td>
                        <td>KIRANA VICTORIA</td>
                        <td>HENDRY VICTORIA</td>
                        <td>P</td>
                        <td>Jan 20,2020</td>
                        <td>JL.BENING RAYA 1, BLOK B.10</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								4
							</span>
						</td>
						<td>3245371726</td>
                        <td>329872005</td>
                        <td>FERONICA MECCA</td>
                        <td>STEVEN MECCA</td>
                        <td>P</td>
                        <td>Apr 02, 2022</td>
                        <td>JL.BENING RAYA 1, BLOK B NO.8</td>>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								5
							</span>
						</td>
						<td>3245371727</td>
                        <td>323452006</td>
                        <td>TERRALA AYU</td>
                        <td>PANTARA</td>
                        <td>P</td>
                        <td>Feb 17, 2022</td>
                        <td>JL.BENING RAYA 1, BLOK A NO.15</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" action="/tambah">
				<div class="modal-header">						
					<h4 class="modal-title">Tambah Data Anak</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
                    				
                <div class="form-group">
						<label>Nik</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nama Orangtua</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>name</label>
						<input type="text"  class="form-control" required></textarea>
					</div>
                    <div class="form-group">
						<label>JK</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="text" class="form-control" required>
					</div>		
                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" required>
					</div>							
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nik</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nama Orangtua</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>name</label>
						<input type="text"  class="form-control" required></textarea>
					</div>
                    <div class="form-group">
						<label>JK</label>
						<input type="text" class="form-control" required>
					</div>
                    <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="text" class="form-control" required>
					</div>		
                    <div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" required>
					</div>																		
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
