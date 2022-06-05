@extends('layouts.backend.app',[
	'title' => 'Dashboard',
	'contentTitle' => 'Dashboard',
])
@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>@count('users')</h3>
        <p>Admin</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
      <a href="{{ route('admin.users.index') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>@count('artikel')</h3>
        <p>Artikel</p>
      </div>
      <div class="icon">
        <i class="fas fa-image"></i>
      </div>
      <a href="{{ route('admin.artikel.index') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>@count('pengumuman')</h3>
        <p>Pengumuman</p>
      </div>
      <div class="icon">
        <i class="fas fa-info"></i>
      </div>
      <a href="{{ route('admin.pengumuman.index') }}" class="small-box-footer">Selangkapnya <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
</div>
@stop