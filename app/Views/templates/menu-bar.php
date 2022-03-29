<style>
    @media (max-width: 768px) {
        .menu-bar {
            display: none !important;
        }

        .page-title-hamburger {
            cursor: pointer;
            display: flex;
            flex-direction: row !important;
            flex-wrap: nowrap;
            justify-content: flex-end !important;
        }

        .page-title-hamburger li {
            font: normal normal normal 18px/22px Roboto;
        }

        #hamburgerContent {
            background-color: rgb(112, 112, 112, .2);
        }
    }

    .menu-bar {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 40px;
    }

    .item-menu {
        /* topo | direita | inferior | esquerda */
        padding: 3px 12px 3px 12px;
    }

    .item-menu:hover {
        background-color: rgb(38, 50, 56, .1);
        border-left: 4px solid #FFBE00;
    }

    .menu-bar .active {
        background-color: rgb(38, 50, 56, .1);
        border-left: 4px solid #FFBE00;
    }

    .menu-bar .active span {
        font-weight: bold;
    }
</style>

<div class="menu-bar">
    <?php
        foreach ($menu as $key => $value) {
            echo '
                <a href="'.base_url().$value['url'].'" data-name="'.$value['url'].'">
                    <div class="item-menu '.$value['class'].'">
                        <span>'.$key.'</span>
                    </div>
                </a>
            ';
        }
    ?>
</div>

<div class="page-title-hamburger">
        <nav>

            <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#hamburgerContent"
            aria-controls="hamburgerContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><?= getAwesomeIcon('bars', '', '2x')?></span>
            </button>

            <div class="collapse navbar-collapse" id="hamburgerContent">
                <ul class="navbar-nav mr-auto">
                    <?php
                        foreach ($menu as $key => $value) {
                            echo '
                            <li class="nav-item">
                                <a href="'.base_url().$value['url'].'" class="nav-link" data-name="'.$value['url'].'">
                                    <div class="item-menu '.$value['class'].'">
                                        <span>'.$key.'</span>
                                    </div>
                                </a>
                            </li>
                            ';
                        }    
                    ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul> -->
            </div>
        </nav>
</div>

<script>
    if ($(window).width() < 768) {
        $('.page-title-hamburger').show();
    }
</script>