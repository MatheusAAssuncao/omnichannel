<div id="emailCreate">
    <div class="row justify-content-center">
        <div class="col-md-1 col-lg-2"></div>
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="box-form">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nome do Template</label>
                            <select>
                                <option disabled selected hidden></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">De</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Assunto</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <button type="button" class="btn-grey" style="min-width: 160px;">Upload HTML <?= getAwesomeIcon('arrow-up-from-bracket', 'margin-left: 7px')?></button>
                        </div>
                    </div>
                </div>
                
                <div class="align-right">
                    <button id="emailCreateButtonView" type="button" class="btn-large btn-blue" style="min-width: 135px;">Visualizar</button>
                    <button type="button" class="btn-large emailCreateButtonSave">Gravar</button>
                </div>
            </div>
        <div class="col-md-1 col-lg-2"></div>
    </div>
</div>