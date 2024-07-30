@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')
<!-- breadcrumb-area -->
<livewire:frontend.component.breadcrumb title="Services" />
<!-- breadcrumb-area end -->

<!-- inner-services-area -->
<livewire:frontend.service.text />
<!-- inner-services-area end -->

<!-- services-area -->
<livewire:frontend.component.services />
<!-- services-area-end -->

<!-- pricing-area -->
<livewire:frontend.component.pricing />
<!-- pricing-area-end -->

<!-- brand-area -->
<livewire:frontend.component.brands />
<!-- brand-area-end -->
@endsection