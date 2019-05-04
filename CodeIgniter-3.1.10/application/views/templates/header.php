<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Best Website choice for selling and buying flowers">
        <meta name="keywords" content="Flowers, affordable, Best">
        <meta name="author" content="Oussama Lghachi, Huy Le">
        
        <title>OuLe Flower Shop | <?= $title; ?></title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "css/style.css"; ?>">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">OuLe</span> Flower Shop</h1>
                </div>
                <nav>
                    <ul>
                        <li class="<?= $page_name === 'home' ? 'current' : ''; ?>">
                            <a href="./">Home</a>
                        </li>
                        <li class="<?= $page_name === 'popular' ? 'current' : ''; ?>">
                            <a href="./popular">Popular</a>
                        </li>
                        <li class="<?= $page_name === 'recommended' ? 'current' : ''; ?>">
                            <a href="./recommended">Bouquet</a>
                        </li>
                        <li class="<?= $page_name === 'gifts' ? 'current' : ''; ?>">
                        <a href="./gifts">Gifts</a>
                    </li>
                        <li class="<?= $page_name === 'about' ? 'current' : ''; ?>">
                            <a href="./about">About</a>
                        </li>
                        <li class="<?= $page_name === 'services' ? 'current' : ''; ?>">
                            <a href="./services">Join-US</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
