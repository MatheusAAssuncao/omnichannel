<style>
    @media (max-width: 768px) {
        .menu-bar {
            display: none !important;
        }
    }

    .menu-bar {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 40px;
    }

    .menu-bar .item-menu {
        /* topo | direita | inferior | esquerda */
        padding: 3px 12px 3px 12px;
    }

    .menu-bar .active {
        background-color: rgb(38, 50, 56, .1);
        border-left: 4px solid #FFBE00;
    }

    .menu-bar .active span {
        font-weight: bold;
    }

    .menu-bar .item-menu:hover {
        background-color: rgb(38, 50, 56, .1);
        border-left: 4px solid #FFBE00;
    }
</style>

<div class="menu-bar">
    <?php
        foreach ($data as $key => $value) {
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

<script>
    if ($(window).width() < 768) {
        $('.page-title-hamburguer').show();
    }
</script>