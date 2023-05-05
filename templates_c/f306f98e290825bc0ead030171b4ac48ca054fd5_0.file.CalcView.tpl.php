<?php
/* Smarty version 4.3.1, created on 2023-05-05 01:24:06
  from 'C:\xampp\htdocs\Zadanie_6\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64543e965c9e66_39676634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f306f98e290825bc0ead030171b4ac48ca054fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_6\\app\\views\\CalcView.tpl',
      1 => 1683242616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_64543e965c9e66_39676634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143789814464543e965b4e10_86133496', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197793434964543e965be673_01581674', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150738895064543e965c87f8_43794346', 'navbar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'content_left'} */
class Block_143789814464543e965b4e10_86133496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_143789814464543e965b4e10_86133496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
    <!-- kwota kredytu -->
    <div class="pure-control-group">
        <label for="kredyt">Kwota kredytu</label>
        <input id="kredyt" type="number" name="kredyt" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kredyt;?>
" /><br />
    </div>
    <!-- oprocentowanie -->
    <div class="pure-control-group">
        <label for="oprocentowanie">Oprocentowanie</label>
        <input id="oprocentowanie" type="number" name="oprocentowanie" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /><br />
    </div>
    <!-- liczba rat -->
    <div class="pure-control-group">
        <label for="liczbaRat">Liczba rat</label>
        <input id="liczbaRat" type="number" name="liczbaRat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->liczbaRat;?>
" /><br />
    </div>
    <div class="pure-controls">
        <button class="pure-button" style="background-color: #f7ccd5;" type="submit">Oblicz</button>
    </div>
</form>
<?php
}
}
/* {/block 'content_left'} */
/* {block 'content_right'} */
class Block_197793434964543e965be673_01581674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_197793434964543e965be673_01581674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value->wynik))) {?>
    <h4><?php echo $_smarty_tpl->tpl_vars['wynik']->value->wynik;?>
</h4>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content_right'} */
/* {block 'navbar'} */
class Block_150738895064543e965c87f8_43794346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_150738895064543e965c87f8_43794346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Kalkulator</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
<?php
}
}
/* {/block 'navbar'} */
}
