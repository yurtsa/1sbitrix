<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!--
https://w3layouts.com/voguish-a-blogging-category-flat-bootstrap-responsive-web-template/
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php

    use Bitrix\Main\Page\Asset;

    $APPLICATION->ShowHead();
    ?>

    <title><?php $APPLICATION->ShowTitle() ?></title>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>");
    Asset::getInstance()->addString('<link type="image/x-icon" href="' . SITE_TEMPLATE_PATH . '/favicon.ico" rel="shortcut icon" />');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/responsiveslides.min.js");
    CJScore::Init(['jquery']);

    ?>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>

</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!-- header -->
<div class="header">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/logo.php"
            )
        ); ?>

        <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
            "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
            "DELAY" => "N",    // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",    // Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "N",    // Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
            "ROOT_MENU_TYPE" => "main",    // Тип меню для первого уровня
            "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        ); ?>
        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".head-nav ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->


        <div class="clearfix"></div>
    </div>
</div>
<!-- header -->
<div class="container">
    <div class="col-md-9 bann-right">