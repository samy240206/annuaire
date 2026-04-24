<?php
/* Smarty version 4.1.0, created on 2026-04-23 20:57:03
  from 'C:\Users\Malco\OneDrive\Documents\annuaire\Views\templates\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69ea6b7fc46132_24288059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db94d056a08b5478bff420858b9bd5141e79c7f2' => 
    array (
      0 => 'C:\\Users\\Malco\\OneDrive\\Documents\\annuaire\\Views\\templates\\user\\login.tpl',
      1 => 1776969154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69ea6b7fc46132_24288059 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Connexion</h2>
<form method="POST" action="index.php?page=user&action=login">
    <div>
        <label>Email</label>
        <input type="email" name="mail" required>
    </div>
    <div>
        <label>Mot de passe</label>
        <input type="password" name="mdp" required>
    </div>
    <button type="submit">Se connecter</button>
</form>
<a href="index.php?page=user&action=register">Pas encore de compte ? S'inscrire</a><?php }
}
