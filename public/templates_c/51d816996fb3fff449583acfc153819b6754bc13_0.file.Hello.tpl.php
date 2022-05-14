<?php
/* Smarty version 4.1.0, created on 2022-05-10 12:31:32
  from 'C:\xampp\htdocs\serw\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a3f04347136_81452804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d816996fb3fff449583acfc153819b6754bc13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serw\\app\\views\\Hello.tpl',
      1 => 1652178690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a3f04347136_81452804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1220406479627a3f04345c66_40091619', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_812917413627a3f04346579_40606471', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_544207213627a3f04346c00_45697394', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1220406479627a3f04345c66_40091619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1220406479627a3f04345c66_40091619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h1>Witaj w aplikacji bazo-danowej dla serwisu samochodowego.<br />
                Wykorzystano szablon <strong>LANDED</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
            <p>Projekt zaliczeniowy</p>
            <ul class="actions special">
                <li><a href="#one" class="button scrolly">Przejdź do serwisu</a></li>
            </ul>
<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_812917413627a3f04346579_40606471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_812917413627a3f04346579_40606471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <header id="header">
                <h1 id="logo"><a href="index.html">Landed</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
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
class Block_544207213627a3f04346c00_45697394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_544207213627a3f04346c00_45697394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </section>
<?php
}
}
/* {/block 'footer'} */
}
