@extends('layouts.front')
@section('main')

@include('inc.inner-hero',['heading'=>"Gallery", 'subheading'=>"Flavours"])

@include('inc.featured-images')

@include('inc.insta-gallery')

@endsection