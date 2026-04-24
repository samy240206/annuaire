<h2>Rechercher un site</h2>

{* Recherche par mot-clé *}
<form method="GET" action="index.php">
    <input type="hidden" name="page" value="site">
    <input type="hidden" name="action" value="search">
    <input type="text" name="keyword" placeholder="Rechercher par mot-clé" value="{$vue.keyword}">
    <button type="submit">Rechercher</button>
</form>

{* Recherche par catégorie *}
<form method="GET" action="index.php">
    <input type="hidden" name="page" value="site">
    <input type="hidden" name="action" value="search">
    <select name="categorie_id">
        <option value="">-- Choisir une catégorie --</option>
        {foreach $vue.categories as $categorie}
            <option value="{$categorie.id}" {if $vue.categorieId == $categorie.id}selected{/if}>
                {$categorie.libelle}
            </option>
        {/foreach}
    </select>
    <button type="submit">Filtrer</button>
</form>

{* Résultats *}
{if !empty($vue.sites)}
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
            {foreach $vue.sites as $site}
                <tr>
                    <td>{$site.titre}</td>
                    <td><a href="{$site.url}" target="_blank">{$site.url}</a></td>
                    <td>{$site.description}</td>
                    <td>{$site.categorie}</td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{else}
    <p>Aucun résultat trouvé.</p>
{/if}