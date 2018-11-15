@extends('template.layouts.blocks.skeleton')

@section('main')
	@include('template.layouts.blocks.header')
	{{Breadcrumbs::render()}}
	@yield('content')
@endsection