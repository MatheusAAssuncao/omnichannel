<?php
    namespace App\Views\templates;

    class Modal {

        protected $pageHeader;
        protected $size = "lg";

        /**
         * Initialize a Bootstrap Modal
         *
         * @param array $pageHeader page header array initialized by controller
         */
        function __construct(array $pageHeader) {
            $this->pageHeader = $pageHeader;
        }

        /**
         * Modal's size
         *
         * @param string|null $value choose between lg, sm
         */
        function setSize($value = "") {
            $this->size = $value;
        }

        function generate($content = "") {
            $modal = '
                <div class="modal fade omniModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-'.$this->size.'">
                    <div class="modal-content">
                        '.view('templates/modal-title', ['page_header' => $this->pageHeader]).'
                        '.$content.'
                    </div>
                    </div>
                </div>';
            echo $modal;
        }
    }

?>

