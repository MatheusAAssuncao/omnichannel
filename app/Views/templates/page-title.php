
<style>
    .navbar-toggler.hamburger {
        cursor: pointer;
    }
</style>

<div class="page-title">
    <div class="page-title-logo">
        <img class="img-logo" src="<?= base_url()?>/assets/images/<?= esc($page_header['logo']) ?>" alt="<?= esc($page_header['name']) ?>"/>
        <h1><?= esc($page_header['name']) ?></h1>
    </div>
    
    <!-- Only appears on mobile. Should call jquery selector on class and set show() in the end of page -->
    <!-- <div class="page-title-hamburger">
        <?//= getAwesomeIcon('bars')?>
        <nav>

            <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#hamburgerContent"
            aria-controls="hamburgerContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><?//= getAwesomeIcon('bars')?></span>
            </button>

            <div class="collapse navbar-collapse" id="hamburgerContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> -->
</div>
