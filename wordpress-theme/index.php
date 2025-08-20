<?php get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-background">
            <?php 
            $hero_image = get_theme_mod('hero_background_image', get_template_directory_uri() . '/assets/hero-construction.jpg');
            ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_theme_mod('hero_image_alt', 'Luxury construction and painting services')); ?>">
            <div class="gradient-hero"></div>
        </div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="badge-icon">⭐</span>
                    <span><?php echo esc_html(get_theme_mod('hero_badge_text', 'Licensed & Insured in New Jersey')); ?></span>
                </div>

                <h1 class="hero-title">
                    <?php 
                    $hero_title = get_theme_mod('hero_title', 'Luxury Craftsmanship, Built to Last');
                    $title_parts = explode(', ', $hero_title);
                    if (count($title_parts) > 1) {
                        echo '<span>' . esc_html($title_parts[0]) . ',</span><br>';
                        echo '<span class="text-gradient-gold">' . esc_html($title_parts[1]) . '</span>';
                    } else {
                        echo '<span class="text-gradient-gold">' . esc_html($hero_title) . '</span>';
                    }
                    ?>
                </h1>

                <p class="hero-subtitle">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Premium residential & commercial construction services delivering exceptional quality and sustainable solutions in Newark & Kearny, NJ.')); ?>
                </p>

                <div class="hero-features">
                    <?php 
                    $features = array('Luxury Painting', 'Commercial Projects', 'Custom Millwork', 'Premium Flooring');
                    foreach ($features as $feature) {
                        echo '<div class="feature-item">';
                        echo '<span class="feature-icon">✓</span>';
                        echo '<span>' . esc_html($feature) . '</span>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary hover-lift">
                        <?php echo esc_html(get_theme_mod('hero_button_text', 'Request Free Quote')); ?>
                        <span class="btn-arrow">→</span>
                    </a>
                    <a href="#gallery" class="btn btn-outline">
                        View Our Work
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_theme_mod('stat_years', '15+')); ?></div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_theme_mod('stat_projects', '500+')); ?></div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_theme_mod('stat_satisfaction', '100%')); ?></div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('about_title', 'About Gold Standard Constructions')); ?></h2>
            <p class="section-subtitle"><?php echo esc_html(get_theme_mod('about_subtitle', 'Delivering Excellence in Every Project')); ?></p>
            
            <div class="about-content">
                <p><?php echo wp_kses_post(get_theme_mod('about_description', 'Gold Standard Constructions LLC specializes in luxury residential & commercial painting, sheetrock & taping, trimming & cabinets, epoxy flooring, and LVT flooring. Founded by Leonardo Henrique Prestes Lorenzi and Edson Da Silva, our company delivers high-quality, sustainable, and client-focused construction services in New Jersey.')); ?></p>
                
                <div class="about-details">
                    <div class="detail-item">
                        <strong>Founders:</strong> <?php echo esc_html(get_theme_mod('about_founders', 'Leonardo Henrique Prestes Lorenzi and Edson Da Silva')); ?>
                    </div>
                    <div class="detail-item">
                        <strong>License:</strong> <?php echo esc_html(get_theme_mod('about_license', 'EIN 33-2032997, Entity ID 0451180341')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('services_title', 'Our Premium Services')); ?></h2>
            <p class="section-subtitle"><?php echo esc_html(get_theme_mod('services_subtitle', 'Expert craftsmanship in every service we provide')); ?></p>
            
            <div class="services-grid">
                <?php 
                $services = array(
                    array('title' => 'Luxury Painting', 'desc' => 'Premium interior and exterior painting with high-end finishes and attention to detail.', 'icon' => '🎨'),
                    array('title' => 'Commercial Painting', 'desc' => 'Professional commercial painting services for offices, retail spaces, and industrial buildings.', 'icon' => '🏢'),
                    array('title' => 'Sheetrock & Taping', 'desc' => 'Expert drywall installation, repair, and finishing for smooth, professional results.', 'icon' => '⚡'),
                    array('title' => 'Trimming & Cabinets', 'desc' => 'Custom trim work and cabinet installation to add elegance and functionality.', 'icon' => '📐'),
                    array('title' => 'Epoxy Flooring', 'desc' => 'Durable, high-gloss epoxy flooring solutions for residential and commercial spaces.', 'icon' => '✨'),
                    array('title' => 'LVT Flooring', 'desc' => 'Luxury vinyl tile installation with premium materials and expert craftsmanship.', 'icon' => '🏠')
                );
                
                for ($i = 1; $i <= 6; $i++) {
                    $service = $services[$i-1];
                    $title = get_theme_mod("service_{$i}_title", $service['title']);
                    $desc = get_theme_mod("service_{$i}_description", $service['desc']);
                    $icon = get_theme_mod("service_{$i}_icon", $service['icon']);
                    ?>
                    <div class="service-card">
                        <div class="service-icon"><?php echo esc_html($icon); ?></div>
                        <h3><?php echo esc_html($title); ?></h3>
                        <p><?php echo esc_html($desc); ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('gallery_title', 'Our Work Gallery')); ?></h2>
            <p class="section-subtitle"><?php echo esc_html(get_theme_mod('gallery_subtitle', 'See the quality and craftsmanship in our completed projects')); ?></p>
            
            <div class="gallery-grid">
                <?php 
                for ($i = 1; $i <= 6; $i++) {
                    $image = get_theme_mod("gallery_image_{$i}");
                    if ($image) {
                        echo '<div class="gallery-item">';
                        echo '<img src="' . esc_url($image) . '" alt="Project ' . $i . '">';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('testimonials_title', 'What Our Clients Say')); ?></h2>
            <p class="section-subtitle"><?php echo esc_html(get_theme_mod('testimonials_subtitle', 'Real feedback from satisfied customers')); ?></p>
            
            <div class="testimonials-grid">
                <?php 
                $testimonials = array(
                    array('name' => 'Michael Rodriguez', 'role' => 'Homeowner', 'content' => 'Gold Standard Constructions transformed our home with their luxury painting services. The attention to detail and quality of work exceeded our expectations.'),
                    array('name' => 'Sarah Chen', 'role' => 'Business Owner', 'content' => 'Their commercial painting team completed our office renovation ahead of schedule with exceptional quality. Highly recommend their professional services.'),
                    array('name' => 'David Thompson', 'role' => 'Property Manager', 'content' => 'We\'ve worked with Gold Standard on multiple projects. Their epoxy flooring and trim work is always top-notch and competitively priced.')
                );
                
                for ($i = 1; $i <= 3; $i++) {
                    $testimonial = $testimonials[$i-1];
                    $name = get_theme_mod("testimonial_{$i}_name", $testimonial['name']);
                    $role = get_theme_mod("testimonial_{$i}_role", $testimonial['role']);
                    $content = get_theme_mod("testimonial_{$i}_content", $testimonial['content']);
                    ?>
                    <div class="testimonial-card">
                        <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                        <p class="testimonial-content">"<?php echo esc_html($content); ?>"</p>
                        <div class="testimonial-author">
                            <strong><?php echo esc_html($name); ?></strong>
                            <span><?php echo esc_html($role); ?></span>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html(get_theme_mod('contact_title', 'Get Your Free Estimate Today')); ?></h2>
            <p class="section-subtitle"><?php echo esc_html(get_theme_mod('contact_subtitle', 'Ready to start your next construction project? Contact us for a free consultation and estimate.')); ?></p>
            
            <div class="contact-content">
                <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form_submit">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div class="form-group">
                        <label class="form-label" for="name">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-input">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="service">Service Needed</label>
                        <select id="service" name="service" class="form-input">
                            <option value="">Select a service</option>
                            <option value="luxury-painting">Luxury Painting</option>
                            <option value="commercial-painting">Commercial Painting</option>
                            <option value="sheetrock-taping">Sheetrock & Taping</option>
                            <option value="trimming-cabinets">Trimming & Cabinets</option>
                            <option value="epoxy-flooring">Epoxy Flooring</option>
                            <option value="lvt-flooring">LVT Flooring</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="message">Project Details</label>
                        <textarea id="message" name="message" class="form-textarea" rows="5" placeholder="Tell us about your project..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary hover-lift">
                        Send Message
                        <span class="btn-arrow">→</span>
                    </button>
                </form>
                
                <div class="contact-info">
                    <div class="contact-item">
                        <strong>Phone:</strong> <?php echo esc_html(get_theme_mod('contact_phone', '(973) 417-1404')); ?>
                    </div>
                    <div class="contact-item">
                        <strong>Email:</strong> <?php echo esc_html(get_theme_mod('contact_email', 'contact@goldstandardconstructions.com')); ?>
                    </div>
                    <div class="contact-item">
                        <strong>Main Office:</strong> <?php echo esc_html(get_theme_mod('contact_address_main', 'Newark, NJ')); ?>
                    </div>
                    <div class="contact-item">
                        <strong>Branch Office:</strong> <?php echo esc_html(get_theme_mod('contact_address_branch', 'Kearny, NJ')); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>