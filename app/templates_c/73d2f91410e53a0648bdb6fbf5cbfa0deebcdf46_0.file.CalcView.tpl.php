<?php
/* Smarty version 4.3.1, created on 2023-04-16 22:41:16
  from 'C:\xampp\htdocs\Zadanie_5\app\calc\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643c5d6c07c156_55190190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73d2f91410e53a0648bdb6fbf5cbfa0deebcdf46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_5\\app\\calc\\CalcView.tpl',
      1 => 1681677405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c5d6c07c156_55190190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718198882643c5d6c060415_81981296', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1242593622643c5d6c066954_08770038', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1507891638643c5d6c07ad43_60962413', 'navbar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content_left'} */
class Block_718198882643c5d6c060415_81981296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_718198882643c5d6c060415_81981296',
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
class Block_1242593622643c5d6c066954_08770038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_1242593622643c5d6c066954_08770038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value->wynik))) {?>
    <h4><?php echo $_smarty_tpl->tpl_vars['wynik']->value->wynik;?>
</h4>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
    <ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ol>
<?php }
}
}
/* {/block 'content_right'} */
/* {block 'navbar'} */
class Block_1507891638643c5d6c07ad43_60962413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_1507891638643c5d6c07ad43_60962413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Kalkulator</a></li>
<?php
}
}
/* {/block 'navbar'} */
}
