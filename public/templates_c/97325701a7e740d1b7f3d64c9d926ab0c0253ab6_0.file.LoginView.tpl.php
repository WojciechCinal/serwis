<?php
/* Smarty version 4.1.0, created on 2022-06-05 18:59:11
  from 'C:\xampp\htdocs\serwis\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629ce0df3116b3_08212309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97325701a7e740d1b7f3d64c9d926ab0c0253ab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\LoginView.tpl',
      1 => 1654443152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:message.tpl' => 1,
  ),
),false)) {
function content_629ce0df3116b3_08212309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_958303978629ce0df2f7ef3_26034586', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1827930783629ce0df302a18_38857311', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1212150548629ce0df30ff36_11532693', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_958303978629ce0df2f7ef3_26034586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_958303978629ce0df2f7ef3_26034586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
" method="post">
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

                <?php $_smarty_tpl->_subTemplateRender("file:message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </section>
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_1827930783629ce0df302a18_38857311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1827930783629ce0df302a18_38857311',
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
            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do logowania.</a></li>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1212150548629ce0df30ff36_11532693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1212150548629ce0df30ff36_11532693',
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
