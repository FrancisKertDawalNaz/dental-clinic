
@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>
         <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h2 class="mb-4" style="font-weight: 100; font-size: 1.5rem;">Pay Now</h2>
            <form class="mb-4">
                <div class="row">
                    <div class="col-md-7">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" min="1" required>
                        </div>
                        <div class="mb-3">
                            <label for="method" class="form-label">Payment Method</label>
                            <select class="form-select" id="method" name="method" required>
                                <option value="" selected disabled>-- Select payment method --</option>
                                <option>GCash</option>
                                <option>PayMaya</option>
                                <option>Credit Card</option>
                                <option>Cash</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-start">
                        <div class="mb-3">
                            <label for="reference" class="form-label">Reference Number <span class="text-muted">(if applicable)</span></label>
                            <input type="text" class="form-control" id="reference" name="reference" placeholder="Enter reference number">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn" style="background-color: #FFB823; color: #fff;">Pay Now</button>
            </form>
        </div>
         </div>
    </div>
@endsection
