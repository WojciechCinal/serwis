<?php
/* Smarty version 4.1.0, created on 2022-06-05 17:37:22
  from 'C:\xampp\htdocs\serwis\app\views\templates\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629ccdb2d8bca7_76448309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124a3a2fd7cd073aa638d43541317bc299db2d40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\templates\\message.tpl',
      1 => 1654443440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629ccdb2d8bca7_76448309 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <section>
        <div class="container">
        <h4> Dostępne wiadomości: </h4>
            <header class="section-header">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </header>
        </div>
    </section>
<?php }
}
}
