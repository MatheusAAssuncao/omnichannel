<?php
    use App\Views\templates\Modal;
?>

<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
    ?>
    <?php

        $icons = '<div class="table-actions-icons">';
        $icons .= getAwesomeIcon('eye');
        $icons .= '</div>';
        
        $iconsWork = '<div class="table-workflow-cell">';
        $iconsWork .= '<div class="workflow-icons">';
        $iconsWork .= getAwesomeIcon('envelope');
        $iconsWork .= getAwesomeIcon('mobile-screen-button');
        $iconsWork .= getAwesomeIcon('desktop');
        $iconsWork .= '</div>';
        $iconsWork .= '</div>';

        $table = new App\Views\templates\Table();
        $table->setHeading('Nome', 'Numero Utilizações', 'Última Actualização', 'Meios', 'Ver')
            ->addRow('Revolving', 100, '28-01-2022', $iconsWork, "<a data-toggle='modal' href='.omniModal'>$icons</a>")
            ->addRow('Seguros', 300, '10-01-2022', $iconsWork, "<a data-toggle='modal' href='.omniModal'>$icons</a>")
            ->addRow('AP', 400, '08-01-2022', $iconsWork, "<a data-toggle='modal' href='.omniModal'>$icons</a>")
            ->addRow('CCD', 500, '18-01-2022', $iconsWork, "<a data-toggle='modal' href='.omniModal'>$icons</a>");

        echo $table->generate();

        $content = view('modals/view-workflow', ['name' => 'Revolving']);

        $_modal = new Modal($page_header);
        $_modal->setSize("lg");
        $_modal->generate($content);
    ?>

</div>
