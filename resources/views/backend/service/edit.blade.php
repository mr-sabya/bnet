@extends('backend.layouts.app')

@section('title', 'Edit Service')

@section('content')
<div class="main">
    <livewire:backend.service.edit id="{{ $id }}"/>
</div>
@endsection