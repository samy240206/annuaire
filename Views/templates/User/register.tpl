<h2>Inscription</h2>
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
<a href="index.php?page=user&action=login">Déjà un compte ? Se connecter</a>