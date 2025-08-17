import { ArrowRight, Star, CheckCircle } from 'lucide-react';
import { Button } from '@/components/ui/button';
import heroImage from '@/assets/hero-construction.jpg';
import { useHeroData } from '@/hooks/useSanity';
import { urlFor } from '@/lib/sanity';

const Hero = () => {
  const { data: heroData } = useHeroData();
  
  // Use CMS image if available, otherwise fallback to default
  const backgroundImage = (heroData as any).backgroundImage 
    ? urlFor((heroData as any).backgroundImage).url() 
    : heroImage;

  return (
    <section id="home" className="relative min-h-screen flex items-center overflow-hidden">
      {/* Background Image */}
      <div className="absolute inset-0 z-0">
        <img
          src={backgroundImage}
          alt="Luxury construction and painting services"
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 gradient-hero"></div>
      </div>

      {/* Content */}
      <div className="container mx-auto px-4 relative z-10">
        <div className="max-w-4xl mx-auto text-center md:text-left">
          <div className="animate-fade-in">
            {/* Badge */}
            <div className="inline-flex items-center space-x-2 bg-gold/10 border border-gold/20 rounded-full px-4 py-2 mb-6">
              <Star className="w-4 h-4 text-gold fill-gold" />
              <span className="text-gold text-sm font-medium">Licensed & Insured in New Jersey</span>
            </div>

            {/* Main Headline */}
            <h1 className="text-4xl md:text-6xl xl:text-7xl font-bold mb-6 leading-tight">
              <span className="text-foreground">{heroData.title?.split(', ')[0] || 'Luxury Craftsmanship'},</span>
              <br />
              <span className="text-gradient-gold">{heroData.title?.split(', ')[1] || 'Built to Last'}</span>
            </h1>

            {/* Subheading */}
            <p className="text-xl md:text-2xl text-muted-foreground mb-8 max-w-2xl">
              {heroData.subtitle || 'Premium residential & commercial construction services delivering exceptional quality and sustainable solutions in Newark & Kearny, NJ.'}
            </p>

            {/* Features */}
            <div className="flex flex-wrap gap-4 mb-8 justify-center md:justify-start">
              {[
                'Luxury Painting',
                'Commercial Projects',
                'Custom Millwork',
                'Premium Flooring'
              ].map((feature) => (
                <div key={feature} className="flex items-center space-x-2 text-sm">
                  <CheckCircle className="w-4 h-4 text-gold" />
                  <span className="text-muted-foreground">{feature}</span>
                </div>
              ))}
            </div>

            {/* CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
              <Button 
                size="lg" 
                className="gradient-gold text-dark font-semibold text-lg px-8 py-4 shadow-gold hover-lift group"
              >
                {heroData.buttonText || 'Request Free Quote'}
                <ArrowRight className="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" />
              </Button>
              
              <Button 
                variant="outline" 
                size="lg"
                className="border-gold text-gold hover:bg-gold hover:text-dark text-lg px-8 py-4"
              >
                View Our Work
              </Button>
            </div>

            {/* Trust Indicators */}
            <div className="mt-12 pt-8 border-t border-border/20">
              <div className="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div>
                  <div className="text-2xl font-bold text-gold mb-2">15+</div>
                  <div className="text-sm text-muted-foreground">Years Experience</div>
                </div>
                <div>
                  <div className="text-2xl font-bold text-gold mb-2">500+</div>
                  <div className="text-sm text-muted-foreground">Projects Completed</div>
                </div>
                <div>
                  <div className="text-2xl font-bold text-gold mb-2">100%</div>
                  <div className="text-sm text-muted-foreground">Client Satisfaction</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;