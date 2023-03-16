@extends('admin.layouts.app')

@section('content')
<div class="row">
    <div class="col-6">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Przywidz</li>
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
                <a class="btn btn-space btn-primary pl-5 pr-5 btn-refresh">Refresh</a>
            </div>
            <div class="card-body">
                <canvas id="one-minute" height="100px"></canvas>
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
    <script type="text/javascript">
        $(document).ready(function(){
            // measurment one min
            
            refreshId = setInterval(()=> {
                getData();
            }, 5000);

            //const refresh = document.querySelector('.btn-refresh');
            //refresh.addEventListener('click', function() {
                //getData();
            //})
            function getData() {
                var clients = {!! $clients !!};

                for (let i = 0; i < clients.length; i++) {
                    $.get('/last-power-value/'+clients[i].id,
                        function(data) {

                            var dataSetLabels = [];
                            var dataSetValues = [];
                            var dataSetDate = [];

                            var lab = ['one', 't', 'r']

                            Object.entries(data).forEach(entry=> {
                                const [key, value] = entry;
                                dataSetLabels.push(value.client_name);
                                dataSetValues.push([value.last_power_value, value.client_name]);
                                dataSetDate.push(value.requested_timestamp);
                            });

                            //oneMinuteChart.data.datasets[0].label[0] = 'one';
                            //oneMinuteChart.update();
                            //oneMinuteChart.data.labels = dataSetDate;


                            
                            

                            console.log(dataSetValues);
                            //oneMinuteChart.update();

                            //oneMinuteChart.data.datasets.forEach((dataset) => {
                                //dataset.data = dataSetValues;
                            //});

                            //console.log(dataSetLabels);
                            //oneMinuteChart.data.labels.push(dataSetLabels);
                            //oneMinuteChart.data.datasets.push(dataSetValues);
                            //oneMinuteChart.data.datasets.forEach((dataset) => {
                            //dataset.label = dataSetLabels;
                            //});
                            //oneMinuteChart.update();


                        }
                    );
                }
            }


            var labels = [];
            var dataSets = [{
                label: '1',
                data: [1],
                borderWidth:2
            }];

            const baseData = [{
                location: "Apartment A",
                color: "red",
                set_data: [
                    { month: 1, value: 3500 }, 
                    { month: 2, value: 2700 }, 
                    { month: 3, value: 1500 }
                ]
            },
            {
                location: "Apartment B",
                color: "blue",
                set_data: [
                    { month: 1, value: 1700 }, 
                    { month: 2, value: 2800 }, 
                    { month: 3, value: 3200 }
                ]
            }];

            const labels = baseData[0].set_data.map(v => v.month);
            const dataSets = [];
            baseData.forEach(o => dataSets.push({
                label: o.location,
                data: o.set_data.map(v => v.value),
                borderColor: o.color,
                borderWidth: 1,
                fill: false
            }));


            const dataOneMinute = {
                labels: labels,
                datasets: dataSets
            };

            const configOneMinute = {
                type: 'line',
                data: dataOneMinute,
                options: {
                    title: {
                        display: true,
                        text: 'World population per region (in millions)'
                    },
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            };
        
            const oneMinuteChart = new Chart(
                document.getElementById('one-minute'),
                configOneMinute
            );

            function setData(label, data) {
                oneMinuteChart.data.labels.push(label);
                oneMinuteChart.data.datasets.forEach((dataset) => {
                    dataset.data.push(data);
                });
                oneMinuteChart.update();
            }

        });
    </script>
@endpush
