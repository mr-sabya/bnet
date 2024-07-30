@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- breadcrumb-area -->
<livewire:frontend.component.breadcrumb title="Contact Us" />
<!-- breadcrumb-area end -->

<!-- contact-area -->
<livewire:frontend.contact.form />
<!-- contact-area-end -->

<!-- contact-map -->
<livewire:frontend.contact.map />
<!-- contact-map-end -->

<!-- brand-area -->
<livewire:frontend.component.brands className="section-space-top"/>
<!-- brand-area-end -->
@endsection