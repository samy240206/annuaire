<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:51:04
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\Accueil\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6a18533796_90221548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e018b0c3cf567230e37a033b13214f6b19d70289' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\Accueil\\list.tpl',
      1 => 1776970231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6a18533796_90221548 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<div class="card p-4 mt-3" style="background-color: white; border-left: 5px solid #edb217;">
    <h2 class="mb-3">Présentation du MVC</h2>
    <p>Liste des dossiers de notre MVC :</p>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['mvc'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<div class="mt-4">
    <h2>Auditer un site</h2>
    <form action="index.php?page=analyse&action=check" method="post" class="d-flex gap-2">
        <input type="url" name="site" class="form-control" placeholder="https://example.com" pattern="https://.*" required>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div><?php }
}
