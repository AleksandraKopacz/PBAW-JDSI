<?php
/* Smarty version 4.3.1, created on 2023-05-21 00:40:22
  from 'C:\xampp\htdocs\Zadanie_7\app\views\ResultsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64694c56db1742_96538889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da9d36119e12678c77799f351a833c3ac8f8df3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views\\ResultsList.tpl',
      1 => 1684621600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64694c56db1742_96538889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62859843164694c56da1747_65958421', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188090678664694c56daf980_01916420', 'navbar');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "list.html");
}
/* {block 'content'} */
class Block_62859843164694c56da1747_65958421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_62859843164694c56da1747_65958421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <table id="tab_results" class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Wynik</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["result"];?>
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
class Block_188090678664694c56daf980_01916420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_188090678664694c56daf980_01916420',
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
