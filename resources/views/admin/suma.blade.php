@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Suma</li>
            </ol>
        </nav>
    </div>
    <div class="col-6">
        <div class="text-right">
            <p>
                <a class="btn btn-space btn-primary pl-5 pr-5" href="">1m</a>
                <a class="btn btn-space btn-primary pl-5 pr-5" href="">15m</a>
                <a class="btn btn-space btn-primary pl-5 pr-5" href="">1h</a>
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-divider">
                <span class="title">Aktualne dane</span>
            </div>
            <div class="card-body">
                <canvas id="line-chart" height="100px"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-table">
            <div class="card-header">Sterowanie</div>
                <div class="card-body">
                    <div class="table-responsive noSwipe">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width:4%;">
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check1">
                                            <label class="custom-control-label" for="check1"></label>
                                        </div>
                                    </th>
                                    <th style="width:10%;">Nazwa</th>
                                    <th style="width:10%;">Obszar</th>
                                    <th style="width:15%;">Moc</th>
                                    <th style="width:10%;">Generacja</th>
                                    <th style="width:10%;">Akcja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check2">
                                            <label class="custom-control-label" for="check2"></label>
                                        </div>
                                    </td>
                                    <td><span>Nazwa 1</span></td>
                                    <td> <span>Mława</span></td>
                                    <td><span>20kVA</span></td>
                                    <td><span>2.0.0</span></td>
                                    <td class="text-right d-flex">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">ON</a>
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">OFF</a>
                                        <input class="form-control form-control-xs mr-3 input-range" type="number" value="100" max="100">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">SET</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check3">
                                            <label class="custom-control-label" for="check3"></label>
                                        </div>
                                    </td>
                                    <td><span>Nazwa 2</span></td>
                                    <td> <span>Mława</span></td>
                                    <td><span>20kVA</span></td>
                                    <td><span>2.0.0</span></td>
                                    <td class="text-right d-flex">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">ON</a>
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">OFF</a>
                                        <input class="form-control form-control-xs mr-3 input-range" type="number" value="100" max="100">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">SET</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check4">
                                            <label class="custom-control-label" for="check4"></label>
                                        </div>
                                    </td>
                                    <td><span>Nazwa 3</span></td>
                                    <td> <span>Mława</span></td>
                                    <td><span>20kVA</span></td>
                                    <td><span>2.0.0</span></td>
                                    <td class="text-right d-flex">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">ON</a>
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">OFF</a>
                                        <input class="form-control form-control-xs mr-3 input-range" type="number" value="100" max="100">
                                        <a class="btn btn-space btn-secondary btn-xs mr-2 cursor-pointer">SET</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('admin/lib/chart.js') }}" type="text/javascript"></script>    
    <script src="{{ asset('admin/lib/chartjs/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/app-charts-chartjs.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            App.ChartJs();
        });
    </script>    
@endpush