<?php
/* Smarty version 4.1.0, created on 2022-05-15 17:53:32
  from 'C:\xampp\htdocs\serwis\app\views\page_ORDERS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628121fcdc3fe9_66639314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d2ba1751d8a9188cddb970ef1068eb25701436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_ORDERS.tpl',
      1 => 1652630009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628121fcdc3fe9_66639314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90713370628121fcdbc186_25995997', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1085519288628121fcdbcc38_18929611', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149660200628121fcdc3901_02414211', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_90713370628121fcdbc186_25995997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_90713370628121fcdbc186_25995997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_1085519288628121fcdbcc38_18929611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1085519288628121fcdbcc38_18929611',
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
                <p>Zamówienia.</p>
            </header>
            <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/auto1.jpg" alt="" /></span>
        </div>
        <li> <a href="#one" class="goto-next scrolly">Przejdź do zamówień</a></li>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1149660200628121fcdc3901_02414211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1149660200628121fcdc3901_02414211',
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
