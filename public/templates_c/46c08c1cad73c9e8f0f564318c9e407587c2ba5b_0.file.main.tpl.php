<?php
/* Smarty version 4.1.0, created on 2022-05-14 14:09:09
  from 'C:\xampp\htdocs\serwis\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627f9be51f33d4_95676889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c08c1cad73c9e8f0f564318c9e407587c2ba5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\templates\\main.tpl',
      1 => 1652530128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627f9be51f33d4_95676889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Serwis samochodowy" ?? null : $tmp);?>
</title>
    </head>
    <body>
        <div class="header">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1270677850627f9be51ef715_28636756', 'header');
?>

        </div>

        <div class="page-wrapper">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_430803213627f9be51eff57_19829871', 'content');
?>

        </div>

        <div class="footer">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1391516399627f9be51f0680_26648181', 'footer');
?>
	
        </div>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/main.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
/* {block 'header'} */
class Block_1270677850627f9be51ef715_28636756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1270677850627f9be51ef715_28636756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 naglowek .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_430803213627f9be51eff57_19829871 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_430803213627f9be51eff57_19829871',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 kontent .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1391516399627f9be51f0680_26648181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1391516399627f9be51f0680_26648181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 stopka ....<?php
}
}
/* {/block 'footer'} */
}
