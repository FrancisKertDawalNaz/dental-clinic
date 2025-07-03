
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-9 p-4">
                <h2 class="mb-5" style="font-weight: 100; font-size: 1.5rem;">Welcome to Prescriptions</h2>
                <!-- Add more dashboard widgets/content here -->
            </div>
        </div>
    </div>
@endsection
