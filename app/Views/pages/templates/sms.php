<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
        echo view('templates/menu-bar', $menu);
        echo view('pages/templates/sms/create');
        echo view('pages/templates/sms/view');
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