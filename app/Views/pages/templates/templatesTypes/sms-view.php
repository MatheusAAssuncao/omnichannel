<div id="smsView">
    <div class="row justify-content-center">
        <div class="col-md-2 col-lg-3"></div>
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="box-form-grey" style="display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    align-items: center;">
                    <div>
                        <label>Nome do template:</label>
                        <p>SMS PMS</p>
                    </div>
                    <div style="display: flex;
                        flex-direction: column;
                        flex-wrap: nowrap;
                        align-items: center;">
                        <span style="margin-bottom: 7px">Com Dados</span>
                        <label class="switch">
                            <input type="checkbox" class="check_switch">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                
                <?= view('templates/smartphone')?>

                <div class="align-right">
                    <button id="smsCreateButtonBack" type="button" class="btn-large btn-blue" style="min-width: 135px;">Voltar</button>
                    <button type="button" class="btn-large smsCreateButtonSave">Gravar</button>
                </div>
            </div>
        <div class="col-md-2 col-lg-3"></div>
    </div>
</div>