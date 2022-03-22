<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
    ?>
    <div class="row justify-content-end">
        <div class="col col-sm-12 col-md-6 col-lg-4">
            <form action="campaigns" method="post" class="form-inline" style="flex-wrap: nowrap;">
                <input type="text" placeholder="Pesquisar..." style="width: 100%"/>
                <button type="submit"><?= getAwesomeIcon('magnifying-glass', 'color: white; opacity: 0.99') ?></button>
            </form>
        </div>
    </div>
    <?php

        $icons = '<div class="table-actions-icons">';
        $icons .= getAwesomeIcon('play');
        $icons .= getAwesomeIcon('pause');
        $icons .= getAwesomeIcon('pencil');
        $icons .= getAwesomeIcon('copy');
        $icons .= getAwesomeIcon('trash-can');
        $icons .= '</div>';
        
        $iconsWork = '<div class="table-workflow-cell">';
        $iconsWork .= '<span>Revolving</span>';
        $iconsWork .= '<div class="workflow-icons">';
        $iconsWork .= getAwesomeIcon('envelope');
        $iconsWork .= getAwesomeIcon('mobile-screen-button');
        $iconsWork .= getAwesomeIcon('desktop');
        $iconsWork .= '</div>';
        $iconsWork .= '</div>';

        $table = new App\Views\templates\Table();
        $table->setHeading('Id', 'Nome da Campanha', 'Status (início / meio / fim)', 'Subscritores', 'Workflow', 'Ações')
            ->addRow('1234', ['data' => '2022.02.10.CCD_LANCAMENTO_TELEFONE_NRP_FEV22', 'class' => 'tleft'], 'Enviada', '600', $iconsWork, $icons)
            ->addRow('1234', ['data' => '2022.02.09.TODOS_LANÇAMENTO_TELEFONE_FEV22', 'class' => 'tleft'], 'Ativa (30% / 50% / 20%)', '10.000', $iconsWork, $icons)
            ->addRow('1234', ['data' => '2022.01.25.PMS_TODOS_TODOS_JAN22_MULTI', 'class' => 'tleft'], 'Pausada', '20', $iconsWork, $icons)
            ->addRow('1234', ['data' => '2022.O1.14.XPCDPA=1_telefone_jan22_6000_6500_ate60an', 'class' => 'tleft'], '<span style="color: #ED1847">Draft</span>', '1.100', $iconsWork, $icons);

        echo $table->generate();
    ?>

</div>
