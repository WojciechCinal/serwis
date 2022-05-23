{extends file="main.tpl"}

{block name=content}
    <div class="container">
        <section>
            </br></br>
            <form action="{url action='offerAdd'}" method="post">
                <h3>Dodaj nową ofertę</h3>
                <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_nazwa">Nazwa naprawy: </label>
                            <input id="id_nazwa" type="text" name="nazwa"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_cena">Cena: </label>
                            <input id="id_cena" type="text" name="cena" /><br />
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_kategoria">Kategoria: </label>
                            <select name="kategoria">
                                <option value="UP">Usługa podstawowa</option>
                                <option value="UN">Układ napędowy</option>
                                <option value="US">Układ spalinowy</option>
                                <option value="LB">Lakierniczo - blacharskie</option>
                                <option value="W">Wulkanizacja</option>
                            </select>
                        </div>

                        <div>
                            <input type="submit" value="Dodaj" class="primary"/>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
{/block}
{block name=header}
    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.php">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Strona główna</a></li>
                        <li><a href="{url action='offerView'}">Oferta</a></li>
                        <li><a href="{url action='ordersView'}">Zamówienia</a></li>
                    </ul>
                </nav>
            </header>
        </div>
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
