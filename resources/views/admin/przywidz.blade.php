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
                    @include('admin.components.control_clients')
            </div>
        </div>

    </div>
</div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('admin/lib/chart.js') }}" type="text/javascript"></script>    
    <script type="text/javascript">
        $(document).ready(function(){

            var clients = {!! $clients !!}

            var clientName = [];
            for (c = 0; c < clients.length; c++) {
                clientName.push(clients[c].nazwaOdbiorcy);
            }
            console.log(clientName);

            const refresh = document.querySelector('.btn-refresh');
            refresh.addEventListener('click', function() {
                console.log('click');
                getData();
                //oneMinuteChart.update();
            });

            var labels = [];
            var dataSets = [];

            const dataOneMinute = {
                labels: labels,
                datasets: dataSets
            };

            const configOneMinute = {
                type: 'line',
                data: dataOneMinute,
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        x: {
                            position: 'right',
                            beginAtZero: 0
                        }
                    },
                    title: {
                        display: false
                    },
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            position: 'bottom',
                            //display: false
                        }
                    }
                }
            };
        
            const oneMinuteChart = new Chart(
                document.getElementById('one-minute'),
                configOneMinute
            );

            //var refreshId = setInterval(function() {
              //  console.log('start');
            //    getData();
              //  oneMinuteChart.update();
            //}, 5000);
        
            
            //setInterval(()=> {
              //getData();
            //}, 5000);

            function getData() {

                var backgroundColorForDataSets = ['rgba(150, 20, 10, 0)','rgba(220, 180, 50, 0)',  'rgba(55, 110, 180, 0)', 'rgba(50, 180, 120, 0)', 'rgba(120, 50, 180, 0)',
                    'rgba(249, 49, 84, 0)', 'rgba(30, 150, 90, 0)', 'rgba(90, 30, 150, 0)','rgba(219, 19, 54, 0)', 'rgba(180, 25, 110, 0)',
                    'rgba(200, 213 50, 0)',  'rgba(55, 150, 180, 0)','rgba(10, 120, 180, 0)','rgba(150, 180, 120, 0)', 'rgba(110, 155, 130, 0)',
                    'rgba(155, 110, 130, 0)','rgba(155, 210, 130, 0)','rgba(110, 0, 128, 0)', 'rgba(138, 38, 238, 0)', 'rgba(238, 38, 138, 0)'
                ];

  		        var bordersColorForDataSets = ['rgba(150, 20, 10, 1)','rgba(220, 180, 50, 1)', 'rgba(55, 110, 180, 1)', 'rgba(50, 180, 120, 1)', 'rgba(120, 50, 180, 1)',
                    'rgba(249, 49, 84, 1)', 'rgba(30, 150, 90, 1)', 'rgba(90, 30, 150, 1)', 'rgba(219, 19, 54, 1)', 'rgba(180, 25, 110, 1)',
                    'rgba(200, 213 50, 1)', 'rgba(55, 150, 180, 1)', 'rgba(10, 120, 180, 1)','rgba(150, 180, 120, 1)', 'rgba(110, 155, 130, 1)',
                    'rgba(155, 110, 130, 1)','rgba(155, 210, 130, 1)', 'rgba(110, 0, 128, 1)', 'rgba(138, 38, 238, 1)', 'rgba(238, 38, 138, 1)'
                ];

                //oneMinuteChart.data.datasets.forEach((dataset) => {
                  //  dataset.data = [];      
                    //dataset.label = [];      
                //});                    

                $.get('/last-date-value',
                    function(res) {
                        var tmpLabels = [];
                        Object.entries(res[0]).forEach(([key, value]) => {
                            tmpLabels.push(value.requested_timestamp);
                        });
                        oneMinuteChart.data.labels = tmpLabels;
                    }
                );

                $.get('/last-power-value',
                    function(data) {

                        for (i = 0; i < data.length; i++) {
                            var powerValue = [];
                            var labelValue = [];
                            var first_iteration = true;
                            for (k = 0; k < data[i].length; k++) {
                                //if (first_iteration) {
                                //labelValue.push(data[i][0].client_name);
                                //    first_iteration = false;
                                //}
                                
                                powerValue.push(data[i][k].last_power_value)
                            }

                            var dataSet = {
                                label: data[i][0].client_name,
                                //label: 'Label-' + i,
                                data: powerValue,
                                backgroundColor: backgroundColorForDataSets[i],
                                borderColor: bordersColorForDataSets[i],
                            }

                            oneMinuteChart.data.datasets.push(dataSet);    
                            oneMinuteChart.update();
                        
                        }

                        //setDataset(oneMinuteChart, deviceId9, title, values9, res.timestampsArray);

                        //console.log(dataSet);

                    }
                );
                
            }

            $("input.select-all").click(function () {
                console.log('click all');
                var all = $("input.select-all")[0];
                //all.checked = !all.checked
                var checked = all.checked;
                $("input.select-item").each(function (index,item) {
                    item.checked = checked;
                    console.log(item);
                });
            });

            $("input.select-all").click(function () {
                var checked = this.checked;
                $("input.select-item").each(function (index,item) {
                    item.checked = checked;
                });
            });

            $("input.select-item").click(function () {
                var checked = this.checked;
                console.log(checked);
                checkSelected();
            });

            function checkSelected() {
                var all = $("input.select-all")[0];
                var total = $("input.select-item").length;
                var len = $("input.select-item:checked:checked").length;
                console.log("total:"+total);
                console.log("len:"+len);
                all.checked = len===total;
            }

            $("#selected").click(function () {
                console.log("total");
                var items=[];
                $("input.select-item:checked:checked").each(function (index,item) {
                    items[index] = item.value;
                });
                if (items.length < 1) {
                    alert("no selected items!!!");
                }else {
                    var values = items.join(',');
                    alert(values);
                    //var html = $("<div></div>");
                    //html.html("selected:"+values);
                    //html.appendTo("body");
                }
            });

            var setPv = $('.set-pv');
            const clientId = document.querySelector('#client-id'),
                valueSet = document.querySelector('#value-set'),
                submitsetPv = document.querySelector('.btn-set');

            submitsetPv.click(async e => await setPvClient());

            async function getRangeClient() {
                const url = '/admin/set-device';
                
                await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': $('input[name="_token"]').val(),
                    },
                    body: JSON.stringify({
                        'clientId': clientId.value,
                        'valueSet': valueSet.value
                    })
                })
                .then(res => res.json())
                .then(res => {
                    console.log(res);
                });
            }

        });
    </script>
@endpush
