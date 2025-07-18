<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
<title><?php bloginfo('name')?> <?php wp_title('-') ?></title>
<meta name="title" content="Bankboost - O seu novo banco digital" />
<meta name="description" content="Desperte seu potencial financeiro com o Bankboost! - Abra sua conta agora!" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="https://julianouxui.netlify.app/" />
<meta property="og:title" content="Bankboost - O seu novo banco digital" />
<meta property="og:description" content="Desperte seu potencial financeiro com o Bankboost! - Abra sua conta agora!" />
<meta property="og:image" content="./share-og.png" />

<!-- X (Twitter) -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="https://julianouxui.netlify.app/" />
<meta property="twitter:title" content="Bankboost - O seu novo banco digital" />
<meta property="twitter:description" content="Desperte seu potencial financeiro com o Bankboost! - Abra sua conta agora!" />
<meta property="twitter:image" content="./share-og.png" />

<!-- Meta Tags Generated with https://metatags.io -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.min.css">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/Favicon.png">

<?php wp_head(); ?>

</head>
<body>

    <header>
        <div class="container">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-white.svg" alt="logo Bankboost branca">
            </a>
            <div class="right">
                <nav>
                    <a href="#">Produtos Boost</a>
                    <a href="#">Conta digital PJ</a>
                    <a href="#">Quem somos</a>
                    <a href="#">Blog</a>
                    <a href="#">Ajuda</a>
                </nav>
                <a href="#" class="btn">Abra sua conta digital</a>
            </div>
            <button>
                <img src="<?php echo get_template_directory_uri() ?>/img/icon-hambuger.svg" class="btn-mobile" alt="">
            </button>
        </div>
    </header>