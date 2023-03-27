@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-6">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Klienci</li>
            </ol>
        </nav>
    </div>
    <div class="col-6">
        <div class="text-right">
            <p>
                <button class="btn btn-space btn-success pl-5 pr-5 md-trigger" data-modal="add-client">Dodaj klienta</button>
            </p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-table">
            <div class="card-header"></div>
            <div class="card-body">
                
                <table id="client-table" class="table table-striped table-hover table-fw-widget" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa odbiorcy</th>
                            <th>Moc umowna</th>
                            <th>Typ klienta</th>
                            <th>Obszar</th>
                            <th>Generacja</th>
                            <th>IP adres</th>
                            <th class="actions text-right">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa odbiorcy</th>
                            <th>Moc umowna</th>
                            <th>Typ klienta</th>
                            <th>Obszar</th>
                            <th>Generacja</th>
                            <th>IP adres</th>
                            <th class="actions">Akcja</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>

@include('admin.components.add_client_modal')
@include('admin.components.edit_client_modal')
@include('admin.components.delete_client')

@endsection

@push('custom-scripts')
    <script src="{{ asset('admin/lib/jquery.niftymodals/js/jquery.niftymodals.js') }}" type="text/javascript"></script>
    <link href="{{ asset('admin/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $.fn.niftyModal('setDefaults',{
                overlaySelector: '.modal-overlay',
                contentSelector: '.modal-content',
                closeSelector: '.modal-close',
                classAddAfterOpen: 'modal-show'
            });

            var table = $('#client-table').DataTable({
                processing: true,
                serverSide: true,
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
                    { data: 'typKlienta', name: 'typKlienta' },
                    { data: 'area', name: 'area' },
                    { data: 'generacja', name: 'generacja', orderable: false, searchable: false },
                    { data: 'adres', name: 'adres', orderable: false, searchable: false },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });

            $('.dataTables_filter input').on('keyup', function() {
                    $('#client-table').DataTable().search(this.value.trim(), false, false).draw();
            }); 

            $('#submit-client').on('click', function() {
                setTimeout(()=> {
                    table.ajax.reload(null, false);
                }, 5000);
            })

            $(document).click('.delete-link', function (event) {
                const target = $(event.target).parent();
                const modal = target.data('target');
                const id = target.attr('data-delete') * 1;
                if (!id) {
                    return;
                }
                $('#delete_id').val(id);
                $(modal).niftyModal();
            });

            $('#delete-modal-client').click(async function () {
                const id = $('#delete_id').val();
                const url = '/admin/remove-client/' + id;
                await fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-Token': $('input[name="_token"]').val(),
                    },
                });
                table.ajax.reload(null, false);
            });

            $(document).click('.edit-client', function (event) {
                const target = $(event.target).parent();
                const modal = target.data('target');
                const id = target.attr('data-edit') * 1;
                if (!id) {
                    return;
                }
                const datatable = $("#client-table").DataTable();
                const data = datatable.data();
                const row = Object.values(data).find(x => (x.id) == id);
                const fields = [
                    'id', 'pv-id', 'nazwa-odbiorcy-edit', 'moc-umowna-edit', 'area-id-edit', 'typ-klienta-edit', 'generacja-edit', 'adres-ip-edit'
                ];
                fields.forEach(field => $('#' + field).val(row[field]));
                $("#id-edit").val(row['id'])
                $("#pv-id").val(row['pv_id'])
                $("#nazwa-odbiorcy-edit").val(row['nazwaOdbiorcy'])
                $("#moc-umowna-edit").val(row['mocUmowna'])
                $("#generacja-edit").val(row['generacja'])
                $("#adres-ip-edit").val(row['adres'])
                $('#typ-klienta-edit').val(row['typKlienta']);
                $('#area-id-edit').val(row['area_id']);
    
                $(modal).niftyModal();
            });

            

            

        });
        </script>
@endpush