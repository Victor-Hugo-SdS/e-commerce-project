<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="src/style.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>E-Market</title>
</head>
<body>
   
    <header class="navbar-header">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gap-3 gap-md-0 py-4">
                <a href="/home.php" class="col-6"><img src="img/E-MARKET.png" alt="Logo E-Market" width="200px"></a>
                <div class="col-12 col-md-4 col-xl-3">
                    <form class="search-area rounder-3 p-3 d-flex flex-nowrap">
                        <i class="bi bi-search me-2"></i>
                        <input type="text" placeholder="Search Products">
                    </form>
                </div>
            </div> 

            <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container px-0"> 
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link px-0" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 mx-md-3" href="#">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-0 mx-md-3" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="#"><img src="img/bag.svg" alt="Bag"></a>
                            <a href="#"><img src="img/profile.svg" alt="profile" class="mb-0 mx-3"></a>
                        </div>
                    </div>    
            </nav>
        </div>
    </header>
