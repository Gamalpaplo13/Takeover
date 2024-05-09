@extends('frontend.layouts.master')

@section('content')

    <!------------------------------------------------------Start-Landing------------------------------------------------------->
    @include('frontend.home.sections.loading')
    <!------------------------------------------------------End-Landing------------------------------------------------------->

    <!------------------------------------------------------Start-Summercollection------------------------------------------------------->
    @include('frontend.home.sections.summer-collection')
    <!------------------------------------------------------End-Summercollection------------------------------------------------------->

    <!------------------------------------------------------Start-Product_filter------------------------------------------------------->
    @include('frontend.home.sections.product-filter')
    <!------------------------------------------------------End-Product_filter------------------------------------------------------->
    <!------------------------------------------------------Start-grid section------------------------------------------------------->
    @include('frontend.home.sections.category-grid')
    <!------------------------------------------------------End-grid section------------------------------------------------------->

@endsection
