<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- MENU PRINCIPAL RESPONSIVO -->
<nav class="nav-principal" aria-label="Navegação principal">
    <div class="nav-container">
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-menu">Educação Que Reflete</a>

        <!-- Menu Desktop -->
        <div class="nav-menu">
            <a href="#video" class="nav-item">
                <i class="fas fa-play-circle" aria-hidden="true"></i>
                <span>Apresentação</span>
            </a>
            <a href="#portais" class="nav-item">
                <i class="fas fa-door-open" aria-hidden="true"></i>
                <span>Nossos Portais</span>
            </a>
            <a href="#quem-somos" class="nav-item">
                <i class="fas fa-heart" aria-hidden="true"></i>
                <span>Quem Somos</span>
            </a>
            <a href="#escolas-waldorf" class="nav-item">
                <i class="fas fa-school" aria-hidden="true"></i>
                <span>Escolas</span>
            </a>
            <a href="#contato" class="nav-item">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <span>Contato</span>
            </a>
        </div>

        <!-- Hamburger Menu -->
        <button class="hamburger" id="hamburger-btn" aria-label="Abrir menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Menu Mobile -->
<div class="mobile-menu" id="mobile-menu">
    <button class="close-menu" id="close-menu" aria-label="Fechar menu">
        <i class="fas fa-times"></i>
    </button>
    
    <a href="#video" class="mobile-nav-item">
        <i class="fas fa-play-circle" aria-hidden="true"></i>
        <span>Apresentação</span>
    </a>
    <a href="#portais" class="mobile-nav-item">
        <i class="fas fa-door-open" aria-hidden="true"></i>
        <span>Nossos Portais</span>
    </a>
    <a href="#quem-somos" class="mobile-nav-item">
        <i class="fas fa-heart" aria-hidden="true"></i>
        <span>Quem Somos</span>
    </a>
    <a href="#escolas-waldorf" class="mobile-nav-item">
        <i class="fas fa-school" aria-hidden="true"></i>
        <span>Escolas Waldorf</span>
    </a>
    <a href="#contato" class="mobile-nav-item">
        <i class="fas fa-envelope" aria-hidden="true"></i>
        <span>Contato</span>
    </a>
</div>

<!-- HEADER COM LOGO -->
<header class="header-principal" role="banner">
    <div class="logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/logo-educacao-que-reflete.jpg" 
             alt="Educação Que Reflete" 
             class="logo-img"
             loading="lazy"
             width="120" 
             height="120">
        <h1 class="logo-texto">Educação Que Reflete</h1>
        <p class="logo-slogan" aria-live="polite"></p>
    </div>
</header>

<main role="main">