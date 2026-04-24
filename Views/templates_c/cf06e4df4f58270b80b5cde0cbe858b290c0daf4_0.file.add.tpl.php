<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:56:29
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6b5df150a3_36451938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf06e4df4f58270b80b5cde0cbe858b290c0daf4' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\categorie\\add.tpl',
      1 => 1776958733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6b5df150a3_36451938 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
