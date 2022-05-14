<?php
/* Smarty version 4.1.0, created on 2022-05-14 14:53:31
  from 'C:\xampp\htdocs\serwis\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fa64b7c0494_53802888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b6e898997d1300980e0a24ef093656118c8f24d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\Hello.tpl',
      1 => 1652532809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fa64b7c0494_53802888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1928614054627fa64b7bb235_61740793', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293364197627fa64b7bf663_48226820', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495111840627fa64b7bfe30_76483403', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1928614054627fa64b7bb235_61740793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1928614054627fa64b7bb235_61740793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="banner">
        <div class="content">
            <header>
                <h2>Serwis samochodowy</h2>
                <p>Witaj w aplikacji bazo-danowej dla serwisu samochodowego.</br>
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
/* {/block 'content'} */
/* {block 'header'} */
class Block_293364197627fa64b7bf663_48226820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_293364197627fa64b7bf663_48226820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.html">Serwis samochodowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">Strona główna</a></li>
                        <li>
                            <a href="#">Layouts</a>
                            <ul>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                <li>
                                    <a href="#">Submenu</a>
                                    <ul>
                                        <li><a href="#">Option 1</a></li>
                                        <li><a href="#">Option 2</a></li>
                                        <li><a href="#">Option 3</a></li>
                                        <li><a href="#">Option 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="#" class="button primary">Sign Up</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_495111840627fa64b7bfe30_76483403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_495111840627fa64b7bfe30_76483403',
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
