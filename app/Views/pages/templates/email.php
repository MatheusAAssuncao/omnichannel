<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
        echo view('templates/menu-bar', $menu);
        echo view('pages/templates/email/create');
        echo view('pages/templates/email/view');
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#emailCreate').show();
            $('#emailView').hide();

			$('#emailCreateButtonView').on('click', function(){
                $('#emailCreate').hide();
                $('#emailView').show();
            });

            $('#emailCreateButtonBack').on('click', function(){
                $('#emailView').hide();
                $('#emailCreate').show();
            });

            $('.emailCreateButtonSave').on('click', function(){
                //save
            });
		});
    </script>
</div>