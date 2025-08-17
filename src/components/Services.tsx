import { Paintbrush, Building2, Hammer, Layers, Sparkles, Home } from 'lucide-react';
import { Card } from '@/components/ui/card';
import { Button } from '@/components/ui/button';

const Services = () => {
  const services = [
    {
      icon: <Paintbrush className="w-8 h-8 text-gold" />,
      title: 'Luxury Painting',
      description: 'Premium residential painting with designer finishes, custom colors, and meticulous attention to detail.',
      features: ['Interior & Exterior', 'Designer Finishes', 'Color Consultation', 'Premium Materials']
    },
    {
      icon: <Building2 className="w-8 h-8 text-gold" />,
      title: 'Commercial Painting',
      description: 'Professional commercial painting services for offices, retail spaces, and industrial facilities.',
      features: ['Office Buildings', 'Retail Spaces', 'Industrial Facilities', 'Scheduled Maintenance']
    },
    {
      icon: <Hammer className="w-8 h-8 text-gold" />,
      title: 'Sheetrock & Taping',
      description: 'Expert drywall installation and finishing for smooth, professional surfaces ready for painting.',
      features: ['New Installation', 'Repair Work', 'Texture Matching', 'Smooth Finishes']
    },
    {
      icon: <Home className="w-8 h-8 text-gold" />,
      title: 'Trimming & Cabinets',
      description: 'Custom millwork, trim installation, and cabinet refinishing to elevate your space.',
      features: ['Custom Millwork', 'Crown Molding', 'Cabinet Refinishing', 'Baseboards & Casing']
    },
    {
      icon: <Sparkles className="w-8 h-8 text-gold" />,
      title: 'Epoxy Flooring',
      description: 'Durable, high-gloss epoxy floor coatings perfect for garages, basements, and commercial spaces.',
      features: ['Garage Floors', 'Commercial Spaces', 'Decorative Options', 'Long-lasting Protection']
    },
    {
      icon: <Layers className="w-8 h-8 text-gold" />,
      title: 'LVT Flooring',
      description: 'Luxury vinyl tile installation combining beauty, durability, and easy maintenance.',
      features: ['Luxury Vinyl Tile', 'Professional Installation', 'Various Styles', 'Water Resistant']
    }
  ];

  return (
    <section id="services" className="py-20 bg-background">
      <div className="container mx-auto px-4">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              <span className="text-foreground">Our </span>
              <span className="text-gradient-gold">Services</span>
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Comprehensive construction and finishing services delivered with 
              unmatched quality and professional excellence.
            </p>
          </div>

          {/* Services Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            {services.map((service, index) => (
              <Card 
                key={index} 
                className="p-8 hover-lift bg-card border-border shadow-card animate-scale-in"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                <div className="flex items-center mb-4">
                  <div className="p-3 bg-gold/10 rounded-lg mr-4">
                    {service.icon}
                  </div>
                  <h3 className="text-xl font-semibold text-foreground">{service.title}</h3>
                </div>
                
                <p className="text-muted-foreground mb-6 leading-relaxed">
                  {service.description}
                </p>
                
                <ul className="space-y-2 mb-6">
                  {service.features.map((feature, idx) => (
                    <li key={idx} className="flex items-center text-sm text-muted-foreground">
                      <div className="w-1.5 h-1.5 bg-gold rounded-full mr-3"></div>
                      {feature}
                    </li>
                  ))}
                </ul>
                
                <Button 
                  variant="outline" 
                  className="w-full border-gold/50 text-gold hover:bg-gold hover:text-dark"
                >
                  Learn More
                </Button>
              </Card>
            ))}
          </div>

          {/* CTA Section */}
          <div className="text-center bg-card p-12 rounded-lg border border-border shadow-card">
            <h3 className="text-3xl font-bold mb-4">
              <span className="text-foreground">Ready to Start Your </span>
              <span className="text-gradient-gold">Project?</span>
            </h3>
            <p className="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
              Contact us today for a free consultation and estimate. 
              Let's bring your vision to life with our expert craftsmanship.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button 
                size="lg" 
                className="gradient-gold text-dark font-semibold px-8 py-4 shadow-gold"
              >
                Get Your Free Estimate Today
              </Button>
              
              <Button 
                variant="outline" 
                size="lg"
                className="border-gold text-gold hover:bg-gold hover:text-dark px-8 py-4"
              >
                Call (973) 417-1404
              </Button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Services;