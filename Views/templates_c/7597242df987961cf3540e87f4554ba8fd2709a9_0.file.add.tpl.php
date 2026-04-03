<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:42:13
  from 'C:\Users\belkadi\Documents\demo-MVC\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd20b559a2b2_75415670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7597242df987961cf3540e87f4554ba8fd2709a9' => 
    array (
      0 => 'C:\\Users\\belkadi\\Documents\\demo-MVC\\Views\\templates\\categorie\\add.tpl',
      1 => 1775047773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd20b559a2b2_75415670 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}
