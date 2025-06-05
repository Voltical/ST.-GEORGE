<?php include_once $_SERVER['DOCUMENT_ROOT'] . '../config/config.php'; ?>
<header class="navbar">
    <div class="container">
        <div class="logo">
            <img src="assets/img/logo.svg" alt="Logo">
            <span>Schutterij ST. George</span>
        </div>
        <nav id="nav-menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="pages/galerij.php">Galerij</a></li>
                <li><a href="pages/evenementen.php">Evenementen</a></li>
                <li><a href="pages/koningspaar.php">Koningspaar</a></li>
                <li><a href="pages/nieuws.php">Nieuws</a></li>
                <li><a href="pages/contact.php">Contact</a></li>
                <li><a href="pages/historie.php">Historie</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </div>
</header>