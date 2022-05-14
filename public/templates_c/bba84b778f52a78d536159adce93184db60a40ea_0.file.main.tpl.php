<?php
/* Smarty version 4.1.0, created on 2022-05-10 12:32:09
  from 'C:\xampp\htdocs\serw\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a3f29139750_92342721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba84b778f52a78d536159adce93184db60a40ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serw\\app\\views\\templates\\main.tpl',
      1 => 1652178727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a3f29139750_92342721 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Landed by HTML5 UP" ?? null : $tmp);?>
</title>
</head>
<body>
<div class="header">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_786644312627a3f29136124_70694445', 'header');
?>

</div>

<div class="page-wrapper">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306718730627a3f29136a22_20317516', 'content');
?>

</div>

<div class="footer">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1030512218627a3f29137023_34050021', 'footer');
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
class Block_786644312627a3f29136124_70694445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_786644312627a3f29136124_70694445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 naglowek .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1306718730627a3f29136a22_20317516 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1306718730627a3f29136a22_20317516',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 kontent .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1030512218627a3f29137023_34050021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1030512218627a3f29137023_34050021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 stopka ....<?php
}
}
/* {/block 'footer'} */
}
