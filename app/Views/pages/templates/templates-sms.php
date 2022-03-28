<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
        $data['data']['Adicionar Template SMS'] = ['url' => '/templates/sms', 'class' => 'active'];
        $data['data']['Adicionar Template Email'] = ['url' => '/templates/email', 'class' => ''];
        echo view('templates/menu-bar', $data);
        echo view('pages/templates/templatesTypes/sms-create');
        echo view('pages/templates/templatesTypes/sms-view');
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#smsCreate').show();
            $('#smsView').hide();

			$('#smsCreateButtonView').on('click', function(){
                $('#smsCreate').hide();
                $('#smsView').show();
            });

            $('#smsCreateButtonBack').on('click', function(){
                $('#smsView').hide();
                $('#smsCreate').show();
            });

            $('.smsCreateButtonSave').on('click', function(){
                //save
            });
		});
    </script>
</div>