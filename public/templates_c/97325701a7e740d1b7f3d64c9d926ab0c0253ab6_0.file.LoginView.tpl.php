<?php
/* Smarty version 4.1.0, created on 2022-05-22 21:00:39
  from 'C:\xampp\htdocs\serwis\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628a88574a4b95_75466826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97325701a7e740d1b7f3d64c9d926ab0c0253ab6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\serwis\\app\\views\\LoginView.tpl',
      1 => 1653245950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628a88574a4b95_75466826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_261261846628a88574824b7_24824110', 'content');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1990959845628a885749d065_77010713', 'header');
?>
 

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2073826497628a88574a3448_73568449', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_261261846628a88574824b7_24824110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_261261846628a88574824b7_24824110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
" method="post">
                    <legend>Logowanie do systemu</legend>
                    <fieldset>
                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <label for="id_login">Login: </label>
                                <input id="id_login" type="text" name="login"/>
                            </div>
                            <div class="col-6 col-12-xsmall">
                                <label for="id_pass">Hasło: </label>
                                <input id="id_pass" type="password" name="pass" /><br />
                            </div>

                            <div>
                                <input type="submit" value="Zaloguj" class="primary"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </section>
            <section>
            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                <div class="messages">
                    <h4>Wystąpiły błędy: </h4>
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
            </div>
        </section>

        <?php
}
}
/* {/block 'content'} */
/* {block 'header'} */
class Block_1990959845628a885749d065_77010713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1990959845628a885749d065_77010713',
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
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'page_offer'),$_smarty_tpl ) );?>
">Oferta</a></li>
                                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'page_orders'),$_smarty_tpl ) );?>
">Zamówienia</a></li>
                                </ul>
                            </nav>
                        </header>
                    </div>
                </section>

                <section id="banner">
                    <div class="content">
                        <header>
                            <h2>Serwis samochodowy</h2>
                            <p>Logowanie do systemu. </p>
                        </header>
                        <span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/auto1.jpg" alt="" /></span>
                    </div>
                    <li> <a href="#one" class="goto-next scrolly">Przejdź do logowania.</a></li>
                </section>
            <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_2073826497628a88574a3448_73568449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2073826497628a88574a3448_73568449',
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
