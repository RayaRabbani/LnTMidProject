<!DOCTYPE html>
<html lang="en">

<head>
<title>SI Karyawan</title>
@include('template.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('template.sidebar')

   

@include('template.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-4 text-gray-800">Data Karyawan</h1>
    <hr>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="float-right"><a href="/datakaryawan/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a></div>
        </div>
        <div class="row no-gutters">
            <div class="table-responsive">
      
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Nama Karyawan</th>
                                    <th scope="col" class="text-center">Umur</th>
                                    <th scope="col" class="text-center">alamat</th>
                                    <th scope="col" class="text-center">No. Telp</th>

                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
          
                                <tbody>
                                    
                                @foreach($karyawan as $p)
                               
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $p->namakaryawan }}</td>
                                        <td>{{ $p->umur }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>{{ $p->nohp }}</td>
                                        <td>
                                            <a href="/datakaryawan/edit/{{ $p->idkaryawan }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</a>
                                            |
                                            <a href="/datakaryawan/hapus/{{ $p->idkaryawan }}" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;&nbsp;Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         @include('template.footer')

