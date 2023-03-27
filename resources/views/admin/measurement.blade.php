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
            <div class="card-header">Pomiary2</div>
            <div class="card-body">

                <div class="row pl-4 pr-4">
                    <div class="col-12">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible" role="alert" style="padding: 7px !important; margin-bottom: 3px !important;">
                                    <div class="icon"> <span class="mdi mdi-close-circle-o"></span></div>
                                    <div class="message">{{ $error }}</div>
                                </div>
                            @endforeach
                        @endif

                        <form method="POST" action="{{ url('admin/filter-measurement') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12 col-md-3">
                                    <label class="col-form-label text-sm-right">Data od</label>
                                    <div class="input-group date datetimepicsker" id="date-from" data-min-view="2" data-date-format="yyyy-mm-dd">
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
                                    <button type="submit" class="btn btn-space btn-primary btn-lg mt-1">Pobierz dane</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

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
        </script>
@endpush