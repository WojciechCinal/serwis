{extends file="main.tpl"}
{block name=content}
    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="{url action='login'}" method="post">
                    <legend>Logowanie do systemu</legend>
                    <fieldset>
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <label for="id_login">Login: </label>
                                <input id="id_login" type="text" name="login"/>
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="id_pass">Hasło: </label>
                                <input id="id_pass" type="password" name="pass" /><br />
                            </div>

                            <div>
                                <input type="submit" value="Zaloguj" class="primary"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
            <section>

                {include file="message.tpl"}

            </section>
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
                    </ul>
                </nav>
            </header>
        </div>
    </section>

    <section id="banner">
        <div class="content">
            <header>
                <h2>Serwis samochodowy</h2>
                <p>Logowanie do systemu. </p>
            </header>
            <span class="image"><img src="{$conf->app_url}/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do logowania.</a></li>
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