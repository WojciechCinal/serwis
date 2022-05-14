<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title>{$page_title|default:"Serwis samochodowy"}</title>
    </head>
    <body>
        <div class="header">
            {block name=header} naglowek .... {/block}
        </div>

        <div class="page-wrapper">
            {block name=content} kontent .... {/block}
        </div>

        <div class="footer">
            {block name=footer} stopka ....{/block}	
        </div>

        <script src="{$conf->$app_url}/assets/js/jquery.min.js"></script>
        <script src="{$conf->$app_url}/assets/js/jquery.scrolly.min.js"></script>
        <script src="{$conf->$app_url}/assets/js/browser.min.js"></script>
        <script src="{$conf->$app_url}/assets/js/breakpoints.min.js"></script>
        <script src="{$conf->$app_url}/assets/js/util.js"></script>
        <script src="{$conf->$app_url}/assets/js/main.js"></script>

    </body>
</html>