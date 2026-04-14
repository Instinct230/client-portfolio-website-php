<!DOCTYPE html>
<html lang="<?= $is_mm ? 'my' : 'en' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Zaw Win Htun'; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@500;600&family=Pyidaungsu&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/style.css?v=1.2">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="index.php">Zaw Win Htun</a>
        </div>
        
        <nav class="nav-links" id="navLinks">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="blog.php">Reflections</a>
            <a href="contact.php">Contact</a>
            <a href="<?= $is_mm ? 'index.php' : 'index-mm.php' ?>" class="lang-toggle">
                <?= $is_mm ? 'English' : 'မြန်မာဘာသာ' ?>
            </a>
        </nav>

        <button class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script>
function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('active');
}
</script>