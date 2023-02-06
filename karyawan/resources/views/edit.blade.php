

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

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('template.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Karyawan</h6>
        </div>
      
                <div class="card-body">
				@foreach($karyawan as $p)
				<form action="/datakaryawan/update" method="post">
				{{ csrf_field() }}
				<div class="row form-group">
				<input type="hidden" name="id" value="{{ $p->idkaryawan }}"> <br/>
                            <label for="nama" class="col-md-4 text-md-right ">Nama</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control " id="namakaryawan"value="{{ $p->namakaryawan }}" name="namakaryawan">
                               
                            </div>
                        </div>


                        <div class="row form-group">
                            <label for="username" class="col-md-4 text-md-right ">umur</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control " id="umur" name="umur" value="{{ $p->umur }}">
                               
                            </div>

                        </div>

                        <div class="row form-group">
                            <label for="username" class="col-md-4 text-md-right ">Alamat</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control " id="alamat" name="alamat" value="{{ $p->alamat }}">
                                
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="username" class="col-md-4 text-md-right ">No. Telp</label>
                            <div class="col-lg-7">
                                <input type="number" class="form-control " id="nohp" name="nohp" value="{{ $p->nohp }}">
                             
                            </div>
                        </div>


                        <div class="float-right">
                            <a href="/datakaryawan" class="btn btn-danger"><i class="fa fa-arrow-left"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Simpan</button>

                        </div>
						</form>
						@endforeach
                </div>
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

</body>

</html>