
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
                    <h2 class="mb-5" style="font-weight: 100; font-size: 1.5rem;">Welcome to Prescriptions</h2>
                <!-- Add more dashboard widgets/content here -->
            </div>
        </div>
    </div>
@endsection
