<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4" style="width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
            <form method="POST" action="Login/authenticate">
        <?= csrf_field() ?>
        
        
                <div class="mb-3">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Connexion</button>
            </form>
            <div class="mt-3 text-center">
                <p>Pas encore inscrit ? <a href="/register">Créer un compte</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
