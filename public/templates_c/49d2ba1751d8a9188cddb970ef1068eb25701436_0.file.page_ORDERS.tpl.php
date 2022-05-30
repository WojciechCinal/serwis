<?php
/* Smarty version 4.1.0, created on 2022-05-30 21:24:53
  from 'C:\xampp\htdocs\serwis\app\views\page_ORDERS.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62951a05e65ff6_00827459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d2ba1751d8a9188cddb970ef1068eb25701436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_ORDERS.tpl',
      1 => 1653938690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62951a05e65ff6_00827459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78771578262951a05e19915_80142366', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48170704562951a05e5bc85_20717611', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178071068862951a05e647e5_01457150', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_78771578262951a05e19915_80142366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_78771578262951a05e19915_80142366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
            <div class="messages">
                <h4>Informacje: </h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            </div>
        <?php }?>             
    </section>
    <section id="one">
        <div class="container">
            <table>
                <tr><th style="text-align: center">DATA</th> <th style="text-align: center">MARKA</th> 
                    <th style="text-align: center">MODEL</th> <th style="text-align: center">NR_REJ</th>
                    <th style="text-align: center">UŻYTKOWNIK</th> <th style="text-align: center">OPCJE</th></tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_list']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Data"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Marka"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Model"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Nr_rejestracyjny"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["ID_User"];?>
</td>
                        <td>
                            <a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"#"),$_smarty_tpl ) );?>
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
class Block_48170704562951a05e5bc85_20717611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_48170704562951a05e5bc85_20717611',
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
class Block_178071068862951a05e647e5_01457150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_178071068862951a05e647e5_01457150',
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
