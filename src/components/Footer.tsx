import { MapPin, Phone, Mail, Instagram, Linkedin, ExternalLink } from 'lucide-react';
import { Button } from '@/components/ui/button';
import { useContactData, useSiteSettings } from '@/hooks/useSanity';

const Footer = () => {
  const currentYear = new Date().getFullYear();
  const { data: contactData } = useContactData();
  const { data: siteSettings } = useSiteSettings();

  const socialLinks = [
    {
      name: 'Instagram',
      url: contactData.social?.instagram || 'https://instagram.com/GoldStandardConstructions',
      icon: <Instagram className="w-5 h-5" />
    },
    {
      name: 'LinkedIn',
      url: contactData.social?.linkedin || 'https://linkedin.com/company/gold-standard-constructions',
      icon: <Linkedin className="w-5 h-5" />
    }
  ];

  const services = [
    'Luxury Painting',
    'Commercial Painting',
    'Sheetrock & Taping',
    'Trimming & Cabinets',
    'Epoxy Flooring',
    'LVT Flooring'
  ];

  const quickLinks = [
    { name: 'About Us', href: '#about' },
    { name: 'Services', href: '#services' },
    { name: 'Gallery', href: '#gallery' },
    { name: 'Contact', href: '#contact' },
    { name: 'Free Quote', href: '#contact' }
  ];

  return (
    <footer className="bg-dark-card border-t border-border">
      <div className="container mx-auto px-4">
        {/* Main Footer Content */}
        <div className="py-16">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {/* Company Info */}
            <div className="lg:col-span-1">
              <div className="flex items-center space-x-2 mb-6">
                <div className="w-10 h-10 bg-gradient-gold rounded-lg flex items-center justify-center">
                  <span className="text-dark font-bold text-xl">G</span>
                </div>
                <div>
                  <h3 className="text-xl font-bold text-gradient-gold">Gold Standard</h3>
                  <p className="text-xs text-muted-foreground">Constructions LLC</p>
                </div>
              </div>
              
              <p className="text-muted-foreground mb-6 leading-relaxed">
                Licensed construction company delivering luxury craftsmanship and 
                premium services throughout New Jersey since 2020.
              </p>

              {/* Contact Info */}
               <div className="space-y-3">
                 <div className="flex items-center space-x-3 text-sm">
                   <Phone className="w-4 h-4 text-gold" />
                   <span className="text-muted-foreground">{contactData.phone || '(973) 417-1404'}</span>
                 </div>
                 <div className="flex items-center space-x-3 text-sm">
                   <Mail className="w-4 h-4 text-gold" />
                   <span className="text-muted-foreground">{contactData.email || 'contact@goldstandardconstructions.com'}</span>
                 </div>
                 <div className="flex items-start space-x-3 text-sm">
                   <MapPin className="w-4 h-4 text-gold mt-0.5" />
                   <div className="text-muted-foreground">
                     {contactData.addresses?.map((addr: any, index: number) => (
                       <div key={index}>{addr.city}, {addr.state}</div>
                     )) || (
                       <>
                         <div>Newark, NJ</div>
                         <div>Kearny, NJ</div>
                       </>
                     )}
                   </div>
                 </div>
               </div>
            </div>

            {/* Services */}
            <div>
              <h4 className="text-lg font-semibold text-foreground mb-6">Our Services</h4>
              <ul className="space-y-3">
                {services.map((service) => (
                  <li key={service}>
                    <a 
                      href="#services" 
                      className="text-muted-foreground hover:text-gold transition-colors duration-200 text-sm"
                    >
                      {service}
                    </a>
                  </li>
                ))}
              </ul>
            </div>

            {/* Quick Links */}
            <div>
              <h4 className="text-lg font-semibold text-foreground mb-6">Quick Links</h4>
              <ul className="space-y-3">
                {quickLinks.map((link) => (
                  <li key={link.name}>
                    <a 
                      href={link.href}
                      className="text-muted-foreground hover:text-gold transition-colors duration-200 text-sm"
                    >
                      {link.name}
                    </a>
                  </li>
                ))}
              </ul>
            </div>

            {/* CTA & Social */}
            <div>
              <h4 className="text-lg font-semibold text-foreground mb-6">Get Started Today</h4>
              
              <div className="space-y-4 mb-8">
                <p className="text-muted-foreground text-sm">
                  Ready to transform your space with luxury craftsmanship?
                </p>
                
                <Button className="w-full gradient-gold text-dark font-semibold shadow-gold">
                  Get Free Estimate
                </Button>
              </div>

              {/* Social Links */}
              <div>
                <h5 className="text-sm font-semibold text-foreground mb-3">Follow Us</h5>
                <div className="flex space-x-3">
                  {socialLinks.map((social) => (
                    <a
                      key={social.name}
                      href={social.url}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="p-2 bg-background border border-border rounded-lg text-muted-foreground hover:text-gold hover:border-gold transition-colors duration-200"
                      aria-label={social.name}
                    >
                      {social.icon}
                    </a>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Bottom Footer */}
        <div className="border-t border-border py-8">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            {/* Copyright */}
            <div className="text-sm text-muted-foreground">
              <p>{siteSettings.footerText || `© ${currentYear} Gold Standard Constructions LLC. All rights reserved.`}</p>
            </div>

            {/* Legal Links & Company Details */}
            <div className="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-6 text-xs text-muted-foreground">
              <div className="flex space-x-4">
                <span>EIN: 33-2032997</span>
                <span>Entity ID: 0451180341</span>
              </div>
              <div className="flex space-x-4">
                <a href="#" className="hover:text-gold transition-colors">Privacy Policy</a>
                <a href="#" className="hover:text-gold transition-colors">Terms of Service</a>
              </div>
            </div>
          </div>

          {/* License Info */}
          <div className="mt-4 text-center">
            <p className="text-xs text-muted-foreground">
              Licensed & Insured Construction Contractor • Serving New Jersey • 
              Specializing in Luxury Painting and Commercial Construction
            </p>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;