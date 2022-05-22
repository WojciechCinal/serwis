{extends file="main.tpl"}

{block name=content}
    <section>
        {if $msgs->isMessage()}
            <div class="messages">
                <h4>Informacje: </h4>
                <ol class="err">
                    {foreach $msgs->getMessages() as $msg}
                        {strip}
                            <li>{$msg->text}</li>
                            {/strip}
                        {/foreach}
                </ol>
            </div>
        {/if}             
    </section> 
{/block}
{block name=header}
    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.php">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Strona główna</a></li>
                        <li><a href="{url action='page_offer'}">Oferta</a></li>
                        <li><a href="{url action='page_orders'}">Zamówienia</a></li>
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
                <p>Nasza oferta napraw.</p>
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


