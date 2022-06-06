{extends file="main.tpl"}

{block name=content}
    {include file="message.tpl"}
    <section id="one" class="spotlight style1 bottom">
        <span class="image fit main"><img src="{$conf->app_url}/images/warsztat_tlo.jpg" alt="" /></span>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-12-medium">
                        <header>
                            <h2>Historia naszego warsztatu.</h2>
                            <p>Kraków 2002 rok, to tutaj wszystko się zaczęło...</p>
                        </header>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>Nasz serwis został założony przez pasjonatów mechaniki samochodowej: Jana Nowaka i Jakuba Kowalskiego, 
                            którzy nadal mają ogromny wpływ na rozwój naszej firmy.</p>
                    </div>
                    <div class="col-4 col-12-medium">
                        <p>Nasz warsztat zatrudnia wysokiej klasy specjalistów branży motoryzacyjnej. Dzięki naszym mechanikom,
                            którzy swoją pasję łączą z pracą, udało się nam zdobyć już dwunastą nagrodę WARSZRATU ROKU! </p>
                    </div>
                </div>
                <a href="#two" class="goto-next scrolly"></a>
            </div>
        </div>

    </section>
    <section id="two" class="spotlight style2 bottom">
        <span class="image fit main"><img src="{$conf->app_url}/images/zdj_oferta.jpg" alt="" /></span>
        <div class="content">
            <header>
                <h2>Oferowane usługi</h2>
                <p>Twój samochód potrzebuje naprawy?</p>
            </header>
            <p>Wiemy, że zepsuty samochód to duży problem. 
                Dlatego tu jesteśmy, naprawimy go tak szybko, jak to tylko możliwe. </p>
            <ul class="actions">
                <li><a href="{url action='offerView'}" class="button">Dowiedz się więcej o naszej ofercie!</a></li>
            </ul>
        </div>
    </section>

{/block}
{block name=header}
    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="{url action='homeView'}">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="{url action='homeView'}">Strona główna</a></li>
                        <li><a href="{url action='offerView'}">Oferta</a></li>
                        <li><a href="{url action='ordersView'}">Zamówienia</a></li>
                            {if count($conf->roles)>0}
                            <li><a href="{url action='logout'}" class="button primary">Wyloguj</a></li>
                            {else}	
                            <li><a href="{url action='loginView'}" class="button primary">Zaloguj</a></li>
                            {/if}
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
                    Wykorzystano szablon <strong>LANDED</strong> ze strony: <a href="http://html5up.net" target="_blank">HTML5 UP</a>   
                </p>
            </header>
            <span class="image"><img src="{$conf->app_url}/images/auto1.jpg" alt="" /></span>
            <a href="#one" class="goto-next scrolly">Przejdź do serwisu</a>
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

