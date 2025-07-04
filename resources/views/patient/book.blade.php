@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Book an Appointment</h2>
            <form class="mb-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required min="{{ date('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Service</label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="" disabled selected>Select a service</option>
                                <option value="Cleaning">Cleaning</option>
                                <option value="Tooth Extraction">Tooth Extraction</option>
                                <option value="Filling">Filling</option>
                                <option value="Check-up">Check-up</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-start">
                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes (optional)</label>
                            <textarea class="form-control" id="notes" name="notes" rows="5" style="min-width:180px;"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn" style="background-color: #1B7B6C; color: #fff;">Book Appointment</button>
            </form>
        </div>
    </div>
</div>
@endsection