<?php
/* Smarty version 4.3.1, created on 2023-05-20 23:38:06
  from 'C:\xampp\htdocs\Zadanie_7\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64693dbe9461e9_35390733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0572d2a078f925f288d66abbc80428524871ddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_7\\app\\views\\templates\\main.html',
      1 => 1681517162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64693dbe9461e9_35390733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">

        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł" ?? null : $tmp);?>
</title>

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/gt_favicon.png">

        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <!-- Icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
        <!-- Custom styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/styles.css">

        <!--[if lt IE 9]> <?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
> <![endif]-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    </head>
    <body>

        <header id="header">
            <div id="head" class="parallax" parallax-speed="1">
                <h1 id="logo" class="text-center">
                    <span class="title"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł" ?? null : $tmp);?>
</span>
                </h1>
            </div>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82333964464693dbe9417d6_48270351', 'navbar');
?>

                        </ul>

                    </div><!--/.nav-collapse -->			
                </div>	
            </nav>
        </header>

        <main id="main">

            <div class="container">

                <div class="row topspace">

                    <!-- Article main content -->
                    <article class="col-sm-8 maincontent">
                        <header class="page-header">
                            <h1 class="page-title"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title_left']->value ?? null)===null||$tmp==='' ? "Tytuł strony" ?? null : $tmp);?>
</h1>
                        </header>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130049616064693dbe942cf7_88853378', 'content_left');
?>

                    </article>
                    <!-- /Article -->

                    <!-- Sidebar -->
                    <aside class="col-md-4 sidebar sidebar-left">
                        <header class="page-header">
                            <h1 class="page-title"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title_right']->value ?? null)===null||$tmp==='' ? "Tytuł strony" ?? null : $tmp);?>
</h1>
                        </header>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188163980164693dbe944049_32472110', 'content_right');
?>

                    </aside>			
                    <!-- /Sidebar -->

                </div>
            </div>	<!-- /container -->

        </main>

        <footer id="footer" class="topspace">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 widget">
                        <h3 class="widget-title">O mnie</h3>
                        <div class="widget-body">
                            <p>
                                Aleksandra Kopacz
                            </p>	
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">Smarty</h3>
                        <div class="widget-body">
                            <p>
                                Szablon stworzony w oparciu o bibliotekę Smarty
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, mauris id aliquet finibus, leo odio luctus risus, id consectetur lectus diam eget ligula. Pellentesque imperdiet erat ac ipsum condimentum dictum. In porttitor nisi erat, convallis pretium orci sagittis ut. Vestibulum aliquam at risus at ultricies. 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </footer>

        <footer id="underfooter">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Design: <a href="http://www.gettemplate.com" rel="designer">Initio by GetTemplate</a> </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </footer>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/template.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'navbar'} */
class Block_82333964464693dbe9417d6_48270351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_82333964464693dbe9417d6_48270351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Menu <?php
}
}
/* {/block 'navbar'} */
/* {block 'content_left'} */
class Block_130049616064693dbe942cf7_88853378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_130049616064693dbe942cf7_88853378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść <?php
}
}
/* {/block 'content_left'} */
/* {block 'content_right'} */
class Block_188163980164693dbe944049_32472110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_188163980164693dbe944049_32472110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść <?php
}
}
/* {/block 'content_right'} */
}
