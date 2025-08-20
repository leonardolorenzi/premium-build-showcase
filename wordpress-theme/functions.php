<?php
/**
 * Gold Standard Constructions Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function gold_standard_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'gold_standard_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function gold_standard_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('gold-standard-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('gold-standard-script', get_template_directory_uri() . '/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gold_standard_scripts');

/**
 * Theme Customizer
 */
function gold_standard_customize_register($wp_customize) {
    
    // Site Identity Section
    $wp_customize->add_setting('site_title', array(
        'default' => 'Gold Standard Constructions LLC',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('site_title', array(
        'label' => 'Site Title',
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('site_tagline', array(
        'default' => 'Luxury Construction Services in New Jersey',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('site_tagline', array(
        'label' => 'Site Tagline',
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('site_description', array(
        'default' => 'Gold Standard Constructions LLC delivers premium residential & commercial construction services with unmatched quality and attention to detail in Newark & Kearny, NJ.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('site_description', array(
        'label' => 'Site Description (SEO)',
        'section' => 'title_tagline',
        'type' => 'textarea',
    ));

    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Luxury Craftsmanship, Built to Last',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Premium residential & commercial construction services delivering exceptional quality and sustainable solutions in Newark & Kearny, NJ.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_subtitle', array(
        'label' => 'Hero Subtitle',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('hero_button_text', array(
        'default' => 'Request Free Quote',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_button_text', array(
        'label' => 'Hero Button Text',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_background_image', array(
        'default' => get_template_directory_uri() . '/assets/hero-construction.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => 'Hero Background Image',
        'section' => 'hero_section',
    )));

    // Statistics
    $wp_customize->add_setting('stat_years', array(
        'default' => '15+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('stat_years', array(
        'label' => 'Years Experience',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('stat_projects', array(
        'default' => '500+',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('stat_projects', array(
        'label' => 'Projects Completed',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('stat_satisfaction', array(
        'default' => '100%',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('stat_satisfaction', array(
        'label' => 'Client Satisfaction',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // About Section
    $wp_customize->add_section('about_section', array(
        'title' => 'About Section',
        'priority' => 31,
    ));

    $wp_customize->add_setting('about_title', array(
        'default' => 'About Gold Standard Constructions',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_title', array(
        'label' => 'About Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_subtitle', array(
        'default' => 'Delivering Excellence in Every Project',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_subtitle', array(
        'label' => 'About Subtitle',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_description', array(
        'default' => 'Gold Standard Constructions LLC specializes in luxury residential & commercial painting, sheetrock & taping, trimming & cabinets, epoxy flooring, and LVT flooring. Founded by Leonardo Henrique Prestes Lorenzi and Edson Da Silva, our company delivers high-quality, sustainable, and client-focused construction services in New Jersey.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_description', array(
        'label' => 'About Description',
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_founders', array(
        'default' => 'Leonardo Henrique Prestes Lorenzi and Edson Da Silva',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_founders', array(
        'label' => 'Founders',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_license', array(
        'default' => 'EIN 33-2032997, Entity ID 0451180341',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_license', array(
        'label' => 'License Information',
        'section' => 'about_section',
        'type' => 'text',
    ));

    // Services Section
    $wp_customize->add_section('services_section', array(
        'title' => 'Services Section',
        'priority' => 32,
    ));

    $wp_customize->add_setting('services_title', array(
        'default' => 'Our Premium Services',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('services_title', array(
        'label' => 'Services Title',
        'section' => 'services_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('services_subtitle', array(
        'default' => 'Expert craftsmanship in every service we provide',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('services_subtitle', array(
        'label' => 'Services Subtitle',
        'section' => 'services_section',
        'type' => 'text',
    ));

    // Individual Services
    $services = array(
        1 => array('title' => 'Luxury Painting', 'desc' => 'Premium interior and exterior painting with high-end finishes and attention to detail.', 'icon' => '🎨'),
        2 => array('title' => 'Commercial Painting', 'desc' => 'Professional commercial painting services for offices, retail spaces, and industrial buildings.', 'icon' => '🏢'),
        3 => array('title' => 'Sheetrock & Taping', 'desc' => 'Expert drywall installation, repair, and finishing for smooth, professional results.', 'icon' => '⚡'),
        4 => array('title' => 'Trimming & Cabinets', 'desc' => 'Custom trim work and cabinet installation to add elegance and functionality.', 'icon' => '📐'),
        5 => array('title' => 'Epoxy Flooring', 'desc' => 'Durable, high-gloss epoxy flooring solutions for residential and commercial spaces.', 'icon' => '✨'),
        6 => array('title' => 'LVT Flooring', 'desc' => 'Luxury vinyl tile installation with premium materials and expert craftsmanship.', 'icon' => '🏠')
    );

    foreach ($services as $i => $service) {
        $wp_customize->add_setting("service_{$i}_title", array(
            'default' => $service['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("service_{$i}_title", array(
            'label' => "Service {$i} Title",
            'section' => 'services_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("service_{$i}_description", array(
            'default' => $service['desc'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("service_{$i}_description", array(
            'label' => "Service {$i} Description",
            'section' => 'services_section',
            'type' => 'textarea',
        ));

        $wp_customize->add_setting("service_{$i}_icon", array(
            'default' => $service['icon'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("service_{$i}_icon", array(
            'label' => "Service {$i} Icon (Emoji)",
            'section' => 'services_section',
            'type' => 'text',
        ));
    }

    // Gallery Section
    $wp_customize->add_section('gallery_section', array(
        'title' => 'Gallery Section',
        'priority' => 33,
    ));

    $wp_customize->add_setting('gallery_title', array(
        'default' => 'Our Work Gallery',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('gallery_title', array(
        'label' => 'Gallery Title',
        'section' => 'gallery_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('gallery_subtitle', array(
        'default' => 'See the quality and craftsmanship in our completed projects',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('gallery_subtitle', array(
        'label' => 'Gallery Subtitle',
        'section' => 'gallery_section',
        'type' => 'text',
    ));

    // Gallery Images
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("gallery_image_{$i}", array(
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "gallery_image_{$i}", array(
            'label' => "Gallery Image {$i}",
            'section' => 'gallery_section',
        )));
    }

    // Testimonials Section
    $wp_customize->add_section('testimonials_section', array(
        'title' => 'Testimonials Section',
        'priority' => 34,
    ));

    $wp_customize->add_setting('testimonials_title', array(
        'default' => 'What Our Clients Say',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('testimonials_title', array(
        'label' => 'Testimonials Title',
        'section' => 'testimonials_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('testimonials_subtitle', array(
        'default' => 'Real feedback from satisfied customers',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('testimonials_subtitle', array(
        'label' => 'Testimonials Subtitle',
        'section' => 'testimonials_section',
        'type' => 'text',
    ));

    // Individual Testimonials
    $testimonials = array(
        1 => array('name' => 'Michael Rodriguez', 'role' => 'Homeowner', 'content' => 'Gold Standard Constructions transformed our home with their luxury painting services. The attention to detail and quality of work exceeded our expectations.'),
        2 => array('name' => 'Sarah Chen', 'role' => 'Business Owner', 'content' => 'Their commercial painting team completed our office renovation ahead of schedule with exceptional quality. Highly recommend their professional services.'),
        3 => array('name' => 'David Thompson', 'role' => 'Property Manager', 'content' => 'We\'ve worked with Gold Standard on multiple projects. Their epoxy flooring and trim work is always top-notch and competitively priced.')
    );

    foreach ($testimonials as $i => $testimonial) {
        $wp_customize->add_setting("testimonial_{$i}_name", array(
            'default' => $testimonial['name'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("testimonial_{$i}_name", array(
            'label' => "Testimonial {$i} Name",
            'section' => 'testimonials_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("testimonial_{$i}_role", array(
            'default' => $testimonial['role'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("testimonial_{$i}_role", array(
            'label' => "Testimonial {$i} Role",
            'section' => 'testimonials_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("testimonial_{$i}_content", array(
            'default' => $testimonial['content'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("testimonial_{$i}_content", array(
            'label' => "Testimonial {$i} Content",
            'section' => 'testimonials_section',
            'type' => 'textarea',
        ));
    }

    // Contact Section
    $wp_customize->add_section('contact_section', array(
        'title' => 'Contact Section',
        'priority' => 35,
    ));

    $wp_customize->add_setting('contact_title', array(
        'default' => 'Get Your Free Estimate Today',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_title', array(
        'label' => 'Contact Title',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_subtitle', array(
        'default' => 'Ready to start your next construction project? Contact us for a free consultation and estimate.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_subtitle', array(
        'label' => 'Contact Subtitle',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_phone', array(
        'default' => '(973) 417-1404',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label' => 'Phone Number',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_email', array(
        'default' => 'contact@goldstandardconstructions.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('contact_email', array(
        'label' => 'Email Address',
        'section' => 'contact_section',
        'type' => 'email',
    ));

    $wp_customize->add_setting('contact_address_main', array(
        'default' => 'Newark, NJ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address_main', array(
        'label' => 'Main Office Address',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('contact_address_branch', array(
        'default' => 'Kearny, NJ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('contact_address_branch', array(
        'label' => 'Branch Office Address',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title' => 'Footer Settings',
        'priority' => 36,
    ));

    $wp_customize->add_setting('footer_company_name', array(
        'default' => 'Gold Standard Constructions LLC',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_company_name', array(
        'label' => 'Company Name',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_company_description', array(
        'default' => 'Delivering luxury residential & commercial construction services with unmatched quality and attention to detail.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('footer_company_description', array(
        'label' => 'Company Description',
        'section' => 'footer_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('footer_ein', array(
        'default' => '33-2032997',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_ein', array(
        'label' => 'EIN Number',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_entity_id', array(
        'default' => '0451180341',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_entity_id', array(
        'label' => 'Entity ID',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_instagram', array(
        'default' => 'https://instagram.com/GoldStandardConstructions',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_instagram', array(
        'label' => 'Instagram URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('footer_linkedin', array(
        'default' => 'https://linkedin.com/company/gold-standard-constructions',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_linkedin', array(
        'label' => 'LinkedIn URL',
        'section' => 'footer_section',
        'type' => 'url',
    ));

    $wp_customize->add_setting('footer_copyright', array(
        'default' => '© 2024 Gold Standard Constructions LLC. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_copyright', array(
        'label' => 'Copyright Text',
        'section' => 'footer_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'gold_standard_customize_register');

/**
 * Handle Contact Form Submission
 */
function handle_contact_form_submission() {
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $service = sanitize_text_field($_POST['service']);
    $message = sanitize_textarea_field($_POST['message']);

    // Prepare email
    $to = get_theme_mod('contact_email', 'contact@goldstandardconstructions.com');
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    $body = "New contact form submission:\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Service: " . $service . "\n";
    $body .= "Message: " . $message . "\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_redirect(home_url('/?contact=success'));
    } else {
        wp_redirect(home_url('/?contact=error'));
    }
    exit;
}
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form_submission');
add_action('admin_post_contact_form_submit', 'handle_contact_form_submission');

/**
 * Add custom CSS for additional styling
 */
function gold_standard_custom_css() {
    ?>
    <style>
        /* Mobile Menu Styles */
        .mobile-menu-toggle {
            display: none;
            flex-direction: column;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu-toggle span {
            width: 25px;
            height: 3px;
            background: hsl(var(--foreground));
            margin: 3px 0;
            transition: var(--transition-smooth);
        }

        .mobile-nav {
            display: none;
            background: hsl(var(--card));
            border-top: 1px solid hsl(var(--border));
            padding: 1rem 0;
        }

        .mobile-nav.active {
            display: block;
        }

        .mobile-menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mobile-menu li {
            margin: 0.5rem 0;
        }

        .mobile-menu a {
            display: block;
            padding: 0.5rem 1rem;
            color: hsl(var(--foreground));
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .mobile-menu a:hover {
            color: hsl(var(--gold));
            background: hsl(var(--muted));
        }

        .mobile-contact {
            padding: 1rem;
            text-align: center;
            border-top: 1px solid hsl(var(--border));
            margin-top: 1rem;
        }

        /* Hero Badge */
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: hsl(var(--gold) / 0.1);
            border: 1px solid hsl(var(--gold) / 0.2);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            margin-bottom: 1.5rem;
            color: hsl(var(--gold));
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Hero Features */
        .hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin: 2rem 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .feature-icon {
            color: hsl(var(--gold));
            font-weight: bold;
        }

        /* Hero Buttons */
        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin: 2rem 0;
        }

        .btn-arrow {
            margin-left: 0.5rem;
            transition: var(--transition-smooth);
        }

        .btn:hover .btn-arrow {
            transform: translateX(4px);
        }

        /* Hero Stats */
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid hsl(var(--border) / 0.2);
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: hsl(var(--gold));
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: hsl(var(--muted-foreground));
        }

        /* About Content */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-details {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid hsl(var(--border));
        }

        .detail-item {
            margin: 1rem 0;
        }

        /* Testimonials Grid */
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: hsl(var(--card));
            border: 1px solid hsl(var(--border));
            border-radius: var(--radius);
            padding: 2rem;
            text-align: center;
            transition: var(--transition-smooth);
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-elegant);
            border-color: hsl(var(--gold));
        }

        .testimonial-stars {
            color: hsl(var(--gold));
            margin-bottom: 1rem;
        }

        .testimonial-content {
            font-style: italic;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .testimonial-author strong {
            display: block;
            color: hsl(var(--foreground));
            margin-bottom: 0.25rem;
        }

        .testimonial-author span {
            color: hsl(var(--muted-foreground));
            font-size: 0.9rem;
        }

        /* Contact Content */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }

        .contact-info {
            background: hsl(var(--card));
            border: 1px solid hsl(var(--border));
            border-radius: var(--radius);
            padding: 2rem;
        }

        .contact-item {
            margin: 1rem 0;
        }

        .contact-item strong {
            color: hsl(var(--gold));
        }

        /* Footer Styles */
        .footer-links {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-links li {
            margin: 0.5rem 0;
        }

        .contact-details a {
            color: hsl(var(--muted-foreground));
            text-decoration: none;
        }

        .contact-details a:hover {
            color: hsl(var(--gold));
        }

        .office-locations {
            margin-top: 1rem;
        }

        .social-links {
            margin: 1rem 0;
        }

        .social-links a {
            display: inline-block;
            margin-right: 1rem;
            padding: 0.5rem;
            color: hsl(var(--muted-foreground));
            text-decoration: none;
            border: 1px solid hsl(var(--border));
            border-radius: var(--radius);
            transition: var(--transition-smooth);
        }

        .social-links a:hover {
            color: hsl(var(--gold));
            border-color: hsl(var(--gold));
        }

        .footer-cta {
            margin-top: 1rem;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid hsl(var(--border));
        }

        .footer-legal {
            display: flex;
            gap: 1rem;
        }

        .footer-legal a {
            color: hsl(var(--muted-foreground));
            text-decoration: none;
            font-size: 0.9rem;
        }

        .footer-legal a:hover {
            color: hsl(var(--gold));
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: flex;
            }

            .desktop-nav,
            .header-cta {
                display: none;
            }

            .hero-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .hero-features {
                justify-content: flex-start;
                text-align: left;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .footer-legal {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 280px;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'gold_standard_custom_css');

/**
 * Create JavaScript file for theme functionality
 */
function create_theme_js_file() {
    $js_content = '
// Gold Standard Constructions Theme JavaScript

document.addEventListener("DOMContentLoaded", function() {
    // Header scroll effect
    const header = document.getElementById("site-header");
    if (header) {
        window.addEventListener("scroll", function() {
            if (window.scrollY > 100) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    }

    // Mobile menu toggle
    const mobileToggle = document.getElementById("mobile-menu-toggle");
    const mobileNav = document.getElementById("mobile-nav");
    
    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener("click", function() {
            this.classList.toggle("active");
            mobileNav.classList.toggle("active");
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll(\'a[href^="#"]\').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute("href"));
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }
            // Close mobile menu if open
            if (mobileNav && mobileToggle) {
                mobileNav.classList.remove("active");
                mobileToggle.classList.remove("active");
            }
        });
    });

    // Form validation
    const contactForm = document.querySelector(".contact-form");
    if (contactForm) {
        contactForm.addEventListener("submit", function(e) {
            const name = this.querySelector(\'input[name="name"]\').value.trim();
            const email = this.querySelector(\'input[name="email"]\').value.trim();
            
            if (!name || !email) {
                e.preventDefault();
                alert("Please fill in all required fields.");
                return;
            }
            
            // Simple email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert("Please enter a valid email address.");
                return;
            }
        });
    }

    // Contact form status messages
    const urlParams = new URLSearchParams(window.location.search);
    const contactStatus = urlParams.get("contact");
    
    if (contactStatus === "success") {
        alert("Thank you! Your message has been sent successfully. We will contact you soon.");
        // Remove the parameter from URL
        window.history.replaceState({}, document.title, window.location.pathname);
    } else if (contactStatus === "error") {
        alert("Sorry, there was an error sending your message. Please try again or call us directly.");
        window.history.replaceState({}, document.title, window.location.pathname);
    }

    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, observerOptions);

    // Observe service cards, testimonial cards, and other elements
    document.querySelectorAll(".service-card, .testimonial-card, .gallery-item").forEach(el => {
        el.style.opacity = "0";
        el.style.transform = "translateY(20px)";
        el.style.transition = "opacity 0.6s ease, transform 0.6s ease";
        observer.observe(el);
    });
});
';

    $js_dir = get_template_directory() . '/js';
    if (!file_exists($js_dir)) {
        wp_mkdir_p($js_dir);
    }
    
    file_put_contents($js_dir . '/theme.js', $js_content);
}
add_action('after_switch_theme', 'create_theme_js_file');

// Create JS file on theme activation
if (!file_exists(get_template_directory() . '/js/theme.js')) {
    create_theme_js_file();
}
?>