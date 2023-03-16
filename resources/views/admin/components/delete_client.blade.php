<div class="modal fade" id="delete-client" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                    <h3>Uwaga!</h3>
                    <p>Napewno chcesz usunąć klienta?</p>
                    <input type="hidden" id="delete_id">
                    <div class="mt-8">
                        <button class="btn btn-space btn-secondary" type="button" data-dismiss="modal">Zamknij</button>
                        <button class="btn btn-space btn-danger" type="button" data-dismiss="modal" id="delete-modal-client">Usuń</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>