
@extends('layout.auth')

@section('title', 'Login')

@section('content')
    <!-- START card-->
    <div class="card card-flat mx-auto" id="login">
        <div class="card-header text-center bg-dark">
            <a href="#">
                <img class="block-center rounded" src="{{ asset('img/mpesa-logo2.png') }}" width="190" height="60" alt="Image">
            </a>
        </div>

        @include('layout.flash-messages')

        <div class="card-body">
            <p class="text-center py-2 h5"><strong> M-PESAKYA </strong></p>
            <login-form></login-form>
            {{-- <router-view></router-view> --}}
            <vue-progress-bar></vue-progress-bar>
        </div>
    </div>
    <!-- END card-->
@endsection
