<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- navbar -->
        @include('template.head')
        <!--/.navbar -->
        <!-- main sidebar container -->
        @include('template.sidebar')
        <!-- content wrapper.contains page content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">terpadu</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Anak</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--/content-header -->
        <!-- main content -->
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="#" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
            
                <h3></h3>Create Data Anak
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nik anak</th>
                            <th>No kk</th>
                            <th>Nama Anak</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama orang tua</th>
                            <th>Anak ke</th>
                            <th>Alamat</th>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" id="nik_anak" name="nik_anak" class="form-control" placeholder="nik_anak">
                        </div>
                        <div class="form-group">
                            <textarea name="nama" name="nik_anak" class="form-control" placeholder="nik_anak">
                        <div class="form-group">
                            <button type="submit class="btn btn-succes