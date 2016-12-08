<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.12.2016
 * Time: 11:01
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?=LANGUAGE_ID?>">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>

    <?Asset::getInstance()->
    addJs(SITE_TEMPLATE_PATH."template_styles.css");?>

    <!--[if lte IE 6]>
   <?Asset::getInstance()->
    addCss(SITE_TEMPLATE_PATH."_include/css/ie6.css");?>

    <meta name="keywwords" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />
    <meta name="description" content="Shop Around - Great free html template for on-line shop. Use it as a start point for your on line business. The template can be easily implemented in many open source E-commerce platforms" />

    <!-- JS -->
<?Asset::getInstance()->
addJs(SITE_TEMPLATE_PATH."_include/js/jquery-1.4.1.min.js", true);?>
    <?Asset::getInstance()->
addJs(SITE_TEMPLATE_PATH."_include/js/jquery.jcarousel.pack.js", true);?>
    <?Asset::getInstance()->
addJs(SITE_TEMPLATE_PATH."_include/js/jquery-func.js", true);?>
    <!-- End JS -->

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- Shell -->
<div class="shell">

    <!-- Header -->
    <div id="header">
        <h1 id="logo"><a href="#">shoparound</a></h1>

        <!-- Cart -->
        <div id="cart">
            <a href="#" class="cart-link">Your Shopping Cart</a>
            <div class="cl">&nbsp;</div>
            <span>Articles: <strong>4</strong></span>
            &nbsp;&nbsp;
            <span>Cost: <strong>$250.99</strong></span>
        </div>
        <!-- End Cart -->

        <!-- Navigation -->
        <div id="navigation">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">The Store</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- End Navigation -->
    </div>
    <!-- End Header -->
    <!-- Main -->
    <div id="main">
        <div class="cl">&nbsp;</div>

        <!-- Content -->
        <div id="content">
