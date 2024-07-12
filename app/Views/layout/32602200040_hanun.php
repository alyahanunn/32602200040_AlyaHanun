<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>Styling CSS</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><i class="fa-solid fa-circle-user fa-lg"></i></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
                <span>
                    <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                    <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                    <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                    <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
                </span>
            </ul>
        </div>
        <div class="navber">
            <div class="name"> Alya Hanun </div>
        </div>
        <?= $this->renderSection('content') ?>
</body>

</html>