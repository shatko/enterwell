{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')

    @include('forms.form')

  @endwhile
@endsection
