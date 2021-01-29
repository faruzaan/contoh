@extends('templates/header')

@section('contents')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active">Tambah User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{url('user/add')}}" class="btn bg-purple">
                <i class="fa fa-chevron-left"></i>Kembali
              </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{url('user/add')}}" class="form-horizontal" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama Depan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_depan" class="form-control" placeholder="Masukan Nama Depan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Nama Belakang</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_belakang" class="form-control" placeholder="Masukan Nama Belakang">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" placeholder="Masukan Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="text" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2">Tipe User</label>
                        <div class="col-sm-10">
                            <select name="id_tipe_data" class="form-control">
                                @foreach (\App\Models\TipeUser::all() as $tipeuser)
                                    <option value="{{$tipeuser->id_tipe_user}}" {{@$result->id_tipe_user == $tipeuser->id_tipe_user ? 'selected' : ''}}>
                                    {{$tipeuser->tipe_user}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                            Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
