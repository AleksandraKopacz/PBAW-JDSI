<?php
/* Smarty version 4.3.1, created on 2023-04-15 02:00:58
  from 'C:\xampp\htdocs\Zadanie_4\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6439e93a038ec7_68373087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1ed2b2f1f41b0f727f5d1647dc4b0f2d93f225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_4\\app\\CalcView.tpl',
      1 => 1681516373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6439e93a038ec7_68373087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2002879526439e93a026988_46297577', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20922485706439e93a02ac51_54285132', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20111232026439e93a0380b0_84499249', 'navbar');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'content_left'} */
class Block_2002879526439e93a026988_46297577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_2002879526439e93a026988_46297577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
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
class Block_20922485706439e93a02ac51_54285132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_20922485706439e93a02ac51_54285132',
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
class Block_20111232026439e93a0380b0_84499249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_20111232026439e93a0380b0_84499249',
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
