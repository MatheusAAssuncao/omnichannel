<?php
    namespace App\Views\templates;

    use CodeIgniter\View\Table as codeIgniterTable;

    class Table extends codeIgniterTable {
        
        protected $customTemplate = array(
            'table_open'         => '</br><div class="table-responsive"><table class="table align-middle mb-0 bg-white table-striped">',
        
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

        /**
         * Create a new html table
         *
         * @param bool $tableTotal if true, it generates a stylized table for total values. Default false 
         */
        function __construct($tableTotal = false) {
            if ($tableTotal) {
                $this->customTemplate['thead_open'] = "<thead style='background-color: #263238'>";
                $this->customTemplate['heading_cell_start'] = "<th style='color: #FAFAFA'>";
                $this->customTemplate['cell_start'] = "<td style='font-weight: bold'>";
            }

            parent::__construct();
            $this->setTemplate($this->customTemplate);
        }
    }
?>