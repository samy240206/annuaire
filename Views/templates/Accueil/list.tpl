<p>{$vue.description}</p>

<div class="card p-4 mt-3" style="background-color: white; border-left: 5px solid #edb217;">
    <h2 class="mb-3">Présentation du MVC</h2>
    <p>Liste des dossiers de notre MVC :</p>
    <ul>
        {foreach $vue.mvc as $m}
            <li>{$m}</li>
        {/foreach}
    </ul>
</div>

<div class="mt-4">
    <h2>Auditer un site</h2>
    <form action="index.php?page=analyse&action=check" method="post" class="d-flex gap-2">
        <input type="url" name="site" class="form-control" placeholder="https://example.com" pattern="https://.*" required>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>