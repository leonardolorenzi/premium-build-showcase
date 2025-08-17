import { Star, Quote } from 'lucide-react';
import { Card } from '@/components/ui/card';
import { useTestimonialsData } from '@/hooks/useSanity';

const Testimonials = () => {
  const { data: testimonialsData } = useTestimonialsData();
  
  const defaultTestimonials = [
    {
      id: 1,
      name: 'Michael Rodriguez',
      location: 'Newark, NJ',
      project: 'Luxury Home Painting',
      rating: 5,
      text: 'Gold Standard Constructions transformed our home with their exceptional painting services. The attention to detail and professionalism exceeded our expectations. Highly recommended!'
    },
    {
      id: 2,
      name: 'Sarah Chen',
      location: 'Kearny, NJ',
      project: 'Commercial Office Renovation',
      rating: 5,
      text: 'Outstanding work on our office renovation. The team was punctual, clean, and delivered exactly what was promised. The quality of work speaks for itself.'
    },
    {
      id: 3,
      name: 'David Thompson',
      location: 'Jersey City, NJ',
      project: 'Custom Millwork & Trim',
      rating: 5,
      text: 'The custom millwork and trim installation was flawless. Leonardo and his team are true craftsmen who take pride in their work. Worth every penny!'
    },
    {
      id: 4,
      name: 'Maria Santos',
      location: 'Elizabeth, NJ',
      project: 'Epoxy Flooring',
      rating: 5,
      text: 'Our garage looks incredible with the new epoxy flooring. Professional installation and the finish is absolutely beautiful. Great communication throughout the process.'
    },
    {
      id: 5,
      name: 'Robert Johnson',
      location: 'Irvington, NJ',
      project: 'Commercial Painting',
      rating: 5,
      text: 'Gold Standard handled our commercial building painting with minimal disruption to our business. Excellent project management and superior results.'
    },
    {
      id: 6,
      name: 'Lisa Park',
      location: 'Bloomfield, NJ',
      project: 'LVT Flooring Installation',
      rating: 5,
      text: 'The LVT flooring installation was completed perfectly and on schedule. The team was respectful, clean, and the final result is stunning.'
    }
  ];

  const testimonials = Array.isArray(testimonialsData) && testimonialsData.length > 0 
    ? testimonialsData.map((testimonial: any, index: number) => ({
        id: index + 1,
        name: testimonial.name,
        location: testimonial.role, // Using role field for location/title
        project: testimonial.role,
        rating: testimonial.rating || 5,
        text: testimonial.content
      }))
    : defaultTestimonials;

  return (
    <section className="py-20 bg-card">
      <div className="container mx-auto px-4">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              <span className="text-foreground">Client </span>
              <span className="text-gradient-gold">Testimonials</span>
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Don't just take our word for it. Hear what our satisfied clients 
              have to say about their experience with Gold Standard Constructions.
            </p>
          </div>

          {/* Testimonials Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {testimonials.map((testimonial, index) => (
              <Card 
                key={testimonial.id} 
                className="p-8 bg-background border-border hover-lift animate-scale-in relative"
                style={{ animationDelay: `${index * 0.1}s` }}
              >
                {/* Quote Icon */}
                <div className="absolute top-6 right-6 opacity-10">
                  <Quote className="w-12 h-12 text-gold" />
                </div>

                {/* Rating */}
                <div className="flex items-center mb-4">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="w-5 h-5 text-gold fill-gold" />
                  ))}
                </div>

                {/* Testimonial Text */}
                <p className="text-muted-foreground mb-6 leading-relaxed italic">
                  "{testimonial.text}"
                </p>

                {/* Client Info */}
                <div className="border-t border-border pt-6">
                  <h4 className="text-lg font-semibold text-foreground mb-1">
                    {testimonial.name}
                  </h4>
                  <p className="text-sm text-muted-foreground mb-2">
                    {testimonial.location}
                  </p>
                  <div className="inline-block px-3 py-1 bg-gold/10 border border-gold/20 rounded-full">
                    <span className="text-xs text-gold font-medium">
                      {testimonial.project}
                    </span>
                  </div>
                </div>
              </Card>
            ))}
          </div>

          {/* Trust Indicators */}
          <div className="mt-16 grid md:grid-cols-4 gap-8 text-center">
            <div className="bg-background p-8 rounded-lg border border-border">
              <div className="text-3xl font-bold text-gold mb-2">500+</div>
              <div className="text-sm text-muted-foreground">Satisfied Clients</div>
            </div>
            <div className="bg-background p-8 rounded-lg border border-border">
              <div className="text-3xl font-bold text-gold mb-2">15+</div>
              <div className="text-sm text-muted-foreground">Years Experience</div>
            </div>
            <div className="bg-background p-8 rounded-lg border border-border">
              <div className="text-3xl font-bold text-gold mb-2">99%</div>
              <div className="text-sm text-muted-foreground">Project Success Rate</div>
            </div>
            <div className="bg-background p-8 rounded-lg border border-border">
              <div className="text-3xl font-bold text-gold mb-2">24/7</div>
              <div className="text-sm text-muted-foreground">Support Available</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;