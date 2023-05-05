<?php
/* Smarty version 4.3.1, created on 2023-05-05 02:08:51
  from 'C:\xampp\htdocs\Zadanie_6\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_645449134c3bf5_10076389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595643f9c506d89f881696850d8b117b8103d37c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views\\LoginView.tpl',
      1 => 1683245197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_645449134c3bf5_10076389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1716475313645449134b97e1_19242240', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198360479645449134becb3_45352197', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1600384070645449134c2a35_85516363', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content_left'} */
class Block_1716475313645449134b97e1_19242240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_1716475313645449134b97e1_19242240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
    <!-- login -->
    <div class="pure-control-group">
        <label for="id_login">Nazwa użytkownika</label>
        <input id="id_login" type="text" name="login" /><br />
    </div>
    <!-- hasło -->
    <div class="pure-control-group">
        <label for="id_pass">Hasło</label>
        <input id="id_pass" type="password" name="pass" /><br />
    </div>
    <div class="pure-controls">
        <button class="pure-button" style="background-color: #f7ccd5;" type="submit">Zaloguj</button>
    </div>
</form>
<?php
}
}
/* {/block 'content_left'} */
/* {block 'content_right'} */
class Block_198360479645449134becb3_45352197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_198360479645449134becb3_45352197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content_right'} */
/* {block 'navbar'} */
class Block_1600384070645449134c2a35_85516363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_1600384070645449134c2a35_85516363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Zaloguj się</a></li>
<?php
}
}
/* {/block 'navbar'} */
}
