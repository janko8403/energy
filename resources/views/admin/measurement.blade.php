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
            <div class="card-header">Pomiary</div>
            <div class="card-body">
                
                <table id="example" class="table table-striped table-hover table-fw-widget" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa odbiorcy</th>
                            <th>Moc umowna</th>
                            <th>Obszar</th>
                            <th>PV</th>
                            <th class="actions">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa odbiorcy</th>
                            <th>Moc umowna</th>
                            <th>Obszar</th>
                            <th>PV</th>
                            <th class="actions">Akcja</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('#example').DataTable({
                processing: true,
                erverSide: true,
                //search: {
                  //  return: true,
                //},
                sort: true,
                paging: true,
                lengthChange: false,
                info: false,
                ajax: '/admin/clients',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'nazwaOdbiorcy', name: 'nazwaOdbiorcy' },
                    { data: 'mocUmowna', name: 'mocUmowna' },
                    { data: 'area_id', name: 'area_id' },
                    { data: 'pv_id', name: 'pv_id', orderable: false, searchable: false },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });

            $('.dataTables_filter input').off()
                .on('keyup', function() {
                    $('#example').DataTable().search(this.value.trim(), false, false).draw();
            }); 

            $('#submit-client').on('click', function() {
                setTimeout(()=> {
                    console.log('ahax');
                    table.ajax.reload(null, false);
                }, 5000);
            })
            

        });
        </script>
@endpush