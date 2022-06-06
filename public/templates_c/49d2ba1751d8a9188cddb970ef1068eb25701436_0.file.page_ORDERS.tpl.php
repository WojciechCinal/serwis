<?php
/* Smarty version 4.1.0, created on 2022-06-06 22:59:55
  from 'C:\xampp\htdocs\serwis\app\views\page_ORDERS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e6acbe2da93_55773593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d2ba1751d8a9188cddb970ef1068eb25701436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_ORDERS.tpl',
      1 => 1654549190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:message.tpl' => 1,
  ),
),false)) {
function content_629e6acbe2da93_55773593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_744614240629e6acbdd5785_72409524', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_849247040629e6acbe20e57_43942607', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_743930388629e6acbe2bf68_81915554', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_744614240629e6acbdd5785_72409524 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_744614240629e6acbdd5785_72409524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <section id="one">
        <div class="container">
                <button style="float: right; margin-bottom: 15px; padding: 10px">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'orderAddView'),$_smarty_tpl ) );?>
">DODAJ ZAMÓWIENIE</a></button>
            <table>
                <tr><th style="text-align: center">DATA</th> <th style="text-align: center">MARKA</th> 
                    <th style="text-align: center">MODEL</th> <th style="text-align: center">NR REJ</th>
                    <th style="text-align: center">CENA</th> <th style="text-align: center">NAZWA NAPRAWY</th>
                    <th style="text-align: center">UŻYTKOWNIK</th><th style="text-align: center">OPCJE</th></tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_list']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Data"];?>
</td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Marka"];?>
</td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Model"];?>
</td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Nr_rejestracyjny"];?>
</td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Cena"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Nazwa_naprawy"];?>
 </td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["login"];?>
 </td>
                        <td style="text-align: center">
                            <a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'ordersView'),$_smarty_tpl ) );?>
/?deleteid=<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["ID_Zamowienia"];?>
">Usuń</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_849247040629e6acbe20e57_43942607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_849247040629e6acbe20e57_43942607',
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
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" class="button primary">Wyloguj</a></li>
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
class Block_743930388629e6acbe2bf68_81915554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_743930388629e6acbe2bf68_81915554',
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
