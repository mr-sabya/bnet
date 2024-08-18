@extends('frontend.layouts.app')

@section('title', 'Get a Quote')

@section('content')
<!-- breadcrumb-area -->
<livewire:frontend.component.breadcrumb title="Get a Quote" />
<!-- breadcrumb-area end -->

<section class="contact-area section-space-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-5 text-center">Get Internet Connection?</h2>
                @php
                if(isset($_GET['package'])){
                $id = $_GET['package'];
                }else{
                $id = '';
                }

                @endphp

                <livewire:frontend.component.quote-form id="{{ $id }}" />
                <p class="mt-4 mb-4 text-center border-top pt-2">
                    You will receive our confirmation in your number about our coverage area in your region.
                </p>

                <div class="card mt-5">
                    <div class="card-body">
                        <div class="contact-info-wrap">
                            <h3 class="contact-info-title">Live Chat</h3>
                            <p>We are the broadband internet service provider at New</p>
                            <div class="live-chat">
                                <div class="icon"><i class="flaticon-chat"></i></div>
                                <a href="#" class="live-chat-link">Live Chat to Executive</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- brand-area -->
<livewire:frontend.component.pricing />
<!-- brand-area-end -->
@endsection