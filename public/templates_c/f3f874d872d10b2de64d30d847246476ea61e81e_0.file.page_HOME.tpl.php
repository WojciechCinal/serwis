<?php
/* Smarty version 4.1.0, created on 2022-05-14 15:47:28
  from 'C:\xampp\htdocs\serwis\app\views\page_HOME.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fb2f04dc359_14780879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3f874d872d10b2de64d30d847246476ea61e81e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_HOME.tpl',
      1 => 1652536045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fb2f04dc359_14780879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227032468627fb2f04d4709_59365598', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170293240627fb2f04d5461_67689606', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_943598381627fb2f04dbc77_09750454', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_227032468627fb2f04d4709_59365598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_227032468627fb2f04d4709_59365598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_170293240627fb2f04d5461_67689606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_170293240627fb2f04d5461_67689606',
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
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'page_orders'),$_smarty_tpl ) );?>
">Zamówienia</a></li>
                        <li><a href="#" class="button primary">Zaloguj</a></li>
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
                    Wykorzystano szablon <strong>LANDED</strong> ze strony: <a href="http://html5up.net" target="_blank">HTML5 UP</a>.   
                </p>
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
class Block_943598381627fb2f04dbc77_09750454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_943598381627fb2f04dbc77_09750454',
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
