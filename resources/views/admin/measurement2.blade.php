@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Pomiary</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-table">
            <div class="card-header">Pomiary2a</div>
            <div class="card-body">

                <div class="send-alert"></div>

                <div class="row pl-4 pr-4">
                    <div class="col-12">
                        <form class="range-date">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12 col-md-3">
                                    <label class="col-form-label text-sm-right">Data od</label>
                                    <div class="input-group date datetimepicker" id="date-from" data-min-view="2" data-date-format="yyyy-mm-dd">
                                        <input class="form-control" size="16" id="date-f" type="text" name="from" autocomplete="off" value="{{old('from')}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="col-form-label text-sm-right">Data do</label>
                                    <div class="input-group date datetimepicker" id="date-to" data-min-view="2" data-date-format="yyyy-mm-dd">
                                        <input class="form-control" size="16" id="date-t" type="text" name="to" autocomplete="off" value="{{old('to')}}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="col-form-label text-sm-right">Klient</label>
                                    <select id="select-client" class="form-control mt-2 select-client" name="clients[]" multiple>
                                        @foreach($clients as $client)
                                            <option value="{{$client->id}}">{{$client->nazwaOdbiorcy}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-md-3">
                                    <label class="col-form-label text-sm-right">Wybierz rozdzielczość</label>
                                    <select class="form-control mt-1" id="resolution" name="resolution">
                                        <option selected disabled value>Wybierz</option>
                                        <option value="one_minute" @if (old('resolution') == 'one_minute') selected="selected" @endif>1min</option>
                                        <option value="fifteen_minute" @if (old('resolution') == 'fifteen_minute') selected="selected" @endif>15min</option>
                                        <option value="one_hour" @if (old('resolution') == 'one_hour') selected="selected" @endif>60min</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-1 d-flex justify-content-between">
                                    <button id="submit-range" type="button" class="btn btn-space btn-primary btn-lg mt-1">Pokaż</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row pl-4 pr-4">
                    <div class="col-12">
                        <div class="err-msg" style="display:none;">
                            <div class="alert alert-danger alert-icon alert-dismissible" role="alert">
                                <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                                <div class="message" style="padding: 1.385rem 1.385rem !important;">
                                    &nbsp;&nbsp;&nbsp;&nbsp; Brak danych
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="set-sum" class="table table-striped table-hover table-fw-widget" style="width:100%">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Klient</th>
                            <th>Suma</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Data</th>
                            <th>Klient</th>
                            <th>Suma</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
    <link href="{{ asset('admin/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('admin/lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/app-form-elements.js') }}" type="text/javascript"></script>

    <link href="{{ asset('admin/css/bootstrap-multiselect.css') }}" rel="stylesheet"/>
    <script src="{{ asset('admin/js/bootstrap-multiselect.js') }}" type="text/javascript"></script>

    <link href="{{ asset('admin/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
    
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        App.formElements();

        $(document).ready(function() {
            $('#select-client').multiselect({
                includeSelectAllOption: true,
                nSelectedText: 'wybrano',
                allSelectedText: 'Wybrano',
                nonSelectedText: 'Wybierz', 
                maxHeight: 250,
                enableFiltering: false,
                buttonContainer: '<div class="custom-select w-100" />'
            });
        });

        $(document).ready(function() {

            var tableW = $('#set-sum').DataTable({
                lengthChange: false,
                info: false,
                searching: false,
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'excelHtml5', className: 'btn btn-space btn-warning btn-lg mt-1' },
                    { extend: 'csvHtml5', className: 'btn btn-space btn-warning btn-lg mt-1' }
                ]
            });

            var rangeDate = $('.range-date');
            const dateF = document.querySelector('#date-f'),
                dateT = document.querySelector('#date-t'),
                resolution = document.querySelector('#resolution'),
                submitRange = $('#submit-range');
            var html;
            var table;

            submitRange.click(async e => await getRangeClient());

            async function getRangeClient() {
                const url = '/admin/filter-measurement';
                if( $('#select-client').length > 0){
                    var selectednumbers = [];
                    $('#select-client').each(function(i, selected) {
                        selectednumbers[i] = $(selected).val();
                    });
                }

                await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': $('input[name="_token"]').val(),
                    },
                    body: JSON.stringify({
                        'from': dateF.value,
                        'to': dateT.value,
                        'clients': selectednumbers,
                        'resolution': resolution.value,
                    })
                })
                .then(res => res.json())
                .then(res => {
                    if (res.errors != null) {
                        console.log(res.errors)
                        const msgs = Object.values(res.errors).map(m => Object.values(m))
                        html = `<ul>`
                        html += msgs.map(m => `<li>${m}</li>`).join('')
                        html += `</ul>`
                        showMsg(html, 'error');
                    } else {

                        if(res.length > 0) {
                            $('.send-alert').delay(2000).fadeOut(500);
                            tableW.clear().draw();
                            $('.dt-buttons').css('display', 'block');
                            table = `<tr>` 
                            $.each(res, function(index, value) {
                                table += `<td>${value[0].timestamp}</td>`
                                table += `<td>${value[0].client_name}</td>`
                                table += `<td class="text-left">${value[0].count}</td>`
                                table += `</tr>`
                            });
                            tableW.rows.add($(table)).draw();

                        } else {
                            $('.dt-buttons').css('display', 'none');
                            tableW.clear().draw();
                            console.log(res);
                            errMsg();
                        }

                    }
                });
            }

            function errMsg() {
                setTimeout(() => {
                    $('.err-msg').delay(100).fadeIn(100);
                    setTimeout(() => {
                            $('.err-msg').delay(2000).fadeOut(500);
                            $('.err-msg').css('display', 'none');
                        }, 5000);
                }, 500);
            }

            function showMsg(message, alert) {
                setTimeout(() => {
                    $('.send-alert').delay(100).fadeIn(100);
                    $('.send-alert').html(message);
                    $('.send-alert').addClass(alert);
                    if (alert == 'success') {
                        setTimeout(() => {
                            $('.send-alert').delay(2000).fadeOut(500);
                        }, 2000);
                        setTimeout(() => {
                            $('.send-alert').removeClass('success');
                            //rangeDate[0].reset();
                        }, 2000);
                    }
                }, 500);
            }
        });
        </script>
@endpush