<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);

        $table = new App\Views\templates\Table();
        $table->setHeading('Id', 'Nome da Campanha', 'Status (início / meio / fim)', 'Subscritores', 'Workflow', 'Ações')
            ->addRow('1234', '<p class="fw-bold mb-1">John Doe</p>', '<p class="fw-normal mb-1">Software engineer</p>', '<span class="badge badge-success rounded-pill d-inline">Active</span>', 'Senior', '<button type="button" class="btn btn-link btn-sm btn-rounded">Edit</button>')
            ->addRow('1234', '<p class="fw-bold mb-1">John Doe</p>', '<p class="fw-normal mb-1">Software engineer</p>', '<span class="badge badge-success rounded-pill d-inline">Active</span>', 'Senior', '<button type="button" class="btn btn-link btn-sm btn-rounded">Edit</button>')
            ->addRow('1234', 'John Doe', 'Software engineer', 'Active', 'Senior', 'Edit')
            ->addRow('1234', 'John Doe', 'Software engineer', 'Active', 'Senior', 'Edit');

        echo $table->generate();
    ?>

</div>
