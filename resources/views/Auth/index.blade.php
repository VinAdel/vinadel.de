@extends('Layouts.app')

@section('CSS')
<link rel="stylesheet" href="{{ asset('css/view/dashboard.css') }}">
@endsection

@section('body')
<section>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="box warning">
            <div class="warning-icon"><i class="bi bi-exclamation-circle"></i></div>
            <div class="warning-title">Hinweis!</div>
            <div class="warning-close-open"><i class="bi bi-chevron-up"></i></div>
        </div>
        <div class="row">
            <div class="eight columns">
                <div class="box"></div>
            </div>
        </div>
    </div>
</section>
@endsection