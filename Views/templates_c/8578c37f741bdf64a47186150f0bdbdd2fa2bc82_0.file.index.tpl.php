<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:51:04
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6a185064c5_17420245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8578c37f741bdf64a47186150f0bdbdd2fa2bc82' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\index.tpl',
      1 => 1776970219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6a185064c5_17420245 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <style>
        :root {
            --beige: #fcf5e4;
            --jaune: #edb217;
            --noir: #212121;
            --rouge: #f4143f;
        }

        body {
            background-color: var(--beige);
            color: var(--noir);
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: var(--noir) !important;
        }

        .navbar-brand, .nav-link {
            color: var(--beige) !important;
        }

        .nav-link:hover {
            color: var(--jaune) !important;
        }

        .nav-link.active {
            color: var(--jaune) !important;
            font-weight: bold;
        }

        h1 {
            color: var(--noir);
            border-bottom: 3px solid var(--jaune);
            padding-bottom: 10px;
            margin: 30px 0 20px 0;
        }

        .btn-primary {
            background-color: var(--jaune);
            border-color: var(--jaune);
            color: var(--noir);
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: var(--rouge);
            border-color: var(--rouge);
            color: white;
        }

        .btn-danger {
            background-color: var(--rouge);
            border-color: var(--rouge);
        }

        footer {
            background-color: var(--noir);
            color: var(--beige);
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/index.php">📁 Les Pages Orange</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link" href="/index.php">Accueil</a>
                <a class="nav-item nav-link" href="/index.php?page=categorie&action=list">Catégories</a>
                <a class="nav-item nav-link" href="/index.php?page=site&action=search">Recherche</a>
                <?php if ((isset($_SESSION['user']))) {?>
                    <a class="nav-item nav-link" href="/index.php?page=user&action=logout">Déconnexion</a>
                <?php } else { ?>
                    <a class="nav-item nav-link" href="/index.php?page=user&action=login">Connexion</a>
                    <a class="nav-item nav-link" href="/index.php?page=user&action=register">Inscription</a>
                <?php }?>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</h1>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>

<footer>
    <p>© 2026 Les Pages Orange</p>
</footer>

</body>
</html><?php }
}
