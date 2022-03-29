<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
        echo view('templates/menu-bar', $menu);
        echo view('pages/statistics/omnichannel/campaigns/search');
        echo view('pages/statistics/omnichannel/campaigns/result');
        echo view('pages/statistics/omnichannel/campaigns/view');
    ?>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#campaignSearch').show();
            $('#campaignResult').hide();
            $('#campaignView').hide();

			$('#campaignSearchSearch').on('click', function(){
                $('#campaignSearch').hide();
                $('#campaignResult').show();
                $('#campaignView').hide();
            });

            $('#campaignResultBack').on('click', function(){
                $('#campaignResult').hide();
                $('#campaignSearch').show();
                $('#campaignView').hide();
            });

            $('#campaignResultViewDetail').on('click', function(){
                $('#campaignSearch').hide();
                $('#campaignResult').hide();
                $('#campaignView').show();
            });

            $('.campaignViewBack').on('click', function(){
                $('#campaignView').hide();
                $('#campaignResult').show();
                $('#campaignSearch').hide();
            });
		});
    </script>

</div>
