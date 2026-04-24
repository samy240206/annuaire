<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:57:09
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6b85842b94_26447086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a46f96744627c7c49371d7db042e692eb1cda3' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\user\\register.tpl',
      1 => 1776969159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6b85842b94_26447086 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Inscription</h2>
<form method="POST" action="index.php?page=user&action=register">
    <div>
        <label>Email</label>
        <input type="email" name="mail" required>
    </div>
    <div>
        <label>Mot de passe</label>
        <input type="password" name="mdp" required>
    </div>
    <button type="submit">S'inscrire</button>
</form>
<a href="index.php?page=user&action=login">Déjà un compte ? Se connecter</a><?php }
}
