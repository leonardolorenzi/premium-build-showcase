<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo esc_html(get_theme_mod('site_title', 'Gold Standard Constructions LLC')); ?> - <?php echo esc_html(get_theme_mod('site_tagline', 'Luxury Construction Services in New Jersey')); ?></title>
    <meta name="description" content="<?php echo esc_attr(get_theme_mod('site_description', 'Gold Standard Constructions LLC delivers premium residential & commercial construction services with unmatched quality and attention to detail in Newark & Kearny, NJ.')); ?>">
    
    <!-- SEO Meta Tags -->
    <meta name="keywords" content="luxury painting, commercial painting, construction, New Jersey, Newark, Kearny, sheetrock, taping, cabinets, epoxy flooring, LVT flooring">
    <meta name="author" content="Gold Standard Constructions LLC">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo esc_url(home_url()); ?>">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo esc_attr(get_theme_mod('site_title', 'Gold Standard Constructions LLC')); ?>">
    <meta property="og:description" content="<?php echo esc_attr(get_theme_mod('site_description', 'Premium residential & commercial construction services in New Jersey')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_theme_mod('hero_background_image', get_template_directory_uri() . '/assets/hero-construction.jpg')); ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header" id="site-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="site-logo">
                    <a href="<?php echo esc_url(home_url()); ?>" class="logo">
                        <?php echo esc_html(get_theme_mod('site_logo_text', 'Gold Standard')); ?>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="desktop-nav">
                    <ul class="nav-menu">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>

                <!-- Contact Info & CTA -->
                <div class="header-cta">
                    <div class="header-contact">
                        <span class="contact-phone"><?php echo esc_html(get_theme_mod('header_phone', '(973) 417-1404')); ?></span>
                    </div>
                    <a href="#contact" class="btn btn-primary">Free Quote</a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle mobile menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav class="mobile-nav" id="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#testimonials">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="mobile-contact">
                    <p>Call us: <?php echo esc_html(get_theme_mod('header_phone', '(973) 417-1404')); ?></p>
                    <a href="#contact" class="btn btn-primary">Get Free Quote</a>
                </div>
            </nav>
        </div>
    </header>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('site-header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            const mobileNav = document.getElementById('mobile-nav');
            this.classList.toggle('active');
            mobileNav.classList.toggle('active');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
                // Close mobile menu if open
                const mobileNav = document.getElementById('mobile-nav');
                const toggle = document.getElementById('mobile-menu-toggle');
                mobileNav.classList.remove('active');
                toggle.classList.remove('active');
            });
        });
    </script>