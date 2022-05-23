<?php
/* Smarty version 4.1.0, created on 2022-05-23 21:55:49
  from 'C:\xampp\htdocs\serwis\app\views\AddOfferView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628be6c551c378_70011110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a445b180fe1b850516aee139524ee277dd183250' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\AddOfferView.tpl',
      1 => 1653335745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628be6c551c378_70011110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_469633413628be6c550dd83_74817591', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811252710628be6c5514c64_45179718', 'header');
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1572431485628be6c551a463_96495889', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_469633413628be6c550dd83_74817591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_469633413628be6c550dd83_74817591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <section>
            </br></br>
            <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'offerAdd'),$_smarty_tpl ) );?>
" method="post">
                <h3>Dodaj nową ofertę</h3>
                <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-4 col-12-xsmall">
                            <label for="id_nazwa">Nazwa naprawy: </label>
                            <input id="id_nazwa" type="text" name="nazwa"/>
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_cena">Cena: </label>
                            <input id="id_cena" type="text" name="cena" /><br />
                        </div>
                        <div class="col-4 col-12-xsmall">
                            <label for="id_kategoria">Kategoria: </label>
                            <select name="kategoria">
                                <option value="UP">Usługa podstawowa</option>
                                <option value="UN">Układ napędowy</option>
                                <option value="US">Układ spalinowy</option>
                                <option value="LB">Lakierniczo - blacharskie</option>
                                <option value="W">Wulkanizacja</option>
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
class Block_811252710628be6c5514c64_45179718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_811252710628be6c5514c64_45179718',
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
class Block_1572431485628be6c551a463_96495889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1572431485628be6c551a463_96495889',
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
