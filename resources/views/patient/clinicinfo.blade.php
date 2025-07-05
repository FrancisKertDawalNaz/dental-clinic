@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Clinic Info</h2>
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-success"><i class="bi bi-building me-2"></i>LSPU Dental Clinic</h5>

                    <p class="card-text mb-2"><i class="bi bi-geo-alt-fill me-2 text-secondary"></i><strong>Location:</strong> LSPU Campus, Admin Building, Room 102</p>
                    <p class="card-text mb-2"><i class="bi bi-telephone-fill me-2 text-secondary"></i><strong>Contact Number:</strong> (049) 501-5678</p>
                    <p class="card-text mb-2"><i class="bi bi-envelope-fill me-2 text-secondary"></i><strong>Email:</strong> dentalclinic@lspu.edu.ph</p>
                    <p class="card-text mb-2"><i class="bi bi-clock-fill me-2 text-secondary"></i><strong>Clinic Hours:</strong> Monday to Friday, 9:00 AM – 4:00 PM</p>

                    <hr>

                    <h6 class="mt-3"><i class="bi bi-tooth-fill me-2 text-danger"></i>Dental Services Offered:</h6>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">Dental Check-up and Consultation</li>
                        <li class="list-group-item">Tooth Extraction</li>
                        <li class="list-group-item">Dental Cleaning (Prophylaxis)</li>
                        <li class="list-group-item">Oral Health Education</li>
                    </ul>

                    <p class="card-text"><i class="bi bi-person-badge-fill me-2 text-secondary"></i><strong>Clinic Dentist:</strong> Dr. Juan Dela Cruz</p>
                </div>
            </div>
        </div>
    </div>
    @endsection