@extends('layouts.front')
@section('main')

@include('inc.inner-hero', ['heading'=>"Who We Are?", 'subheading'=>"Cake Specialist"])

@include('inc.about-description')

@include('inc.story-section', ['heading' => "A Simple Way to Eating Delicious", 'description' => "Land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning laboris nisi ufsit aliquip ex ea commodo conse quat is aute irure, quis nostrud exer."])

@include('inc.our-services')

@include('inc.bg-attachment2')

@include('inc.testimonial')

@include('inc.insta-gallery')

@endsection

