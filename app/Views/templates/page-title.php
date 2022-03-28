
<div class="page-title">
    <div class="page-title-logo">
        <img class="img-logo" src="<?= base_url()?>/assets/images/<?= esc($page_header['logo']) ?>" alt="<?= esc($page_header['name']) ?>"/>
        <h1><?= esc($page_header['name']) ?></h1>
    </div>
    
    <!-- Only appears on mobile. Should call jquery selector on class and set show() in the end of page -->
    <div class="page-title-hamburguer">
        <?= getAwesomeIcon('bars')?>
    </div>
</div>
