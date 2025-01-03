<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changement de mot passe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dc3786ca56.js" crossorigin="anonymous"></script>
    <style>
        .card-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
        }
        .form-control {
            margin-bottom: 15px;
        }
        .fa-eye {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .position-relative {
            position: relative;
        }
    </style>
</head>
<body>
    <?php include("nav.php") ?>
    <div class="container" style="font-family: 'Inconsolata', monospace;">
        <div class="card card-container">
            <div class="alert alert-info">
                <h1 class="text-center">Mot de passe oublié ?</h1>
            </div>
            <form class="form-horizontal" method="post">
                <div class="form-group position-relative">
                    <input class="form-control"
                           type="password"
                           name="oldpwd"
                           autocomplete="new-password"
                           placeholder="Taper votre Ancien Mot de passe"
                           required>
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div class="form-group position-relative">
                    <input minlength="4"
                           class="form-control"
                           type="password"
                           name="newpwd"
                           autocomplete="new-password"
                           placeholder="Taper votre Nouveau Mot de passe"
                           required>
                    <i class="fa-solid fa-eye"></i>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>
            </form>
        </div>
    </div>
    <script>
        document.querySelectorAll('.fa-eye').forEach(function (eyeIcon) {
            eyeIcon.addEventListener('click', function () {
                const input = this.previousElementSibling;
                if (input.type === "password") {
                    input.type = "text";
                    this.classList.add('active');
                } else {
                    input.type = "password";
                    this.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
