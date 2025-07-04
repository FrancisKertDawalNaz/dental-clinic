@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'Welcome!',
            text: "{{ session('success') }}",
            confirmButtonColor: '#ADEED9',
            customClass: {
                confirmButton: 'btn btn-success'
            }
        });
    });
</script>
@endif
@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 p-0">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-9 p-4 d-flex flex-column" style="margin-left:300px; min-height:unset; height: 535px; background:rgba(255,255,255,0.95); border-radius:10px; box-shadow:0 4px 24px rgba(30,123,108,0.10);">
            <h3 class="mb-3 fw-bold" style="color:#FFB823;"><i class="bi bi-calendar-event me-2"></i>My Calendar</h3>
            <div id="calendar" style="width:100%; height:100%; background:#f8fafc; color:#222; z-index:10; position:relative; border-radius:5px; box-shadow:0 2px 12px rgba(30,123,108,0.08); padding:10px 12px;"></div>
            <style>
                /* Modern FullCalendar custom design */
                #calendar .fc {
                    background: transparent;
                    border-radius: 5px;
                    font-family: 'Segoe UI', Arial, sans-serif;
                    font-size: 1rem;
                }

                #calendar .fc-toolbar-title {
                    color: #FFB823;
                    font-weight: 700;
                    letter-spacing: 1px;
                    text-align: right;
                    width: 100%;
                    display: block;
                }

                #calendar .fc-button {
                    background: #ADEED9;
                    border: none;
                    color: #fff;
                    border-radius: 6px;
                    box-shadow: 0 2px 6px rgba(30, 123, 108, 0.10);
                    transition: background 0.2s;
                    margin-right: 8px;
                    margin-left: 8px;
                    padding-left: 18px;
                    padding-right: 18px;
                }

                #calendar .fc-button:hover,
                #calendar .fc-button:focus {
                    background: #FFB823;
                    color: #fff;
                }

                #calendar .fc-daygrid-day-number {
                    color: #1B7B6C;
                    font-weight: 600;
                    font-size: 1.08em;
                    padding: 2px 6px;
                    border-radius: 4px;
                    transition: background 0.2s;
                }

                #calendar .fc-daygrid-day:hover .fc-daygrid-day-number {
                    background: #ADEED9;
                }

                #calendar .fc-day-today {
                    background: #e6f4f1 !important;
                    border-radius: 8px;
                }

                #calendar .fc-event {
                    background: #ADEED9;
                    border: none;
                    color: #fff;
                    border-radius: 6px;
                    font-size: 0.98em;
                    box-shadow: 0 2px 8px rgba(30, 123, 108, 0.10);
                }

                #calendar .fc-event:hover {
                    background: #FFB823;
                }

                #calendar .fc-col-header-cell-cushion {
                    color: #ADEED9;
                    font-weight: 600;
                    font-size: 1.05em;
                }
            </style>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    if (calendarEl) {
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            height: '100%',
                            contentHeight: '100%',
                            aspectRatio: 1.45,
                            headerToolbar: {
                                left: 'prev,next today',
                                center: '',
                                right: 'title'
                            },
                            events: []
                        });
                        calendar.render();
                    }
                });
            </script>
        </div>
    </div>
</div>
@endsection