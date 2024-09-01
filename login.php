<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Zaandou Delivery</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
   <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .login-container img {
            max-width: 120px;
            height: auto;
            margin-bottom: 20px;
        }
        .login-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
            font-weight: 700;
        }
        .form-control {
            border-radius: 50px;
            padding: 12px 20px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .password-container {
            position: relative;
        }
        .password-container input[type="password"],
        .password-container input[type="text"] {
            width: 100%;
            padding-right: 50px; /* Espace pour l'icône */
        }
        .password-container .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }
        .btn-login,
        .btn-register {
            background-color: #ffc107;
            color: white;
            border-radius: 50px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            width: 100%;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover,
        .btn-register:hover {
            background-color: #e0a800;
        }
        .forgot-password {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #6c757d;
        }
        .forgot-password:hover {
            color: #007bff;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <img src="img/logo.png" alt="Logo">
        <h2>Connexion à Zaandou Delivery</h2>
        <form action="index.php" method="POST">
            <input type="email" class="form-control" name="email" placeholder="Adresse e-mail" required>
            <div class="password-container">
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
            </div>
            <button type="submit" class="btn btn-login">Se connecter</button>
        </form>
        <a href="#" class="forgot-password">Mot de passe oublié ?</a>
        <a href="inscription.php" class="btn btn-register">Créer un compte</a>
    </div>

    <!-- Dépendances JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const passwordToggle = document.querySelector('.toggle-password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            passwordToggle.classList.toggle('fa-eye-slash');
        }
    </script>
</body>
</html>
