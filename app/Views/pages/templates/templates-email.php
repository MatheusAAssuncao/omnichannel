<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
        $data['data']['Adicionar Template SMS'] = ['url' => '/templates/sms', 'class' => ''];
        $data['data']['Adicionar Template Email'] = ['url' => '/templates/email', 'class' => 'active'];
        echo view('templates/menu-bar', $data);
        echo view('pages/templates/templatesTypes/email-create');
        echo view('pages/templates/templatesTypes/email-view');
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