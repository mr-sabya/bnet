@extends('frontend.layouts.app')

@section('title', 'About Us')

@section('content')
<!-- breadcrumb-area -->
<livewire:frontend.component.breadcrumb title="About Us"/>
<!-- breadcrumb-area end -->

<!-- about-area -->
<livewire:frontend.about.text />
<!-- about-area-end -->

<!-- counter-area -->
<livewire:frontend.component.counter />
<!-- counter-area-end -->

<!-- cta-area -->
<livewire:frontend.component.cta-area />
<!-- cta-area-end -->

<!-- experience-area -->
<livewire:frontend.component.experience />
<!-- experience-area-end -->

<!-- faq-area -->
<livewire:frontend.component.faq />
<!-- faq-area-end -->

<!-- brand-area -->
<livewire:frontend.component.brands />
<!-- brand-area-end -->
@endsection