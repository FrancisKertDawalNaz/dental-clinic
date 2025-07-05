
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Dental History</h2>
            <div class="card shadow-sm mb-4">
                <div class="card-header" style="background-color: #ADEED9; color: #222;">
                    <strong>Dental History Records</strong>
                </div>
                <div class="card-body p-0">
                    <table class="table mb-0 table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Service</th>
                                <th>Dentist</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Example dynamic rows, replace $dentalHistory with your actual variable --}}
                            @foreach($dentalHistory ?? [] as $history)
                                <tr>
                                    <td>{{ $history->date ?? '' }}</td>
                                    <td>{{ $history->service ?? '' }}</td>
                                    <td>{{ $history->dentist ?? '' }}</td>
                                    <td>{{ $history->notes ?? '' }}</td>
                                </tr>
                            @endforeach
                            @if(empty($dentalHistory) || count($dentalHistory) === 0)
                                <tr>
                                    <td colspan="4" class="text-center text-muted">No dental history found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="alert alert-info mt-3" role="alert">
                <strong>Note:</strong> Here you can view your dental history, including the date, service, dentist, and notes for each visit or procedure.
            </div>
            </div>
        </div>
    </div>
@endsection
