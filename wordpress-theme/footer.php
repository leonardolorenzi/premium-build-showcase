    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Company Info -->
                <div class="footer-section">
                    <h3><?php echo esc_html(get_theme_mod('footer_company_name', 'Gold Standard Constructions LLC')); ?></h3>
                    <p><?php echo esc_html(get_theme_mod('footer_company_description', 'Delivering luxury residential & commercial construction services with unmatched quality and attention to detail.')); ?></p>
                    <div class="company-details">
                        <p><strong>EIN:</strong> <?php echo esc_html(get_theme_mod('footer_ein', '33-2032997')); ?></p>
                        <p><strong>Entity ID:</strong> <?php echo esc_html(get_theme_mod('footer_entity_id', '0451180341')); ?></p>
                    </div>
                </div>

                <!-- Services -->
                <div class="footer-section">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Luxury Painting</a></li>
                        <li><a href="#services">Commercial Painting</a></li>
                        <li><a href="#services">Sheetrock & Taping</a></li>
                        <li><a href="#services">Trimming & Cabinets</a></li>
                        <li><a href="#services">Epoxy Flooring</a></li>
                        <li><a href="#services">LVT Flooring</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <div class="contact-details">
                        <p><strong>Phone:</strong> <a href="tel:<?php echo esc_attr(str_replace(array('(', ')', ' ', '-'), '', get_theme_mod('footer_phone', '(973) 417-1404'))); ?>"><?php echo esc_html(get_theme_mod('footer_phone', '(973) 417-1404')); ?></a></p>
                        <p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr(get_theme_mod('footer_email', 'contact@goldstandardconstructions.com')); ?>"><?php echo esc_html(get_theme_mod('footer_email', 'contact@goldstandardconstructions.com')); ?></a></p>
                        <div class="office-locations">
                            <p><strong>Main Office:</strong> <?php echo esc_html(get_theme_mod('footer_main_office', 'Newark, NJ')); ?></p>
                            <p><strong>Branch Office:</strong> <?php echo esc_html(get_theme_mod('footer_branch_office', 'Kearny, NJ')); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Social Media & CTA -->
                <div class="footer-section">
                    <h3>Connect With Us</h3>
                    <div class="social-links">
                        <?php 
                        $instagram = get_theme_mod('footer_instagram', 'https://instagram.com/GoldStandardConstructions');
                        $linkedin = get_theme_mod('footer_linkedin', 'https://linkedin.com/company/gold-standard-constructions');
                        if ($instagram) : ?>
                            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener">Instagram</a>
                        <?php endif; 
                        if ($linkedin) : ?>
                            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">LinkedIn</a>
                        <?php endif; ?>
                    </div>
                    <div class="footer-cta">
                        <a href="#contact" class="btn btn-primary">Get Free Estimate</a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p><?php echo esc_html(get_theme_mod('footer_copyright', '© 2024 Gold Standard Constructions LLC. All rights reserved.')); ?></p>
                </div>
                <div class="footer-legal">
                    <a href="/privacy-policy">Privacy Policy</a>
                    <a href="/terms-of-service">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?php echo esc_js(get_theme_mod('footer_company_name', 'Gold Standard Constructions LLC')); ?>",
        "description": "<?php echo esc_js(get_theme_mod('site_description', 'Premium residential & commercial construction services in New Jersey')); ?>",
        "url": "<?php echo esc_url(home_url()); ?>",
        "telephone": "<?php echo esc_js(get_theme_mod('footer_phone', '(973) 417-1404')); ?>",
        "email": "<?php echo esc_js(get_theme_mod('footer_email', 'contact@goldstandardconstructions.com')); ?>",
        "address": [
            {
                "@type": "PostalAddress",
                "addressLocality": "Newark",
                "addressRegion": "NJ",
                "addressCountry": "US"
            },
            {
                "@type": "PostalAddress",
                "addressLocality": "Kearny",
                "addressRegion": "NJ",
                "addressCountry": "US"
            }
        ],
        "serviceArea": {
            "@type": "State",
            "name": "New Jersey"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Construction Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Luxury Painting Services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Commercial Painting Services"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Sheetrock & Taping"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Trimming & Cabinet Installation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Epoxy Flooring"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "LVT Flooring Installation"
                    }
                }
            ]
        },
        "sameAs": [
            "<?php echo esc_url(get_theme_mod('footer_instagram', 'https://instagram.com/GoldStandardConstructions')); ?>",
            "<?php echo esc_url(get_theme_mod('footer_linkedin', 'https://linkedin.com/company/gold-standard-constructions')); ?>"
        ]
    }
    </script>

    <?php wp_footer(); ?>
</body>
</html>