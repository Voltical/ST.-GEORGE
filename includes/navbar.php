<?php include_once __DIR__ . '/../config/config.php'; ?>
<header class="navbar animate-fadeDown">
    <div class="container">
        <div class="logo">
            <img src="<?= $base_url ?>assets/img/logo.svg" alt="Logo">
            <span>Schutterij ST. George</span>
        </div>
        <nav>
            <ul id="nav-menu">
                <li><a href="<?= $base_url ?>index.php" class="<?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= $base_url ?>pages/galerij.php" class="<?= basename($_SERVER['PHP_SELF']) === 'galerij.php' ? 'active' : '' ?>">Galerij</a></li>
                <li><a href="<?= $base_url ?>pages/evenementen.php" class="<?= basename($_SERVER['PHP_SELF']) === 'evenementen.php' ? 'active' : '' ?>">Evenementen</a></li>
                <li><a href="<?= $base_url ?>pages/koningspaar.php" class="<?= basename($_SERVER['PHP_SELF']) === 'koningspaar.php' ? 'active' : '' ?>">Koningspaar</a></li>
                <li><a href="<?= $base_url ?>pages/nieuws.php" class="<?= basename($_SERVER['PHP_SELF']) === 'nieuws.php' ? 'active' : '' ?>">Nieuws</a></li>
                <li><a href="<?= $base_url ?>pages/contact.php" class="<?= basename($_SERVER['PHP_SELF']) === 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                <li><a href="<?= $base_url ?>pages/historie.php" class="<?= basename($_SERVER['PHP_SELF']) === 'historie.php' ? 'active' : '' ?>">Historie</a></li>
            </ul>
        </nav>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    </div>
</header>

<script>
function toggleMenu() {
    const nav = document.getElementById('nav-menu');
    nav.classList.toggle('show');
}
</script>
