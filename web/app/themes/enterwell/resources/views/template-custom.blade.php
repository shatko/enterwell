{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')

    {!! do_shortcode('[contact-form-7 id="e52367a" title="Contact form 1"]') !!}
  @endwhile
@endsection
