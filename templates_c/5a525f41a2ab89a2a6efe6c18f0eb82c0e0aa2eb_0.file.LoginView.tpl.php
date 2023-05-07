<?php
/* Smarty version 4.3.1, created on 2023-05-07 02:52:19
  from 'C:\xampp\htdocs\Zadanie_6b\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6456f643cea308_77452601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a525f41a2ab89a2a6efe6c18f0eb82c0e0aa2eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_6b\\app\\views\\LoginView.tpl',
      1 => 1683245197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6456f643cea308_77452601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6471104666456f643cdffb8_11742062', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10671236686456f643ce53f1_06622059', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15645993276456f643ce9204_42262453', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content_left'} */
class Block_6471104666456f643cdffb8_11742062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_6471104666456f643cdffb8_11742062',
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
class Block_10671236686456f643ce53f1_06622059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_10671236686456f643ce53f1_06622059',
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
class Block_15645993276456f643ce9204_42262453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_15645993276456f643ce9204_42262453',
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
