<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:56:49
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\categorie\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6b71dc8617_68535419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6e3747217e5f566088bd3801643c6868737cac9' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\categorie\\update.tpl',
      1 => 1776958733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6b71dc8617_68535419 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="id"  id="id" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['id'];?>
" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}
