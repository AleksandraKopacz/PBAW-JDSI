<?php
/* Smarty version 4.3.1, created on 2023-04-02 03:10:48
  from 'C:\xampp\htdocs\Zadanie_3\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6428d61856c276_25407229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '154067cfc79d7128e59ac1cd9d8886d4b710be81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3\\templates\\main.html',
      1 => 1680395922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6428d61856c276_25407229 (Smarty_Internal_Template $_smarty_tpl) {
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

        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/images/gt_favicon.png">

        <!-- Bootstrap -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
        <!-- Icon font -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
        <!-- Custom styles -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4171725296428d618568300_94996879', 'navbar');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8036201016428d618569ec6_79502978', 'content_left');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15641819236428d61856b627_61264283', 'content_right');
?>

                    </aside>			
                    <!-- /Sidebar -->

                </div>
            </div>	<!-- /container -->

        </main>

        <footer id="footer" class="topspace">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+234 23 9873237<br>
                                <a href="mailto:#">some.email@somewhere.com</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
                            </p>	
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow me</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Text widget</h3>
                        <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Form widget</h3>
                        <div class="widget-body">
                            <p>+234 23 9873237<br>
                                <a href="mailto:#">some.email@somewhere.com</a><br>
                                <br>
                                234 Hidden Pond Road, Ashland City, TN 37015
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
class Block_4171725296428d618568300_94996879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navbar' => 
  array (
    0 => 'Block_4171725296428d618568300_94996879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Menu <?php
}
}
/* {/block 'navbar'} */
/* {block 'content_left'} */
class Block_8036201016428d618569ec6_79502978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_left' => 
  array (
    0 => 'Block_8036201016428d618569ec6_79502978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść <?php
}
}
/* {/block 'content_left'} */
/* {block 'content_right'} */
class Block_15641819236428d61856b627_61264283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_right' => 
  array (
    0 => 'Block_15641819236428d61856b627_61264283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść <?php
}
}
/* {/block 'content_right'} */
}
