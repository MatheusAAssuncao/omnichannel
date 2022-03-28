<div id="step2" style="width: 100%">
    <p class="stepCounter">Passo 2/3</p>
    <div class="box-form-grey">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <label>Nome da campanha:</label>
                <p>2022.02.10.Ccf_Lancamento_Telefone_Nrp_Fev22</p>
            </div>
            <div class="col-sm-12 col-md-6 flex-start-text">
                <div class="info-inline">
                    <p><strong>Workflow: </strong>Revolving</p>
                    <p><strong>Produto: </strong>Lorem Ipsum</p>
                </div>
                <div class="info-inline">
                    <p><strong>Momento: </strong>Revolving</p>
                    <p><strong>Canal: </strong>Email/SMS</p>
                </div>
            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="box-form">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Configuração Horária</label>
                <select>
                    <option disabled selected hidden>Hora início</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Volume por Hora</label>
                <select>
                    <option disabled selected hidden>Hora início</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <div style="width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    align-items: flex-end;">
                    <a href="" style="margin-left: 4px;">advanced</a>
                </div>
            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="box-form">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputEmail4">SMS Sender</label>
                <select>
                    <option disabled selected hidden>Escolher sender</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Template</label>
                <select>
                    <option disabled selected hidden>Revolving</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">Texto SMS</label>
                <textarea rows="4" placeholder="Escrever texto"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Texto SMS Auto-Reply Sim</label>
                <select>
                    <option disabled selected hidden>Escolher template sim</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4"></label>
                <select>
                    <option disabled selected hidden>Escolher template indefinido</option>
                </select>
            </div>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="box-form-grey">
        <div class="form-row" style="display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;">
            <div class="flex-column-center">
                <?= getAwesomeIcon('arrow-up')?>
                <?= getAwesomeIcon('stopwatch', 'margin-top: 4px; margin-bottom: 4px;')?>
                <?= getAwesomeIcon('arrow-down')?>
            </div>
            <label style="padding-top: 5px">Delay</label>
            <input type="number" value="1" style="width: 60px;">
            <select style="width: 120px;">
                <option disabled selected hidden>Horas</option>
            </select>
        </div>
    </div>

    <div class="spacing"></div>

    <div class="box-form">
        <div class="box-form-grey" style="margin-bottom: 1rem">
            <span><label style="margin-bottom: 0px">Target: </label>Clientes que não responderam</span>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">Email Send</label>
                <select>
                    <option disabled selected hidden>Escolher template - email send</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">TServer (email send to)</label>
                <select>
                    <option disabled selected hidden>Escolher template - email send to</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">TServer (email send to)</label>
                <select>
                    <option disabled selected hidden>Endereços de email</option>
                </select>
            </div>
        </div>
    </div>

    <div class="align-right">
        <button id="step2ButtonSave" type="button" class="btn-large btn-blue" style="min-width: 155px;">Guardar Draft</button>
        <button id="step2ButtonErase" type="button" class="btn-large btn-blue" style="min-width: 200px;">Apagar Campanha</button>
        <button id="step2ButtonNext" type="button" class="btn-large" style="min-width: 155px;">Enviar Testes</button>
    </div>
</div>