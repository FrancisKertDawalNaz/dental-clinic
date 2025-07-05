@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('layouts.sidebar')
            </div>

            <div class="col-md-9 p-4 d-flex flex-column"
                 style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10); overflow-y: auto;">
                <h2 class="mb-4" style="font-weight: 600; font-size: 1.8rem; color: #FFB823;">
                    <i class="bi bi-question-circle-fill me-2" style="color: #FFB823;"></i>Frequently Asked Questions
                </h2>

                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What are the clinic hours?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The dental clinic is open from Monday to Friday, 9:00 AM to 4:00 PM.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Do I need an appointment?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Walk-ins are accepted, but scheduling an appointment is recommended to avoid waiting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                What services are available at the dental clinic?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The clinic provides dental check-ups, tooth extraction, dental cleaning, and oral health counseling.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How can I contact the clinic?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4"
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You may contact us via phone at (049) 501-5678 or email us at dentalclinic@lspu.edu.ph.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
