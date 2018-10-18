@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('admin-lte::layouts.content-wrapper.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
     <a href="/drafts">
      <i class="fa fa-home"></i>
      <span>transaksi</span>
      </a>
      <a href="/transactions">
      <i class="fa fa-home"></i>
      <span>list transaksi</span>
      </a>
      <a href="/products">
      <i class="fa fa-home"></i>
      <span>input product</span>
    </a>
     <a href="/units">
      <i class="fa fa-home"></i>
      <span>input satuan</span>
    </a>
    <a href="/backups">
      <i class="fa fa-home"></i>
      <span>backup data</span>
    </a>
  </li>
</ul>
@endsection
