@extends('main.main')

@section('container')
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Resto</b>Menu</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    @livewire('login-method')
    <!-- /.login-card-body -->
  </div>
</div>
@endsection
