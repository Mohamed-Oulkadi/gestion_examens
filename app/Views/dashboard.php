<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Gestion des Examens</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            height: 100vh;
            position: fixed;
            color: white;
            padding-top: 20px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }
        .sidebar ul li:hover {
            background-color: #34495e;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            background-color: #2980b9;
            color: white;
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin-top: 0;
        }
        .card button {
            background-color: #2980b9;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #1c5980;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Gestion des Examens</h2>
        <ul>
            <li>Tableau de Bord</li>
            <li>Planning des Examens</li>
            <li>Liste des Étudiants</li>
            <li>Résultats</li>
            <li>Paramètres</li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <h1>Bienvenue dans le Tableau de Bord</h1>
        </div>
        <div class="card">
            <h3>Examens à Venir</h3>
            <p>Affichez le planning des examens pour les prochaines semaines.</p>
            <button>Voir les détails</button>
        </div>
        <div class="card">
            <h3>Résultats Récents</h3>
            <p>Consultez les résultats des examens récemment corrigés.</p>
            <button>Consulter</button>
        </div>
        <div class="card">
            <h3>Gestion des Étudiants</h3>
            <p>Ajoutez ou modifiez les informations des étudiants.</p>
            <button>Gérer</button>
        </div>
    </div>
    <script>
        document.querySelectorAll('.sidebar ul li').forEach(item => {
            item.addEventListener('click', () => {
                alert(`Vous avez cliqué sur : ${item.textContent}`);
            });
        });
    </script>
</body>
</html>
