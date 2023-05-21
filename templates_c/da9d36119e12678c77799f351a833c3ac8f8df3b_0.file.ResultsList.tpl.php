<?php
/* Smarty version 4.3.1, created on 2023-05-21 21:46:34
  from 'C:\xampp\htdocs\Zadanie_7\app\views\ResultsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_646a751a369417_80468888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9d36119e12678c77799f351a833c3ac8f8df3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views\\ResultsList.tpl',
      1 => 1684698377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646a751a369417_80468888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_422190439646a751a35a467_12843963', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2143191833646a751a367806_66388935', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "list.html");
}
/* {block 'content'} */
class Block_422190439646a751a35a467_12843963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_422190439646a751a35a467_12843963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <table id="tab_results" class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Kwota kredytu</th>
                <th>Oprocentowanie</th>
                <th>Liczba rat</th>
                <th>Wynik</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["amount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["interest"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["installment"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["result"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    
<?php
}
}
/* {/block 'content'} */
/* {block 'navbar'} */
class Block_2143191833646a751a367806_66388935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_2143191833646a751a367806_66388935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Kalkulator</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultsList">Lista wyników</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>

<?php
}
}
/* {/block 'navbar'} */
}
