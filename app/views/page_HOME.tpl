{extends file="main.tpl"}

{block name=content}

{/block}
{block name=header}
    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.php">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Strona główna</a></li>
                        <li><a href="{url action='page_orders'}">Zamówienia</a></li>
                        <li><a href="#" class="button primary">Zaloguj</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </section>

    <section id="banner">
        <div class="content">
            <header>
                <h2>Serwis samochodowy</h2>
                <h3>Witaj w aplikacji bazo-danowej dla serwisu samochodowego.</br></h3>
                <p>
                    Projekt zaliczeniowy. </br>
                    Wykorzystano szablon <strong>LANDED</strong> ze strony: <a href="http://html5up.net" target="_blank">HTML5 UP</a>.   
                </p>
            </header>
            <span class="image"><img src="{$conf->app_url}/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do serwisu</a></li>
    </section>
{/block} 

{block name=footer}
    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
        </ul>
    </section>
{/block}

