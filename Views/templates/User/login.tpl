<h2>Connexion</h2>
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
<a href="index.php?page=user&action=register">Pas encore de compte ? S'inscrire</a>