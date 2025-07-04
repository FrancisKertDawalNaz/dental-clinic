
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-9 p-4">
                <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Payment History</h2>
                <div class="card shadow-sm mb-4">
                    <div class="card-header text-white" style="background-color: #ADEED9; color: #222;">
                        <strong>Payment History</strong>
                    </div>
                    <div class="card-body p-0">
                        <table class="table mb-0 table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Reference #</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Example dynamic rows, replace $payments with your actual variable --}}
                                @foreach($payments ?? [] as $payment)
                                    <tr>
                                        <td>{{ $payment->date ?? '' }}</td>
                                        <td>{{ $payment->reference ?? '' }}</td>
                                        <td>{{ $payment->service ?? '' }}</td>
                                        <td>{{ $payment->amount ? '₱' . number_format($payment->amount, 2) : '' }}</td>
                                        <td>
                                            @if(isset($payment->status) && $payment->status === 'Paid')
                                                <span class="badge bg-success">Paid</span>
                                            @elseif(isset($payment->status) && $payment->status === 'Pending')
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            @elseif(isset($payment->status) && $payment->status === 'Failed')
                                                <span class="badge bg-danger">Failed</span>
                                            @else
                                                <span class="badge bg-secondary">Unknown</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                @if(empty($payments) || count($payments) === 0)
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">No payment history found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="alert alert-info mt-3" role="alert">
                    <strong>Note:</strong> Here you can view your payment history, including the date, reference number, service, amount, and payment status for each transaction.
                </div>
            </div>
        </div>
    </div>
@endsection
