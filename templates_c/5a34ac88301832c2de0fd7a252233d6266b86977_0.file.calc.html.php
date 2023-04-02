<?php
/* Smarty version 4.3.1, created on 2023-04-02 22:46:21
  from 'C:\xampp\htdocs\Zadanie_3\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6429e99de90996_58290953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a34ac88301832c2de0fd7a252233d6266b86977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3\\app\\calc.html',
      1 => 1680468340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429e99de90996_58290953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17313856256429e99de7e102_85960755', 'content_left');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6217897746429e99de836b3_24817736', 'content_right');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13919846356429e99de8ff74_81308690', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content_left'} */
class Block_17313856256429e99de7e102_85960755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_17313856256429e99de7e102_85960755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="pure-form pure-form-aligned" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
    <!-- kwota kredytu -->
    <div class="pure-control-group">
        <label for="id_kredyt">Kwota kredytu</label>
        <input id="id_kredyt" type="number" name="kredyt" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['kredyt']->value;?>
" /><br />
    </div>
    <!-- oprocentowanie -->
    <div class="pure-control-group">
        <label for="id_oprocentowanie">Oprocentowanie</label>
        <input id="id_oprocentowanie" type="number" name="oprocentowanie" step="0.01" value="<?php echo $_smarty_tpl->tpl_vars['oprocentowanie']->value;?>
" /><br />
    </div>
    <!-- liczba rat -->
    <div class="pure-control-group">
        <label for="id_liczbaRat">Liczba rat</label>
        <input id="id_liczbaRat" type="number" name="liczbaRat" value="<?php echo $_smarty_tpl->tpl_vars['liczbaRat']->value;?>
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
class Block_6217897746429e99de836b3_24817736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_6217897746429e99de836b3_24817736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
        <ol>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
    <?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?>
    <h4><?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
</h4>
<?php }
}
}
/* {/block 'content_right'} */
/* {block 'navbar'} */
class Block_13919846356429e99de8ff74_81308690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_13919846356429e99de8ff74_81308690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Kalkulator</a></li>
<?php
}
}
/* {/block 'navbar'} */
}
