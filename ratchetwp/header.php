<?php
/**
 * Default Page Header
 *
 * @package WordPress
 * @subpackage Ratchetwp
 * @since Ratchetwp 0.1
 *
 * Last Revised: May 14, 2015
 */
global $childDir;
$childDir = dirname(get_bloginfo('stylesheet_url'));
?><!DOCTYPE html>
<!-- Ratchetwp -->
<!-- http://www.anomalous.co.za/ratchetwp -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php print $childDir; ?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php print $childDir; ?>/assets/ico/apple-touch-icon-57x57-precomposed.png">
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
        <script src="<?php print $childDir; ?>/assets/js/vendor/html5shiv.js"></script>
    <![endif]-->
</head>
<body <?php body_class(''); ?>>
    <!--[if lt IE 9]>
    <h3>Please upgrade your web browser</h3>
    <p>We recommend that you <a href="http://browsehappy.com/" style="color:#000;text-decoration:underline">upgrade</a> your web browser so you can use this Website.</p>
    <p>Why do I have to update my browser?<br> Old browsers (especially Internet Explorer versions 6, 7, and 8) are less stable, and much more vulnerable to viruses, spyware, malware, and other security issues. So security alone is a very good reason to upgrade.<br><br> But there is more: We rely on new Web design technologies. These new languages serve as a foundation for many websites today, and for virtually all new websites and Web apps. But unfortunately, many of these new websites will neither look nor function in the same way in old browsers like IE8.</p>
    <p>Thanks</p>
    <![endif]-->
    