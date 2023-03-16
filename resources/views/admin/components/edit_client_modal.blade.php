<div class="modal-container colored-header colored-header-success custom-width modal-effect-9" id="edit-client">
    <div class="modal-content">
        <div class="modal-header modal-header-colored">
            <h3 class="modal-title">Edytuj klienta</h3>
            <button class="close modal-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
        </div>
        
        <div class="send-alert"></div>
        
        <form class="edit-client">
            <div class="modal-body form pt-3">
                @csrf
            
                <input type="hidden" id="id-edit" name="id" value="">
                <input type="hidden" id="pv-id" name="pv_id" value="">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nazwa odbiorcy</label>
                        <input class="form-control" type="text" id="nazwa-odbiorcy-edit" name="nazwaOdbiorcy">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Moc umowna</label>
                        <input class="form-control" type="text" id="moc-umowna-edit" name="mocUmowna">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Typ klienta</label>
                        <select class="form-control" id="typ-klienta-edit" name="typKlienta">
                            <option value="indywidualny">Indywidualny</option>
                            <option value="firma">Firma</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Obszar</label>
                        <select class="form-control" id="area-id-edit" name="area_id">
                            <option value="1">Przywidz</option>
                            <option value="2">Mława</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Generacja</label>
                        <input class="form-control" type="text" id="generacja-edit" name="generacja">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Ares IP</label>
                        <input class="form-control" type="text" id="adres-ip-edit" name="adres">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary modal-close" type="button" data-dismiss="modal">Zamknij</button>
                <button class="btn btn-success" id="submit-edit-client" type="button">Zapisz</button>
            </div>
        </form>

    </div>
</div>
<div class="modal-overlay"></div>