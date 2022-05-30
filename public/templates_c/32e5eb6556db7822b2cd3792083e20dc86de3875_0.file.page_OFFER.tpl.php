<?php
/* Smarty version 4.1.0, created on 2022-05-30 20:57:41
  from 'C:\xampp\htdocs\serwis\app\views\page_OFFER.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629513a571dba2_98622873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e5eb6556db7822b2cd3792083e20dc86de3875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\page_OFFER.tpl',
      1 => 1653934870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629513a571dba2_98622873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1500542801629513a56c4ef8_92766478', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_298993845629513a570e690_13224164', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021628005629513a571c176_61503193', 'footer');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1500542801629513a56c4ef8_92766478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1500542801629513a56c4ef8_92766478',
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
            <button style="float: right; margin-bottom: 15px; padding: 10px">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'offerAddView'),$_smarty_tpl ) );?>
">DODAJ OFERTĘ</a></button>
            <table>
                <tr><th style="text-align: center">NAZWA NAPRAWY</th> <th style="text-align: center">CENA</th> 
                    <th style="text-align: center">KATEGORIA</th> <th style="text-align: center">OPCJE</th></tr>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offer_list']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Nazwa_naprawy"];?>
</td>
                        <td style="text-align: right"><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Cena"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Kategoria"];?>
</td>
                        <td>
                            <a class="button" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'offerView'),$_smarty_tpl ) );?>
/?delid=<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["ID_Naprawy"];?>
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
class Block_298993845629513a570e690_13224164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_298993845629513a570e690_13224164',
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
                            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'logout'),$_smarty_tpl ) );?>
" class="button primary">Wyloguj</a></li>
                            <?php } else { ?>	
                            <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'loginView'),$_smarty_tpl ) );?>
" class="button primary">Zaloguj</a></li>
                            <?php }?>                   

                    </ul>
                </nav>
            </header>
        </div>
    </section>

    <section id="banner">
        <div class="content">
            <header>
                <h2>Serwis samochodowy</h2>
                <p>Nasza oferta napraw.</p>
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
class Block_2021628005629513a571c176_61503193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2021628005629513a571c176_61503193',
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
