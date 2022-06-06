<?php
/* Smarty version 4.1.0, created on 2022-06-06 19:35:26
  from 'C:\xampp\htdocs\serwis\app\views\page_HOME.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e3aded9e399_41575287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3f874d872d10b2de64d30d847246476ea61e81e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_HOME.tpl',
      1 => 1654536925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:message.tpl' => 1,
  ),
),false)) {
function content_629e3aded9e399_41575287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925531544629e3aded795c3_95470462', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239313026629e3aded8ab84_16720107', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_838015045629e3aded9c888_08615219', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1925531544629e3aded795c3_95470462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1925531544629e3aded795c3_95470462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="one" class="spotlight style1 bottom">
        <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/warsztat_tlo.jpg" alt="" /></span>
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
        <span class="image fit main"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/zdj_oferta.jpg" alt="" /></span>
        <div class="content">
            <header>
                <h2>Oferowane usługi</h2>
                <p>Twój samochód potrzebuje naprawy?</p>
            </header>
            <p>Wiemy, że zepsuty samochód to duży problem. 
                Dlatego tu jesteśmy, naprawimy go tak szybko, jak to tylko możliwe. </p>
            <ul class="actions">
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'offerView'),$_smarty_tpl ) );?>
" class="button">Dowiedz się więcej o naszej ofercie!</a></li>
            </ul>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_239313026629e3aded8ab84_16720107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_239313026629e3aded8ab84_16720107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'homeView'),$_smarty_tpl ) );?>
">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'homeView'),$_smarty_tpl ) );?>
">Strona główna</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'offerView'),$_smarty_tpl ) );?>
">Oferta</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'ordersView'),$_smarty_tpl ) );?>
">Zamówienia</a></li>
                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" class="button primary">Wyloguj</a></li>
                            <?php } else { ?>	
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginView'),$_smarty_tpl ) );?>
" class="button primary">Zaloguj</a></li>
                            <?php }?>
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
            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/auto1.jpg" alt="" /></span>
            <a href="#one" class="goto-next scrolly">Przejdź do serwisu</a>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_838015045629e3aded9c888_08615219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_838015045629e3aded9c888_08615219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
        </ul>
    </section>
<?php
}
}
/* {/block 'footer'} */
}
