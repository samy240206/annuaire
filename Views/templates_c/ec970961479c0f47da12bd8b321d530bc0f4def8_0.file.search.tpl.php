<?php
/* Smarty version 4.5.6, created on 2026-04-29 13:57:56
  from 'C:\Users\belkadi\Documents\demo-MVC\Views\templates\site\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.6',
  'unifunc' => 'content_69f20e64a71958_03260956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec970961479c0f47da12bd8b321d530bc0f4def8' => 
    array (
      0 => 'C:\\Users\\belkadi\\Documents\\demo-MVC\\Views\\templates\\site\\search.tpl',
      1 => 1777466255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69f20e64a71958_03260956 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Rechercher un site</h2>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="site">
    <input type="hidden" name="action" value="search">
    <input type="text" name="keyword" placeholder="Rechercher par mot-clé" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['keyword'];?>
">
    <button type="submit">Rechercher</button>
</form>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="site">
    <input type="hidden" name="action" value="search">
    <select name="categorie_id">
        <option value="">-- Choisir une catégorie --</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['categories'], 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categorie']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['vue']->value['categorieId'] == $_smarty_tpl->tpl_vars['categorie']->value['id']) {?>selected<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['categorie']->value['libelle'];?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <button type="submit">Filtrer</button>
</form>

<?php if (!empty($_smarty_tpl->tpl_vars['vue']->value['sites'])) {?>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>URL</th>
                <th>Description</th>
                <th>Catégorie</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['sites'], 'site');
$_smarty_tpl->tpl_vars['site']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['site']->value['titre'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['url'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['site']->value['description'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['site']->value['categorie'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php } else { ?>
    <p>Aucun résultat trouvé.</p>
<?php }
}
}
