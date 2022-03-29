<div id="campaignView">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="box-form-title" style="
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;">
                <label>Resultados / <strong>Detalhe</strong></label>
                <button type="button" class="close btn-close campaignViewBack">
                    <?= getAwesomeIcon('arrow-left')?> Voltar
                </button>
            </div>
            <div class="box-form-grey" style="
                font: normal normal normal 14px/19px Roboto;
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;">
                <div>
                    <p><span style="font-weight: bold">Nome da Campanha: </span>2022.O1.14.XPCDPA=1_telefone_jan22_6000_6500_ate60an</p>
                </div>
                <div>
                    <p><span style="font-weight: bold">Workflow: </span>Revolving</p>
                </div>
            </div>
            
            <div class="spacing"></div>

            <div class="box-form">
                <label style="font-weight: bold">Canal:</label> SMS
                <hr>
                <label style="font-weight: bold">Mensagem:</label>
                <p style="line-break: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum amet magnam sunt commodi a non nemo doloremque cumque ex accusamus. Numquam nisi hic expedita aliquam consectetur reiciendis impedit, repellendus blanditiis!</p>
                <p style="line-break: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum amet magnam sunt commodi a non nemo doloremque cumque ex accusamus. Numquam nisi hic expedita aliquam consectetur reiciendis impedit, repellendus blanditiis!</p>
            </div>

            <?php
                $table = new App\Views\templates\Table(true);
                $arrow = getAwesomeIcon('arrow-right');
                $table->setHeading('Entregues', '%', 'Não Entregues', '%', 'Não Respondidos', 'Cliques', 'Unsubscribed')
                    ->addRow('10.100', '100%', 'Revolving', '0%', '40', '356', '0');

                echo $table->generate();
            ?>

            <div class="align-right">
                <button type="button" class="btn-large btn-blue campaignViewBack" style="min-width: 90px;">Voltar</button>
                <button id="campaignViewExport" type="button" class="btn-large">Exportar</button>
            </div>
        </div>
    </div>
</div>