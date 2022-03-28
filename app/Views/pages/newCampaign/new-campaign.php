<div id="content" class="container">
    <?php
        echo view('templates/collapse-sidebar-button-mobile');
        echo view('templates/page-title', ['page_header' => $page_header]);
    ?>

    <div class="container">
        <form action="new-campaign" method="post">
            <?php include("newCampaignSteps/step1.php");?>
            <?php include("newCampaignSteps/step2.php");?>
            <?php include("newCampaignSteps/step3.php");?>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#step1').hide();
            $('#step2').hide();
            $('#step3').show();

			$('#step1ButtonNext').on('click', function(){
                $('#step1').hide();
                $('#step2').show();
            });

            $('#step2ButtonNext').on('click', function(){
                $('#step2').hide();
                $('#step3').show();
            });

            $('#step3ButtonBack').on('click', function(){
                $('#step3').hide();
                $('#step2').show();
            });
		});
    </script>
</div>
