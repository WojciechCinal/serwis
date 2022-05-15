<?php
/* Smarty version 4.1.0, created on 2022-05-15 20:03:00
  from 'C:\xampp\htdocs\serwis\app\views\page_OFFER.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628140542c3b34_85531353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e5eb6556db7822b2cd3792083e20dc86de3875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_OFFER.tpl',
      1 => 1652637778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628140542c3b34_85531353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_221488396628140542ba1c0_23448442', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1690954764628140542baf25_63982678', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_845964188628140542c3311_18522755', 'footer');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_221488396628140542ba1c0_23448442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_221488396628140542ba1c0_23448442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_1690954764628140542baf25_63982678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1690954764628140542baf25_63982678',
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
                <p>Nasza oferta napraw.</p>
            </header>
            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do serwisu</a></li>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_845964188628140542c3311_18522755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_845964188628140542c3311_18522755',
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
