<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />


    <link rel="icon" href="/favicon.ico">


    <title><?$APPLICATION->ShowTitle()?></title>

    <?$APPLICATION->ShowHead();?>

    <meta charset="utf-8">
    <meta name="yandex-verification" content="6356020480983901" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?=SITE_TEMPLATE_PATH?>/css/nanoscroller.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/fonts.css">
    <link href="//fonts.googleapis.com/css?family=Cambria&subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/css_pack.css" type="text/css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/layout.css" type="text/css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/js/owl/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style_v.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.9.1.js"></script>

    <script src="//yastatic.net/taxi-widget/ya-taxi-widget.js"></script>


</head>
<body class="<? if(CSite::InDir('/index.php')): ?>main<? else: ?>in<? endif; ?>">

<div class="contact-header">
    <ul>
        <li><?= tplvar('phone_header', true);?></li>
        <li><?= tplvar('address_header', true);?></li>
        <li><?= tplvar('field_header', true);?></li>
    </ul>
    <div class="cause-taxi">
        <div class="ya-taxi-widget" data-use-location="true" data-size="xs" data-theme="dark" data-title="Вызвать такси" data-point-a="" data-point-b="39.213555,51.671433" data-ref="http%3A%2F%2Fteatro36.ru" data-proxy-url="https://3.redirect.appmetrica.yandex.com/route?start-lat={start-lat}&amp;start-lon={start-lon}&amp;end-lat={end-lat}&amp;end-lon={end-lon}&amp;ref={ref}&amp;appmetrica_tracking_id=1178268795219780156"></div>
    </div>
</div>

<style>
    #panel {
        position: fixed;
        top: 0px;
        z-index: 10000;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        transition: top 0.2s;
    }

    #panel.hiddenz {
        top: -200px;
        display: none;
    }
</style>

<script>
    $(function(){
        var panel = $('#panel');
        panel.toggleClass('hiddenz');
        $(document).keypress("z",function(e) {
            if(e.ctrlKey && e.keyCode == '26') {
             //   console.dir(e);
             //   console.dir('ctrl+z pressed');
                panel.toggleClass('hiddenz');
            }
        });
    });
</script>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="wrapper_main">
    <div class="ST_teatro">


        <div class="header">
            <div class="container">
                <nav class="navbar">
                    <button class="navbar-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="menu-title">Меню</div>
                    <div class="menu-phone"></div>
                    <div class="navbar-hidden nav-hide">
                        <button href="#" class="navbar-close"></button>

                        <ul class="menu">
                            <li class="item-137"><a href="/" >Главная</a></li>
                            <li class="item-141"><span class="separator"><img src="/images/menu_point.png" alt="point1" /></span></li>
                            <li class="item-103"><a href="/actresses/" >Актрисы</a></li>
                            <li class="item-142"><span class="separator"><img src="/images/menu_point.png" alt="point2" /></span></li>
                            <li class="item-136 deeper parent">
                                <span class="separator">Репертуар</span>
                                <ul>
                                    <li class="item-121"><a href="/repertuar/" >Программы</a></li>
                                    <li class="item-152"><a href="/dop-programm/" >Дополнительные услуги</a></li>
                                    <li class="item-151"><a href="/teatralnoe-uchilishche/" >Театральное училище</a></li>
                                </ul>
                            </li>
                            <li class="item-143"><span class="separator"><img src="/images/menu_point.png" alt="point3" /></span></li>
                            <li class="item-104"><a href="/offers/" >Спецпредложения</a></li>
                            <li class="item-144"><span class="separator"><img src="/images/menu_point.png" alt="point4" /></span></li>
                            <li class="item-153 deeper parent"><span class="separator">О Teatro</span>
                                <ul>
                                    <li class="item-105"><a href="/interer/" >Интерьер</a></li>
                                    <li class="item-106"><a href="/reviews/" >Отзывы</a></li>
                                    <li class="item-147"><a href="/pravila-poseshcheniya/" >Правила посещения</a></li>
                                    <li class="item-150"><a href="/trudoustrojstvo/" >Трудоустройство</a></li>
                                </ul>
                            </li>
                            <li class="item-145"><span class="separator"><img src="/images/menu_point.png" alt="point5" /></span></li>
                            <li class="item-107"><a href="/contacts/" >Контакты</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
