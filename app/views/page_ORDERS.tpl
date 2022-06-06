{extends file="main.tpl"}

{block name=content}
    {include file="message.tpl"}
    <section id="one">
        <div class="container">
                <button style="float: right; margin-bottom: 15px; padding: 10px">
                <a href="{url action='orderAddView'}">DODAJ ZAMÓWIENIE</a></button>
            <table>
                <tr><th style="text-align: center">DATA</th> <th style="text-align: center">MARKA</th> 
                    <th style="text-align: center">MODEL</th> <th style="text-align: center">NR REJ</th>
                    <th style="text-align: center">CENA</th> <th style="text-align: center">NAZWA NAPRAWY</th>
                    <th style="text-align: center">UŻYTKOWNIK</th><th style="text-align: center">OPCJE</th></tr>

                {foreach $order_list as $wiersz}
                    <tr>
                        <td>{$wiersz["Data"]}</td>
                        <td style="text-align: center">{$wiersz["Marka"]}</td>
                        <td style="text-align: center">{$wiersz["Model"]}</td>
                        <td style="text-align: center">{$wiersz["Nr_rejestracyjny"]}</td>
                        <td style="text-align: center">{$wiersz["Cena"]}</td>
                        <td>{$wiersz["Nazwa_naprawy"]} </td>
                        <td style="text-align: center">{$wiersz["login"]} </td>
                        <td style="text-align: center">
                            <a class="button" href="{url action='ordersView'}/?deleteid={$wiersz["ID_Zamowienia"]}">Usuń</a>
                        </td>
                    </tr>
                {/foreach}
            </table>
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
                        <li><a href="{url action='logout'}" class="button primary">Wyloguj</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </section>

    <section id="banner">
        <div class="content">
            <header>
                <h2>Serwis samochodowy</h2>
                <p>Zamówienia.</p>
            </header>
            <span class="image"><img src="{$conf->app_url}/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do zamówień</a></li>
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