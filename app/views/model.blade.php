@extends('layouts.fd')

@section('bheader')
	@include('bootstrap.header')
@stop

@section('content')
	@include('layouts.profile.model')		
@stop

@section('css')
	@include('includes.model.css')
@stop

@section('footer')
	@include('includes.footer')
@stop

@section('bfooter')
	@include('bootstrap.footer')
@stop