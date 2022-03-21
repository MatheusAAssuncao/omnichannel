<?php
    namespace App\Views\templates;

    use CodeIgniter\View\Table as codeIgniterTable;

    class Table extends codeIgniterTable {
        
        protected $customTemplate = array(
            'table_open'         => '</br><div class="table-responsive"><table class="table align-middle mb-0 bg-white">',
        
            'thead_open'         => '<thead style="background-color: #D0D2D3">',
            'thead_close'        => '</thead>',
        
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
        
            'tfoot_open'         => '<tfoot>',
            'tfoot_close'        => '</tfoot>',
        
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
        
            'tbody_open'         => '<tbody>',
            'tbody_close'        => '</tbody>',
        
            'row_start'          => '<tr>',
            'row_end'            => '</tr>',
            'cell_start'         => '<td>',
            'cell_end'           => '</td>',
        
            'row_alt_start'      => '<tr>',
            'row_alt_end'        => '</tr>',
            'cell_alt_start'     => '<td>',
            'cell_alt_end'       => '</td>',
        
            'table_close'        => '</table></div>'
        );        

        function __construct() {
            parent::__construct();
            $this->setTemplate($this->customTemplate);
        }
    }
/*
</br>
<div class="table-responsive">
    <table class="table align-middle mb-0 bg-white">
        <thead style="background-color: #D0D2D3">
            <tr>
                <th>Id</th>
                <th>Nome da Campanha</th>
                <th>Status (início / meio / fim)</th>
                <th>Subscritores</th>
                <th>Workflow</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    1234
                </td>
                <td>
                    <p class="fw-bold mb-1">John Doe</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">Software engineer</p>
                </td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td>Senior</td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                    Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    1234
                </td>
                <td>
                    <p class="fw-bold mb-1">Alex Ray</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">Consultant</p>
                </td>
                <td>
                    <span class="badge badge-primary rounded-pill d-inline">Onboarding</span>
                </td>
                <td>Junior</td>
                <td>
                    <button
                            type="button"
                            class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark">
                    Edit
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                    1234
                </td>
                <td>
                    <p class="fw-bold mb-1">Kate Hunington</p>
                </td>
                <td>
                    <p class="fw-normal mb-1">Designer</p>
                </td>
                <td>
                    <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                </td>
                <td>Senior</td>
                <td>
                    <button
                            type="button"
                            class="btn btn-link btn-rounded btn-sm fw-bold"
                            data-mdb-ripple-color="dark">
                    Edit
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
*/
?>