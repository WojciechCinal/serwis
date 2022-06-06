<?php
/* Smarty version 4.1.0, created on 2022-06-06 22:45:09
  from 'C:\xampp\htdocs\serwis\app\views\AddOrderView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e6755153f56_98230784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0bf7b191f230bf2748dd0a090601d56b09b50b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\AddOrderView.tpl',
      1 => 1654544492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:message.tpl' => 1,
  ),
),false)) {
function content_629e6755153f56_98230784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284884800629e675512b8c4_07052893', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1612681295629e675514a865_22709063', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634013533629e6755152273_95514634', 'footer');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1284884800629e675512b8c4_07052893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1284884800629e675512b8c4_07052893',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <section>
            </br></br>
            <?php $_smarty_tpl->_subTemplateRender("file:message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'orderAdd'),$_smarty_tpl ) );?>
" method="post">
                <h3>Dodaj nowe zamówienie</h3>
                <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_data">Data: </label>
                            <input id="id_data" type="text" name="data"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_marka">Marka: </label>
                            <input id="id_marka" type="text" name="marka"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_model">Model: </label>
                            <input id="id_model" type="text" name="model" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_nrr">Nr rejestracyjny: </label>
                            <input id="id_nrr" type="text" name="nrr" /><br />
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_naprawa">Nazwa naprawy: </label>
                            <select name="naprawa">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repair_list']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['r']->value["ID_Naprawy"];?>
> <?php echo $_smarty_tpl->tpl_vars['r']->value["Nazwa_naprawy"];?>
, <?php echo $_smarty_tpl->tpl_vars['r']->value["Cena"];?>
 zł </option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div>
                            <input type="submit" value="Dodaj" class="primary"/>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
    </div>
<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_1612681295629e675514a865_22709063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1612681295629e675514a865_22709063',
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

<?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_634013533629e6755152273_95514634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_634013533629e6755152273_95514634',
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
