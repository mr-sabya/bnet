@extends('frontend.layouts.app')

@section('title', 'News')

@section('content')
<!-- breadcrumb-area -->
<livewire:frontend.component.breadcrumb title="News" />
<!-- breadcrumb-area end -->

<!-- blog-area -->
<livewire:frontend.post.grid />
<!-- blog-area-end -->

<!-- brand-area -->
<livewire:frontend.component.brands />
<!-- brand-area-end -->

@endsection