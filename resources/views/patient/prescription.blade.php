
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Prescriptions</h2>
            <div class="card shadow-sm mb-4">
                <div class="card-header" style="background-color: #ADEED9; color: #222;">
                    <strong>Prescription History</strong>
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0 table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Doctor</th>
                                <th>Medicine</th>
                                <th>Dosage</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Example dynamic rows, replace $prescriptions with your actual variable --}}
                            @foreach($prescriptions ?? [] as $prescription)
                                <tr>
                                    <td>{{ $prescription->date ?? '' }}</td>
                                    <td>{{ $prescription->doctor ?? '' }}</td>
                                    <td>{{ $prescription->medicine ?? '' }}</td>
                                    <td>{{ $prescription->dosage ?? '' }}</td>
                                    <td>{{ $prescription->notes ?? '' }}</td>
                                </tr>
                            @endforeach
                            @if(empty($prescriptions) || count($prescriptions) === 0)
                                <tr>
                                    <td colspan="5" class="text-center text-muted">No prescription history found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="alert alert-info mt-3" role="alert">
                <strong>Note:</strong> Here you can view your prescription history, including the date, doctor, medicine, dosage, and notes for each prescription.
            </div>
            </div>
        </div>
    </div>
@endsection
