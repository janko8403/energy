@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Logi</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-table">
            <div class="card-header">Lista logów</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Użytkownik</th>
                            <th>ID urządzenia</th>
                            <th>ID klienta</th>
                            <th>Log</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td style="width: 130px;">{{ $log->user_id }}</td>
                                <td style="width: 130px;">{{ $log->device_id }}</td>
                                <td style="width: 130px;">{{ $log->client_id }}</td>
                                <td>{{ $log->log }}</td>
                                <td style="width: 150px;">{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection