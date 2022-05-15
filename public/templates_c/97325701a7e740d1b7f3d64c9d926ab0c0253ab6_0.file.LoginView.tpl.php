<?php
/* Smarty version 4.1.0, created on 2022-05-15 18:21:07
  from 'C:\xampp\htdocs\serwis\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62812873e4ba82_62068473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97325701a7e740d1b7f3d64c9d926ab0c0253ab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\LoginView.tpl',
      1 => 1652631655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62812873e4ba82_62068473 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106723339862812873e434d8_45612218', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51876098062812873e46771_19379652', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214353406162812873e4b1c3_55783371', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_106723339862812873e434d8_45612218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106723339862812873e434d8_45612218',
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
        </div>
    </section>

<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_51876098062812873e46771_19379652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_51876098062812873e46771_19379652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.php">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Strona główna</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'page_offer'),$_smarty_tpl ) );?>
">Oferta</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'page_orders'),$_smarty_tpl ) );?>
">Zamówienia</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginView'),$_smarty_tpl ) );?>
" class="button primary">Zaloguj</a></li>
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
class Block_214353406162812873e4b1c3_55783371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_214353406162812873e4b1c3_55783371',
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
