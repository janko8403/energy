<div class="modal-container colored-header colored-header-success custom-width modal-effect-9" id="add-client">
    <div class="modal-content">
        <div class="modal-header modal-header-colored">
            <h3 class="modal-title">Dodaj klienta</h3>
            <button class="close modal-close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
        </div>

        <div class="send-alert"></div>
        
        <form class="add-client">
            <div class="modal-body form pt-3">
                @csrf
            
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Nazwa odbiorcy</label>
                        <input class="form-control" type="text" id="nazwa-odbiorcy" name="nazwaOdbiorcy">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Moc umowna</label>
                        <input class="form-control" type="text" id="moc-umowna" name="mocUmowna">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Typ klienta</label>
                        <select class="form-control" id="typ-klienta" name="typKlienta">
                            <option disabled selected value>Wybierz typ</option>
                            <option value="indywidualny">Indywidualny</option>
                            <option value="firma">Firma</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Obszar</label>
                        <select class="form-control" id="area-id" name="area_id">
                            <option disabled selected value>Wybierz obszar</option>
                            <option value="1">Przywidz</option>
                            <option value="2">Mława</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Generacja</label>
                        <input class="form-control" type="text" id="generacja" name="generacja">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Ares IP</label>
                        <input class="form-control" type="text" id="adres-ip" name="adres">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary modal-close" type="button" data-dismiss="modal">Zamknij</button>
                <button class="btn btn-success" id="submit-client" type="button">Zapisz</button>
            </div>
        </form>

    </div>
</div>
<div class="modal-overlay"></div>