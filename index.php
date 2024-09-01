<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaandou Delivery - Site N°1 au Congo Brazaville </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="manifest" href="manifest.json" />
    <script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('sw.js').then(function(registration) {
        console.log('Service Worker enregistré avec succès :', registration);
      }, function(err) {
        console.log('Échec de l\'enregistrement du Service Worker :', err);
      });
    });
  }
</script>



   <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .dashboard-container {
            margin: 40px auto;
            max-width: 1200px;
            flex: 1;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-icon {
            font-size: 40px;
            color: #ffffff;
            padding: 20px;
            border-radius: 50%;
            background-color: #ff9900;
        }
        .header {
            background-color: #ffffff;
            padding: 15px 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-brand img {
            max-height: 50px;
        }
        .navbar-nav {
            display: flex;
            align-items: center;
        }
        .profile-info, .settings-link, .logout-btn {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .profile-link, .settings-link, .logout-btn {
            color: #333;
            font-weight: 500;
            font-size: 18px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        .profile-link i, .settings-link i, .logout-btn i {
            font-size: 22px;
            margin-right: 8px;
        }
        .profile-link:hover, .settings-link:hover {
            color: #007bff;
        }
        .logout-btn {
            background-color: #ff4d4d;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            border: none;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #ff3333;
        }
        .menu-item {
            margin: 10px 0;
            width: 100%;
            text-align: left;
        }
        .scan-btn {
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 16px;
        }
        .scan-btn:hover {
            background-color: #0056b3;
        }
        #reader-container {
            display: none;
            margin-top: 20px;
            text-align: center;
        }
        #reader {
            width: 100%;
            max-width: 400px;
            height: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
        }
        #scanned-result {
            margin-top: 20px;
            display: none;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        #scanned-result h5 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }
        #scanned-result p {
            font-size: 16px;
            color: #555;
        }
        .close-btn {
            margin-top: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .close-btn:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px;
            color: #333;
            text-align: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            font-size: 14px;
            border-radius: 10px 10px 0 0;
        }
        footer .footer-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        footer .footer-links a {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }
        footer .footer-links a:hover {
            color: #007bff;
        }

        /* Updated styles for mobile menu icon */
        .navbar-toggler {
            border-color: transparent; /* Ensure button border is invisible */
        }
        .navbar-toggler-icon {
            background-image: none; /* Remove default icon */
            font-size: 24px; /* Adjust size as needed */
            color: #808080; /* Set color to gray */
            border: none; /* Remove border */
        }
        .navbar-toggler::before {
            content: "\f0c9"; /* FontAwesome icon for 'bars' */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: #808080; /* Set icon color to gray */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg header">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo">
            </a>
            <!-- Profile Jerred displayed here for mobile -->
            <div class="d-lg-none profile-info">
                <a href="#" class="profile-link"><i class="fas fa-user-circle"></i> Jerred</a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <!-- Mobile layout: vertical menu for settings and logout -->
                <li class="nav-item d-lg-none menu-item">
                    <a href="#" class="nav-link settings-link"><i class="fas fa-cog"></i> Paramètres</a>
                </li>
                <li class="nav-item d-lg-none menu-item">
                    <button class="logout-btn" onclick="window.location.href='login.php'">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </button>
                </li>
                <!-- Desktop layout: horizontal menu for profile, settings, and logout -->
                <li class="nav-item d-none d-lg-flex profile-info">
                    <a href="#" class="profile-link"><i class="fas fa-user-circle"></i> Jerred</a>
                </li>
                <li class="nav-item d-none d-lg-flex settings-link">
                    <a href="#" class="nav-link"><i class="fas fa-cog"></i> Paramètres</a>
                </li>
                <li class="nav-item d-none d-lg-flex">
                    <button class="logout-btn" onclick="window.location.href='login.php'">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container dashboard-container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-truck card-icon" style="background-color: #28a745;"></i>
                        <h5 class="card-title mt-3">Commande Livrée</h5>
                        <p class="card-text">Nombre de commandes livrées : 0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-hourglass-half card-icon" style="background-color: #ffc107;"></i>
                        <h5 class="card-title mt-3">Commande en Attente</h5>
                        <p class="card-text">Nombre de commandes en attente : 0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-times-circle card-icon" style="background-color: #dc3545;"></i>
                        <h5 class="card-title mt-3">Commande Annulée</h5>
                        <p class="card-text">Nombre de commandes annulées : 0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-exclamation-triangle card-icon" style="background-color: #17a2b8;"></i>
                        <h5 class="card-title mt-3">Commande Non Livrée</h5>
                        <p class="card-text">Nombre de commandes non livrées : 0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-qrcode card-icon" style="background-color: #007bff;"></i>
                        <h5 class="card-title mt-3">Scanner un Produit</h5>
                        <p class="card-text">Scannez un produit pour plus de détails</p>
                        <button class="btn scan-btn" onclick="toggleScan()">Scanner</button>
                        <div id="reader-container">
                            <div id="reader"></div>
                        </div>
                        <!-- Affichage des résultats scannés -->
                        <div id="scanned-result">
                            <h5>Résultat du scan :</h5>
                            <p id="scanned-info"></p>
                            <button class="close-btn" onclick="closeResult()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="download/zaandou-delivery.apk" class="download-link">
                <i class="fas fa-download"></i> Télécharger l'APK
            </a>
        </div>
        Tous droits réservés Zaandou Delivery 2024
    </footer>

    <audio id="scan-sound" src="audio/scanner-beep.mp3" preload="auto"></audio>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/html5-qrcode.min.js"></script>

    <script>
        let html5QrCode;
        let isScanning = false;

        function toggleScan() {
            if (isScanning) {
                stopScan();
            } else {
                startScan();
            }
        }

        function startScan() {
            document.getElementById('reader-container').style.display = 'block';
            document.getElementById('scanned-result').style.display = 'none';
            html5QrCode = new Html5Qrcode("reader");
            html5QrCode.start({ facingMode: "environment" }, {
                fps: 10,
                qrbox: { width: 250, height: 250 }
            }, onScanSuccess).catch(err => {
                console.error("Erreur de démarrage du scanner: " + err);
            });
            isScanning = true;
        }

        function stopScan() {
            if (html5QrCode) {
                html5QrCode.stop().then(() => {
                    document.getElementById('reader-container').style.display = 'none';
                    isScanning = false;
                }).catch(err => {
                    console.error("Erreur lors de l'arrêt du scanner: " + err);
                });
            }
        }

        function onScanSuccess(qrCodeMessage) {
            console.log("QR Code scanné avec succès: " + qrCodeMessage);

            // Jouer le son de scan
            document.getElementById('scan-sound').play();

            document.getElementById('scanned-info').textContent = qrCodeMessage;
            document.getElementById('scanned-result').style.display = 'block';
            stopScan();
        }

        function closeResult() {
            document.getElementById('scanned-result').style.display = 'none';
        }
    </script>
</body>
</html>
