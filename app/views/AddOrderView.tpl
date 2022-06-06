{extends file="main.tpl"}

{block name=content}
    <div class="container">
        <section>
            </br></br>
            {include file="message.tpl"}
            <form action="{url action='orderAdd'}" method="post">
                <h3>Dodaj nowe zamówienie</h3>
                <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_data">Data: </label>
                            <input id="id_data" type="text" name="data"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_marka">Marka: </label>
                            <input id="id_marka" type="text" name="marka"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_model">Model: </label>
                            <input id="id_model" type="text" name="model" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_nrr">Nr rejestracyjny: </label>
                            <input id="id_nrr" type="text" name="nrr" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_naprawa">Nazwa naprawy: </label>
                            <select name="naprawa">
                                {foreach $repair_list as $r}
                                <option value={$r["ID_Naprawy"]}> {$r["Nazwa_naprawy"]}, {$r["Cena"]} zł </option>
                                {/foreach}
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

