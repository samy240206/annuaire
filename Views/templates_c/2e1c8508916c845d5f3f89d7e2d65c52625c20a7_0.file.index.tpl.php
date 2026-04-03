<?php
/* Smarty version 4.1.0, created on 2026-04-01 14:18:37
  from 'C:\Users\belkadi\Documents\demo-MVC\Views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd293d8ce9c0_81301863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1c8508916c845d5f3f89d7e2d65c52625c20a7' => 
    array (
      0 => 'C:\\Users\\belkadi\\Documents\\demo-MVC\\Views\\templates\\index.tpl',
      1 => 1775053115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd293d8ce9c0_81301863 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Template de base avec le moteur de template Smarty -->
<!DOCTYPE html>
<html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link active" href="/index.php">Home <span class="sr-only">(current)</span></a>
<a class="nav-item nav-link" href="/index.php?page=categorie">Catégories</a>
<a class="nav-item nav-link" href="#">Pricing</a>
<a class="nav-item nav-link disabled" href="#">Disabled</a>
</div>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>      
        <div class="container">
            <h1><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</h1>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
         
        </div>
    </body>
</html>

<?php }
}
