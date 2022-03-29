<div id="campaignResult">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="box-form-title" style="
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;">
                <label>Resultados</label>
                <button id="campaignResultBack" type="button" class="close btn-close">
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
            
            <?php

                $icon = '<div class="table-actions-icons">';
                $icon .= getAwesomeIcon('eye');
                $icon .= '</div>';

                $table = new App\Views\templates\Table();
                $table->setHeading('Canal', 'Id', 'Data', 'Passo', 'Enviados', 'Entregues', 'Cliques', 'Taxa Cliques', 'Respostas', 'Taxa Resposta', 'Detalhes')
                    ->addRow('SMS', '123', '25-01-2022', 'A', '10.100', '9.900', '221', '2.19%', '132', '1.31%', $icon);

                echo $table->generate();

                $table = new App\Views\templates\Table();
                $table->setHeading('Canal', 'Id', 'Data', 'Passo', 'Enviados', 'Entregues', 'Cliques', 'Taxa Cliques', 'Respostas', 'Taxa Resposta', 'Detalhes')
                    ->addRow('Email', '124', '28-01-2022', 'B', '356', '131', '55', '15.45%', '20', '5.62%', $icon);

                echo $table->generate();

                $table = new App\Views\templates\Table();
                $table->setHeading('Canal', 'Id', 'Passo', 'Visitas', 'Cliques', 'Taxa Cliques', 'Respostas', 'Taxa Resposta', 'Detalhes')
                    ->addRow('LP', '125', 'C', '356', '356', '12.3%', '40', '1.4%', $icon);

                echo $table->generate();

                $table = new App\Views\templates\Table(true);
                $arrow = getAwesomeIcon('arrow-right');
                $table->setHeading('', 'Cliques', 'Taxa Cliques', 'Respostas', 'Taxa Resposta')
                    ->addRow('TOTAL '.$arrow, '632', '4.74%', '192', '1.44%');

                echo $table->generate();
            ?>

            <div class="align-right">
                <button id="campaignResultViewDetail" type="button" class="btn-large btn-blue" style="min-width: 130px;">Ver Detalhe</button>
                <button id="campaignResultExport" type="button" class="btn-large">Exportar</button>
            </div>
        </div>
    </div>
</div>