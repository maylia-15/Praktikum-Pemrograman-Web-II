<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #fff0f5; 
            background-image: radial-gradient(#ffb6c1 2px, transparent 2px);
            background-size: 30px 30px;
            color: #5a5a5a;
            min-height: 100vh;
            font-family: 'Nunito', sans-serif;
        }
        
        .navbar {
            background-color: #ffb6c1 !important; 
            box-shadow: 0 4px 15px rgba(255, 182, 193, 0.6);
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
            padding: 15px 0;
        }
        
        .navbar-brand {
            color: #ffffff !important;
            font-weight: 800;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            color: #ffffff !important;
            font-weight: 700;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.25);
            border-radius: 20px;
            margin: 0 5px;
            padding: 8px 20px !important;
        }
        
        .nav-link:hover {
            background-color: #ffffff !important;
            color: #ffb6c1 !important;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .cute-card {
            background: #ffffff;
            border: 4px dashed #ffb6c1;
            border-radius: 35px;
            box-shadow: 0 15px 25px rgba(255, 182, 193, 0.3);
            transition: transform 0.3s ease;
        }

        .cute-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 30px rgba(255, 182, 193, 0.5);
        }
        
        .text-highlight {
            color: #ff69b4;
        }

        .cute-badge {
            background-color: #87cefa;
            color: #ffffff;
            font-weight: 700;
            border: 2px solid #ffffff;
            box-shadow: 0 3px 6px rgba(135, 206, 250, 0.4);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="/"> Praktikum Pemrograman Web II</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">🏠 Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">✨ Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-5">
        <?= $this->renderSection('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>